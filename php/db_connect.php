<?php

$link = mysql_connect("localhost", "root", "");

if(!$link)
{
    die("Could not connect to database: " . mysql_error());
}

if(!mysql_select_db("online-shop", $link))
{
    die("Could not select database: " . mysql_error());
}







