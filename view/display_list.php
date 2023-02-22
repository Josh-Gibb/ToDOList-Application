<?php include('header.php'); ?>
<section>
    <?php if ($results) {
        foreach ($results as $result) {
            $id = $result['ItemNum'];
            $title = $result['Title'];
            $description = $result['Description'];
            ?>
            <form class="list" action="." method="POST">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?= $id ?>">
                <div class="item">
                    <label class="title">
                        <?= $title ?>
                    </label>
                    <br>
                    <label class="description">
                        <?= $description ?>
                    </label>
                </div>
                <button class="delete">X</button>
                <br>
            </form>
        <?php }
    } else { ?>
        <p>No Results, add items to the list</p>
    <?php } ?>
<?php include('footer.php'); ?>