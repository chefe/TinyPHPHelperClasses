TinyTemplateEngine
==================

A small one file php template engine


## PHP-Code
```php
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

```

## Template
```tpl
<html>
<title>{title}</title>
<body>
<h1>{subtitle}</h1>
{LOOP:people}
<b>{name}</b> {surname}<br />
{ENDLOOP:people}
<br /><br />
<i>{footer}</i>
</body>
</html>
```
