<?php
use Hayk\Database\Connection;

require_once('autoload.php');



$array1 = [
    [ "author" => "Гарри Гаррисон", "title" => "К западу от Эдема", "pubDate" => "4/13/2017" ],
    [ "author" => "Роберт Сальваторе", "title" => "Изгнанник", "pubDate" => "4/13/2017" ],
    [ "author" => "Макс Фрай", "title" => "Чужак", "pubDate" => "4/13/2017" ],
    [ "author" => "Дмитрий Глуховский", "title" => "Метро 2033", "pubDate" => "4/13/2017" ],
    [ "author" => "Анджей Сапковский", "title" => "Ведьмак", "pubDate" => "4/13/2017" ],
    [ "author" => "Нил Гейман", "title" => "Звездная пыль", "pubDate" => "4/13/2017" ],
    [ "author" => "Филип Пулман", "title" => "Золотой компас", "pubDate" => "4/13/2017" ],
    [ "author" => "Роберт Джордан", "title" => "Око мира", "pubDate" => "4/13/2017" ],
    [ "author" => "Грэм Макнилл", "title" => "Фулгрим. Образы предательства", "pubDate" => "4/13/2017" ],
    [ "author" => "Фрэнк Герберт", "title" => "Дюна", "pubDate" => "4/13/2017" ],
];

foreach ($array1 as $section => $book) {
    echo 'Book # ' . $section . '<br> ';
        foreach ($book as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }
}





// $xml = new SimpleXmlElement('<?xml version="1.0" encoding="UTF-8">?<books></books>');
// foreach ($array1 as $value) {
//     $xml->addChild('book');
//     foreach ($array1 as $key => $value) {
//         $xml->addChild('author');
//     }
// }
// $child = $xml->addChild('author');
// $child->addChild('title', 'value2');


// var_dump($xml->asXML());

// $array1["book"] = $array1["books"];
// unset($array1["books"]);


// var_dump($array1);


// $array2 = simplexml_load_file('books.xml');
// echo "<pre>";
// $json_encode = json_encode($array2);
// $json_decoded = json_decode($json_encode, TRUE);
// print_r($json_decoded);
// echo "</pre>";

// var_dump($array1 === $json_decoded);


?>









