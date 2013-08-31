<?php

// Include File
require_once('template.class.php');

// Create a new Template
$tpl = new Template('page.tpl');

// Fill it up with values
$tpl->assign('title', 'Test');
$tpl->assign('subtitle', 'Nixt');
$peoples = array();
$peoples[0] = array('name' => 'home', 'surname' => 'shomo');
$peoples[1] = array('name' => 'home2', 'surname' => 'shomo2');
$tpl->assign('people', $peoples);
$tpl->assign('footer', '=== FOOTER ===');

// Display the template
$tpl->display();

?>