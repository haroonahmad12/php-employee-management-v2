<?php
class Model
{
    function get($query, $params = [])
    {
        $query = conn()->prepare($query);

        try {
            $query->execute($params = []);
            $employees = $query->fetchAll();
            return $employees;
        } catch (PDOException $e) {
            return [];
        }
    }
}
