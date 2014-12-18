<?php

  // Include File
  require_once('template.class.php');
  
  // Create a new Template
  $tpl = new Template('page.tpl');
  
  // Build up data structure for template
  $peoples = array();
  $peoples[0] = array('name' => 'miller', 'surname' => 'peter');
  $peoples[1] = array('name' => 'stone', 'surname' => 'frank');
  
  // Fill up template with values
  $tpl->assign('title', 'TinyTemplateEngine');
  $tpl->assign('subtitle', 'A small one file php template engine');
  $tpl->assign('looptitle', 'Now comes a loop:');
  $tpl->assign('people', $peoples);
  $tpl->assign('footer', 'This is the end of the template!');
  
  // Display the template
  $tpl->display();

?>
