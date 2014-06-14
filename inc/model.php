<?php

// model.php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '123');
define('DB_NAME', 'test');

function open_database_connection()
{
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASS);
    mysql_select_db(DB_NAME, $link);
    mysql_query('SET NAMES "UTF8"', $link   );

    return $link;
}

function close_database_connection($link)
{
    mysql_close($link);
}


function get_all_key_bezpl()
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_bezpl', $link);
    $key_bezplt = array();
    while ($row = mysql_fetch_assoc($result)) {
        $key_bezplt [$row['id']] = $row;
    }
    close_database_connection($link);

    return $key_bezplt;
}

function get_key_bezpl_id($id)
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_bezpl where id = ' . mysql_real_escape_string($id, $link), $link);
    $ke_bezpl = mysql_fetch_assoc($result);
    close_database_connection($link);

    return $ke_bezpl;
}

function get_all_key_pl()
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_pl', $link);
    $key_pls = array();
    while ($row = mysql_fetch_assoc($result)) {
        $key_pls[$row['id']] = $row;
    }
    close_database_connection($link);

    return $key_pls;
}

function get_key_pl_by_id($id)
{
    $link = open_database_connection();

    $result = mysql_query('SELECT * FROM key_pl where id = ' . mysql_real_escape_string($id, $link), $link);
    $key_pl = mysql_fetch_assoc($result);
    close_database_connection($link);

    return $key_pl;
}