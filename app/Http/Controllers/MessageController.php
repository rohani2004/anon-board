<?php

namespace App\Http\Controllers; 

use App\Models\Message; 
use Illuminate\Http\Request; 

class MessageController extends Controller 
{
    public function index()
    {
             // Ambil semua pesan, terbaru di atas. 
             $messages = Message::latest()->get();

            return view('home', ['messages' => $messages]);
    }

    public function destroy(Message $message) 
    {
        $message->delete();

        return redirect()->route('messages.index')->with('success', 'Pesan berhasil dihapus!');
    }
        // Validasi: pesan wajib diisi, maksimal 500 karakter. 
        $validated = $request->validate([
            'content' => 'required|max:500',
        ]);

        message::create($validated);

        return redirect()->route('messages.index')->with('success', 'Pesan berhasil dikirim!');
    }
    {
        return view('about');
    }
