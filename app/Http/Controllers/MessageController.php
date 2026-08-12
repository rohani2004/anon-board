<?php

namespace App\Http\Controllers; 

class MessageController extends Controller 
{
    public function about()
    {
             // Data dummy sementara. Diganti data database pada Pertemuan 3. 
             $messages = [
                ['content' => 'Semangat buat semua peserta Skill Up Class!', 'time' => '2 menit lalu'],
                ['content' => 'Materi Laravel ternyata seru juga ya.', 'time' => '5 menit lalu'],
                ['content' => 'Halo, ini pesan anonim pertama saya.', 'time' => '10 menit lalu'],
            ];
            return view('about');
}
