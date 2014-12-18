TinyTemplateEngine
==================

A small one file php template engine

## Supporte Placeholder
* ```{Title}``` for Variable
* ```{IF:Condition}```, ```{ELSE}``` and ```{ENDIF}``` for IF statements
* ```{LOOP:Loopvariable}``` and ```{ENDLOOP}``` for loops

## PHP-Code
```php
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
```

## Template
```html
<html>
  <head>
    <title>{title}</title>
  </head>
  <body>
    <h1>{subtitle}</h1>
    
    <p>{looptitle}</p>
    {LOOP:people}
    <b>{name}</b> {surname}<br />
    {ENDLOOP}
    
    <br /><br />
    <i>{footer}</i>
  </body>
</html>
```

## Result
```html
<html>
  <head>
    <title>TinyTemplateEngine</title>
  </head>
  <body>
    <h1>A small one file php template engine</h1>
    
    <p>Now comes a loop:</p>
    <b>miller</b> peter<br />
    <b>stone</b> frank<br />
    
    <br /><br />
    <i>This is the end of the template!</i>
  </body>
</html>
```
