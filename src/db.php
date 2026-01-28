<?php

$pdo = new PDO(
    "mysql:host=db;dbname=quiz;charset=utf8",
    "root",
    "root",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);


