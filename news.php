<?php

$filename = 'news.txt1';


if (!file_exists($filename)) {
    echo "Қателік: '$filename' файлы табылмады.\n";
    exit;
}

$news = file_get_contents($filename);

if ($news === false) {
    echo "Файлды оқу кезінде қате пайда болды.\n";
} elseif (empty(trim($news))) {
    echo "Жаңалықтар жоқ.\n";
} else {

    echo "Оқылған жаңалықтар:\n";
    echo nl2br($news);
    echo "\n";

    if (file_put_contents($filename, '') === false) {
        echo "Файлды тазалау кезінде қате пайда болды.\n";
    } else {
        echo "'$filename' файлы тазаланды.\n";
    }
}

