<?php
include('../bootstrap/routes.php');
$r = new Routes;

//Route is the link
//Path = /template/file.php
$r->routerSystem(array(
    $r->get(array(
        "route" => "/",
        "path" => "home",
        "validationLogged" => false,
        "logged" => true,
        "loggedPath" => "logged",
        "notLoggedPath" => "home"
    )),
    $r->get(array(
        "route" => "/dashboard",
        "path" => "logged",
        "validationLogged" => false,
        "logged" => false,
        "loggedPath" => "logged",
        "notLoggedPath" => "home"
    )),
    $r->get(array(
        "route" => "/haha",
        "path" => "logged",
        "validationLogged" => false,
        "logged" => false,
        "loggedPath" => "logged",
        "notLoggedPath" => "home"
    ))
));