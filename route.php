<?php
include('../bootstrap/routes.php');
$r = new Routes;

//Route is the link
//Path = /template/file.php
$r->routerSystem(array(
    $r->get(array(
        "route" => "/",
        "path" => "home"
    ))
));