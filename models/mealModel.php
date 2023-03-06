<?php
require("./db/db.php");


function setInformationsMeal($meal_type, $calories, $meal_details, $meal_date)
{
    $db = getConnection();
    $query = $db->prepare("INSERT INTO meal (meal_type,calories, meal_details, meal_date)
    VALUES (:meal_type, :calories, :meal_details, :meal_date) ");
    $query->bindParam(':meal_type', $meal_type);
    $query->bindParam(':calories', $calories);
    $query->bindParam(':meal_details', $meal_details);
    $query->bindParam(':meal_date', $meal_date);
    // $query->bindParam(':user_id', $user_id);

    $result = $query->execute();
    return $result;
}

// LEFT JOIN user_info on user_info.users_info_id =  meal.users_info_id