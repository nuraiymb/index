<?php

//<span class ="main-news_super_item_title">
//<a href=>Туман и заморозки: в 11 областях Казахстана объявили штормовое предупреждение</a>
//</span>

//span class="main-news_super_item_title">
//<a href=>Снес забор и опору газовой трубы: водитель пострадал в аварии в Алматы</a>
//</span>

$htmlFile = 'Tengri_news.html';
if (!file_exists($htmlFile)) {
    die("Файл с новостями не найден");
}
$htmlContent = file_get_contents($htmlFile);


$pattern = '/<span class="main-news_super_item_title">\s*<a href="[^"]*">([^<]*)<\/a>\s*<\/span>/';

preg_match_all($pattern, $htmlContent, $matches);

if (empty($matches[1])) {
    die("Заголовки не найдены.");
}

$newsTitles = $matches[1];

$fileNews = fopen('news.csv', 'a');

foreach ($newsTitles as $key => $Title) {
    fwrite($fileNews, $key+1 . ". " . $Title . "\n");
}
fclose($fileNews);

echo "Жаңалықтар сәтті парсить етілді, сен молодецсің !";