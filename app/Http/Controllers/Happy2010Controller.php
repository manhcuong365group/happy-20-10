<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Happy2010Controller extends Controller
{
    public function index()
    {
        $wishes = [
            [
                'icon' => 'fas fa-heart',
                'title' => 'Sức Khỏe Dồi Dào',
                'message' => 'Chúc chị em luôn có sức khỏe tốt, tinh thần lạc quan để vượt qua mọi thử thách trong cuộc sống.'
            ],
            [
                'icon' => 'fas fa-star',
                'title' => 'Thành Công Rực Rỡ',
                'message' => 'Chúc các chị em đạt được tất cả những mục tiêu đã đề ra, thành công trong sự nghiệp và cuộc sống.'
            ],
            [
                'icon' => 'fas fa-smile',
                'title' => 'Hạnh Phúc Trọn Vẹn',
                'message' => 'Chúc gia đình luôn ấm áp, tình yêu ngọt ngào và niềm vui luôn tràn đầy trong tim.'
            ],
            [
                'icon' => 'fas fa-gem',
                'title' => 'Mãi Mãi Xinh Đẹp',
                'message' => 'Chúc các chị em luôn giữ được vẻ đẹp tươi trẻ, tự tin và quyến rũ trong mọi khoảnh khắc.'
            ]
        ];

        $specialMessages = [
            "🎉 Chúc chị em luôn xinh đẹp và hạnh phúc! 🎉",
            "🌟 Phụ nữ Việt Nam - Tự hào và tự tin! 🌟",
            "💝 Cảm ơn vì đã làm thế giới trở nên đẹp hơn! 💝",
            "🌺 Chúc 20/10 thật ý nghĩa và tràn đầy niềm vui! 🌺",
            "✨ Các chị em là những ngôi sao sáng nhất! ✨",
            "🌸 Mỗi ngày của các chị đều tỏa sáng như hoa! 🌸",
            "💖 Yêu và trân trọng tất cả phụ nữ Việt Nam! 💖"
        ];

        return view('happy-20-10', compact('wishes', 'specialMessages'));
    }

    public function getRandomWish()
    {
        $messages = [
            "🎉 Chúc chị em luôn xinh đẹp và hạnh phúc! 🎉",
            "🌟 Phụ nữ Việt Nam - Tự hào và tự tin! 🌟",
            "💝 Cảm ơn vì đã làm thế giới trở nên đẹp hơn! 💝",
            "🌺 Chúc 20/10 thật ý nghĩa và tràn đầy niềm vui! 🌺",
            "✨ Các chị em là những ngôi sao sáng nhất! ✨",
            "🌸 Mỗi ngày của các chị đều tỏa sáng như hoa! 🌸",
            "💖 Yêu và trân trọng tất cả phụ nữ Việt Nam! 💖"
        ];

        return response()->json([
            'message' => $messages[array_rand($messages)]
        ]);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function wishes()
    {
        return view('wishes');
    }

    public function about()
    {
        return view('about');
    }
}
