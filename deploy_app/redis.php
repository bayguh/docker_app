<?php
$redis = new Redis();
$redis->connect('redis', 6379);

var_dump($redis->ping());

// hogeというkeyにhugaという値をセット
$redis->set('hoge', 'huga');

// 値を取得する
$value = $redis->get('hoge');

// huga 表示
var_dump($value);
