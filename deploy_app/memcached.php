<?php
$m = new Memcached();
$m->addServer('memcached', 11211);

$m->set('int', 99);
$m->set('string', 'a simple string');
$m->set('array', array(11, 12));
/* expire 'object' key in 5 minutes */
$m->set('object', new stdclass, time() + 300);


var_dump($m->get('int'));
echo "<br>";
var_dump($m->get('string'));
echo "<br>";
var_dump($m->get('array'));
echo "<br>";
var_dump($m->get('object'));
echo "<br>";
?>
