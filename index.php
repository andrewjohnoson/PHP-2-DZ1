<?php

require __DIR__ . '/autoload.php';

// Тесты
//include __DIR__ . '/tests/1.php';
//include __DIR__ . '/tests/2.php';
//include __DIR__ . '/tests/3.php';
//include __DIR__ . '/tests/4.php';
//include __DIR__ . '/tests/5.php';


$news = \App\Models\Article::lastThreeNews();

include __DIR__ . '/templates/news.php';