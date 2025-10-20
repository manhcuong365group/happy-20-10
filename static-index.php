<?php
// Simple static version without Laravel overhead

if (!function_exists('getRandomWish')) {
    function getRandomWish()
    {
        $wishes = [
            "Chúc BÉ ÊU luôn xinh đẹp, hạnh phúc và thành công! 🌸",
            "20/10 này chúc BÉ ÊU luôn tươi trẻ và rạng rỡ! ✨",
            "Gửi BÉ ÊU những lời chúc tốt đẹp nhất nhân ngày Phụ nữ Việt Nam! 💐",
            "Chúc BÉ ÊU có một ngày 20/10 thật ý nghĩa và vui vẻ! 🌺",
            "Mong BÉ ÊU luôn được yêu thương và che chở! 💖"
        ];
        return $wishes[array_rand($wishes)];
    }
}

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'gallery':
        include 'static-gallery.php';
        break;
    case 'wishes':
        include 'static-wishes.php';
        break;
    case 'about':
        include 'static-about.php';
        break;
    case 'random-wish':
        header('Content-Type: application/json');
        echo json_encode(['wish' => getRandomWish()]);
        break;
    default:
        include 'static-home.php';
        break;
}
