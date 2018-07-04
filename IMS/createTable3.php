<?php
    header("Content-type: application/json");
    $employees = 
    array(
            array
            (
            "name" => "Jack",
            "title" => "Magager",
            "salary" => "$60,000",
            ),
 
            array
            (
            "name" => "Joe",
            "title" => "Developer",
            "salary" => "$50,000",
            ),
 
            array
            (
            "name" => "Susan",
            "title" => "Marketer",
            "salary" => "$50,000",
            )
        );
 
    echo json_encode($employees);
?>