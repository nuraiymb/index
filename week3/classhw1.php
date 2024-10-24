<?php
class Book
{
    public string $title; //кітаптың атауы
    public string $author;
    public string $publicationYear;
    public int $fileSize;


    public function __construct(string $title, string $author, string $publicationYear)
{
    $this->title = $title;
    $this->author = $author;
    $this->publicationYear = $publicationYear;
}


    public function getInfo()
    {
        return "Атау:" . $this->title . "Aвтор: $this->author" . " Басылым жылы:" . $this->publicationYear;
    }

}


 class EBook extends Book
 {
     public int $fileSize;

     public function __construct(string $title, string $author, string $publicationYear, int $fileSize)
     {
         parent::__construct($title, $author, $publicationYear);

         $this->fileSize = $fileSize;

     }
     public function getInfo()
     {
         return parent::getInfo() ." Файлдың өлшемі:" . $this->fileSize;
     }
 }

 class AudiBook extends Book
 {
     public int $duration;
     public function __construct(string $title, string $author, string $publicationYear,int $duration)
     {
         parent::__construct($title, $author, $publicationYear);

         $this->duration = $duration;

     }

     public function getInfo()
     {
         return parent::getInfo() ." Уақыттың ұзақтығы сағатта:" . $this->duration;
     }
 }



$B = new Book('IT joly','N.Baktygaliyeva','04.10.2024');

echo $B->getinfo() . "\n";
$BOOK = new EBook('IT joly','N.Baktygaliyeva','04.10.2024',3000);
echo $BOOK->getinfo();
$a = new Book ('Соғыс және бейбітшілік','Лев Толстой','1869');
echo $a->getinfo() . "\n";
$b = new Book ('Қылмыс және жаза','Фёдор Достоевский','1866');
echo $b->getinfo() . "\n";
$c = new EBook ('Шығыс экспрессіндегі өлтіру','Агата Кристи','1934',1500);
echo $c->getinfo() . "\n";
$d = new Book ('Абай жолы','Мұхтар Әуезов','1942',10000);
echo $d->getinfo() . "\n";