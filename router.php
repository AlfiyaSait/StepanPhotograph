<?php

$uri=parse_url($_SERVER['REQUEST_URI'])['path'];
//d($uri);
//echo (parse_url($_SERVER['REQUEST_URI'])['path']);
//if ($uri==='/') {
//    require 'main.php';
//}elseif ($uri==='/services') {
//    require 'services.php';
//}elseif ($uri==='/portfolio') {
//    require 'portfolio.php';
//}elseif ($uri==='/contacts') {
//    require 'contacts.php';
//}else {
//    require '404.php';
//}
$routes=[
    '/'=>'application/controllers/index.controller.php',
    '/services'=>'application/controllers/services.controller.php',
    '/portfolio'=>'application/controllers/portfolio.controller.php',
    '/contacts'=>'application/controllers/contacts.controller.php',
    '/blog'=>'application/controllers/blog.controller.php',
    '/admin'=>'application/controllers/admin.controller.php',

];
if (array_key_exists ($uri,$routes)) {
    require "$routes[$uri]";

} else {
    require '404.php';
}

//$flag='false';
//foreach ($routes as $key=>$value) {
//    if ($key===$uri) {
//        $flag=true;
//        break;
//    }
//}
//if ($flag) {
//    require "$routes[$uri]";
//} else {
//    require '404.php';
//}

//require isset($routes[$uri]) ? "$routes[$uri]" : '404.php';