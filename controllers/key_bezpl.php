<?php

function key_bezpl_list_action()
{
    $key_bezplt = get_all_key_bezpl();
    require TEMPLATES_DIR. '/key_bezpl/list.php';
}

function key_bezpl_show_action($id)
{
    $key_bezpl = get_key_bezpl_by_id($id);
    require TEMPLATES_DIR. '/key_bezpl/show.php';
}