<?php

require __DIR__ . '/autoload.php';

$article = \App\Models\Article::findById($_GET['id']);

if (isset($article[0])) {
    include __DIR__ . '/templates/article.php';
}
