<?php
    $data = array(
        array(
            "name" => "Text 1",
            "age" => 20,
            "other" => "In is example 1",
        ),
        array(
            "name" => "Text 2",
            "age" => 22,
            "other" => "In is example 1",
        ),
        array(
            "name" => "Text 4",
            "age" => 18,
            "other" => "In is example 1",
        )
    );
    $result_data = array(
        'data' => $data,
        'count' => count($data),
        'post' => $_POST,
        'get' => $_GET
    );

    echo json_encode( $result_data );
?>
