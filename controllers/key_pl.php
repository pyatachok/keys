<?php

function key_pl_list_action()
{
    $key_pls = get_all_key_pl();
    require TEMPLATES_DIR. '/key_pl/list.php';
}

function key_pl_show_action($id)
{
    $key_pl = get_key_pl_by_id($id);
    require TEMPLATES_DIR. '/key_pl/show.php';
}

