<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../../config/Database.php';
include_once '../../models/Post.php';


// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate post object
$post = new Post($db);


//Post Query
$output = $post->read();

//Get row count 
$num = $output->rowCount();

//Check if any posts
if($num > 0){
    //post array
    $posts_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $post_item = array(
            'Person_ID' => $Person_ID,
            'FName' => $FName,
            'SName' => $SName,
            'Role' => $Role
        );

        //push to "data"
        array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSOn & output
    echo json_encode($posts_arr);
}

else {
    //no Posts
    echo json_encode(
        array('message' => 'No posts Found')
    );
}


