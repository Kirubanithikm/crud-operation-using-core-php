<?php
$connect = mysqli_connect('localhost', 'kiruba', 'kiruba', 'curd');
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// --- FOR CREATE DATABASE ---
//create database curd;

// --- FOR CREATE TABLE ---
//CREATE TABLE product (
//    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//    name VARCHAR(100) NOT NULL,
//    description VARCHAR(255) NOT NULL,
//    price INT(10) NOT NULL
//);