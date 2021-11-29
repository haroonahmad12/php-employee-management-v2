<?php
//require_once("lib/database.php");

class Model
{
    function get($array, $query)
    {
        $query = conn()->prepare($query);

        try {
            $query->execute($array ? $array : "");
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return [];
        }
    }
}
