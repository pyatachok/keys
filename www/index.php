
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?></title>
    </head>
    <body>
  
    </body>
</html>
<?php
// index.php



// Загружаем и инициализируем глобальные библиотеки
require_once './../inc/config.php';
require_once ROOT_DIR . '/inc/model.php';
require_once ROOT_DIR . '/inc/menu.php';
require_once ROOT_DIR . '/controllers/key_pl.php';
require_once ROOT_DIR . '/controllers/key_bezpl.php';
require_once ROOT_DIR . '/controllers/glavnaya.php';


// Внутренняя маршрутизация
$uri = $_SERVER['PHP_SELF'];


if ($uri == '/index.php') { 
    require TEMPLATES_DIR. '/glavnaya/list.php';
    // key_bezpl_list_action();
} elseif ($uri == '/index.php/key_bezpl/list')   {
    key_bezpl_list_action();
} elseif ($uri == '/index.php/key_bezpl/show' && isset($_GET['id'])) {
   // key_bezpl_show_action($_GET['id']);
} elseif ($uri == '/index.php/key_pl/list') {
    key_pl_list_action();
} elseif ($uri == '/index.php/key_pl/show' && isset($_GET['id'])) {
    key_pl_show_action($_GET['id']);
}
else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}

require_once ROOT_DIR . '/inc/menu.php';
