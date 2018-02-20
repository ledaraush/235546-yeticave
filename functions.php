<!--
содержимое лейаута нужно показать на странице (print)
?? - считайте, что содержимое главной страницы (список лотов или список задач) получено от пользователя, поэтому выводите их соответствующим образом (с фильтрацией)

 Спецификация функции

Функция должна принимать два аргумента:
путь к файлу шаблона ($template_path) и массив с данными для этого шаблона($template_data). Функция должна возвращать строку
 — итоговый HTML-код с подставленными данными.

Как должна работать функция:

Проверять, что файл шаблона, переданный в аргументе, существует. Если не существует, то функция должна вернуть пустую строку.
Функция должна подключить файл шаблона и использовать буферизацию вывода для захвата его содержимого.
Итоговое содержимое шаблона вернуть как результат работы функции.-->
<?php
//tut nachinaetsya функция шаблонизатора, которая, собственно, по спецификации
function render ($template_path, $template_data){
    //Проверять, что файл шаблона, переданный в аргументе, существует. Если нет - пустая строка
    if (!file_exists($template_path)){
        return "";
    }
    //Функция должна подключить файл шаблона и использовать буферизацию вывода для захвата его содержимого.
    ob_start();
    //запрос переменных
    extract($template_data);
    //подключение шаблона
    require_once ($template_path);
    //выключение буферизации вывода. Возвращаем все в строку $template (тут вопрос: что "всё" возвращается в какую конкретно строку. По коду понятно - по сути не очень (( )
    $template = ob_get_clean();

    //возвращаем шаблон (тут опять вопрос: откуда куда мы его возвращаем ? код ясен - суть нет)
    return $template;
}

?>