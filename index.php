<?php
require('model/database.php');
require('model/items_db.php');

$itemNum = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

//Post Data
$job = filter_input(INPUT_POST, "title", FILTER_UNSAFE_RAW);
$details = filter_input(INPUT_POST, "description", FILTER_UNSAFE_RAW);

$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);

if (display_items() != NULL) {
    $results = display_items();
}

if ($action == 'delete') {
    $count = 0;
    if ($itemNum) {
        $count = delete_item($itemNum);
        header("Location: .?deleted={$count}");
    }
}

if ($action == 'insert') {
    $count = insert_item($job, $details);
    header("Location: .?created={$count}");
}
include('view/display_list.php');
?>