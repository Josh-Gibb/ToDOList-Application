<?php
    function display_items(){
        global $db;
        $query = 'SELECT* FROM todoitems';
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
    }

    function insert_item($title, $description){
        global $db;
        $query = 'INSERT INTO todoitems(Title, Description)
                    VALUES(:title, :description)';
        $statement = $db->prepare($query);
        $statement->bindValue(":title", $title);
        $statement->bindValue(":description", $description);
        if($statement->execute()){
            $count = $statement->rowCount();
        }
        $statement->closeCursor();
        return $count;
    }
    
    function delete_item($id){
        global $db;
        $count = 0;
        $query = 'DELETE FROM todoitems
                    WHERE ItemNum = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        if($statement->execute()){
            $count = $statement->rowCount();
        }
        $statement->closeCursor();
        return $count;
    }
?>