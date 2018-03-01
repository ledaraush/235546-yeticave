<?php
//<!--для задания 7(3-1) -->
require_once ('functions.php');
require_once ('templates/lots_array.php');
require_once ('templates/lot_layout.php');
//Установим московскую часовую зону
date_default_timezone_set("Europe/Moscow");

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

//<!--для задания 5(2-1) простой -->

$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
//<!--для задания 5(2-1) двумерный -->

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
//зададим время для лотов

//<!--для задания 7(3-1) -->
$home_page = render("templates/index.php", array(
    'categories' => $categories,
    'lots__list' => $lots__list,
));
$page = render ("templates/layout.php", array (
        "title"=>"Главная",
        "content" => $home_page,
        "is_auth" => $is_auth,
        "categories"=>$categories,
));
//для страниц с лотами
$lot_page = render ("templates/lot_layout.php", array (
    "lot_title"=>"Лоты",
));
echo $page;
?>

