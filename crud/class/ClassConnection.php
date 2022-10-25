<?php
abstract class ClassConnection{
    protected function connectDB()
    {
        try {
            $conn = new mysqli("localhost", "root", "", "crud");
            return $conn;
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }
}
?>