<?php

class Model
{
    function get($query)
    {
        $query = conn()->prepare($query);

        try {
            $query->execute();
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return [];
        }
    }
}
