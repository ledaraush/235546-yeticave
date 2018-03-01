<?php
    require_once ('templates/lot_layout.php');
    require_once ('/templates/lots_array.php');
    require_once('functions.php');

$lot = null;

if (isset($_GET['lot_id'])) {
    $lot_id = $_GET['lot_id'];

    foreach ($lots_list as $item) {
        if ($item['id'] == $lot_id) {
            $lot = $item;
            break;
        }
    }
}

if (!$lot) {
    http_response_code(404);
}

$page_content = render ('templates/lot_layout.php', ['lot' => $lot]);
$layout_content = render('layout.php', [
    'content' => $page_content,
    'categories' => $categories,
    'title' => 'YetiCve - Инфо о лоте',
    'is_auth' => $is_auth,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
]);
print($layout_content);
?>