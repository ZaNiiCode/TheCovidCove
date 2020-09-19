<?php

$conn = mysqli_connect('localhost', 'cen4010s2020_g14', 'faueng2020', 'cen4010s2020_g14');

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}