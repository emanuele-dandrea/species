<?php

const SERVER = "db";
const USER = "user";
const PASSWORD = "pass";
const NAME = "species";

$link = mysqli_connect(SERVER, USER, PASSWORD, NAME);

if ($link === false) {
    die("ERROR: Could not connect." . mysqli_connect_error());
}
