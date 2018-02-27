<?php
//<!--для задания 7(3-1) -->
require_once ('functions.php');

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

//<!--для задания 5(2-1) простой -->

$categories = ["title"=>"Доски и лыжи", "title"=>"Крепления", "title"=>"Ботинки", "title"=>"Одежда", "title"=>"Инструменты", "title"=>"Разное"];
//<!--для задания 5(2-1) двумерный -->

$first_lot = [
    'title' => '2014 Rossignol District Snowboard',
    'category' => $categories[0],
    'price'=>'10999',
    'picture'=>'img/lot-1.jpg'
];
$second_lot = [
    'title'=>'DC Ply Mens 2016/2017 Snowboard',
    'category'=>$categories[1],
    'price'=>'159999',
    'picture'=>'img/lot-2.jpg'
];
$third_lot = [
    'title'=>'Крепления Union Contact Pro 2015 года размер L/XL',
    'category'=>$categories[2],
    'price'=>'8000',
    'picture'=>'img/lot-3.jpg'
];
$fourth_lot = [
    'title'=>'Ботинки для сноуборда DC Mutiny Charocal',
    'category'=>$categories[3],
    'price'=>'10999',
    'picture'=>'img/lot-4.jpg'
];
$fifth_lot = [
    'title'=>'Куртка для сноуборда DC Mutiny Charocal',
    'category'=>$categories[4],
    'price'=>'7500',
    'picture'=>'img/lot-5.jpg'
];
$sixth_lot = [
    'title'=>'Маска Oakley Canopy',
    'category'=>$categories[5],
    'price'=>'5400',
    'picture'=>'img/lot-6.jpg'
];
//двумерный массив
$lots__list = [$first_lot, $second_lot, $third_lot, $fourth_lot, $fifth_lot, $sixth_lot];

//<!--для задания 6(2-2) первая функция -->

function format_sum($value)
{
//присвоим заданному числу переменную и округлим его до целого
    $number=ceil($value);
//зададим деление на разряды так:
    if ($number >=1000)
    {
        $number=number_format($number, 0, ""," ");
    }

    //return $number . " ₽";
    return $number;
}
//<!--для задания 7(3-1) -->
$home_page = render("templates/index.php ", array(
        'categories' => $categories,
        'lots__list' => $lot,
));
$page = render ("templates/layout.php", array (
        "title"=>"Главная",
        "content" => $home_page,

));

echo $page;
?>

