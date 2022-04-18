<?php
$routes->group("", ["namespace" => "\App\Modules\Dashboard\Controllers"], function ($routes) {
	$routes->get("/", "Dashboard::index");
	$routes->get("/email", "Dashboard::send_email");
});