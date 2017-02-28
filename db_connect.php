<?php 

const DB_HOST = 'mysql.smartwebservers.com';
const DB_NAME = 'mmdd2017';
const DB_PASSWORD = 'gradshow2017';


function get_connection(){
    $mysql = mysql_connect(DB_HOST, DB_NAME, DB_PASSWORD) or DIE(mysql_error());
    mysql_select_db(DB_NAME) or DIE(mysql_error());
    return $mysql;
}
?>