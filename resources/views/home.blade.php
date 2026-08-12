@extends('layouts.app')   

@section('title', 'Papan Pesan')   

@section('content') 
    @if (session('success')) 
        <div class="bg-green-100 text-green-800 rounded-lg p-3 mb-4 text-sm"> 
            {{ session('success') }} 
        </div> 
    @endif 

    <<div class="bg-white rounded-lg shadow p-4"> 
            <p>{{ $message->content }}</p> 
            <div class="flex justify-between items-center mt-2"> 
                <span class="text-xs text-gray-400">{{ $message->created_at->diffForHumans() }}</span> 
                <form action="{{ route('messages.destroy', $message) }}" method="POST" 
                    onsubmit="return confirm('Hapus pesan ini?')"> 
                @csrf            
                @method('DELETE') 
                <button type="submit" class="text-xs text-red-400
    hover:text-red-600">Hapus</button>         
            </form>    
        </div> 
    </div> 

      <h2 class="text-lg font-semibold mb-3">Pesan Masuk</h2> 

      <div class="space-y-3"> 
        @foreach ($messages as $message) 
            <div class="bg-white rounded-lg shadow p-4"> 
                <p>{{ $message['content'] }}</p> 
                <span class="text-xs text-gray-400 mt-2">{{ $message->create_at->diffForHumans()}}</p> 
            </div>
        @empty
            <p class="text-gray-400 text-sm">Belum ada pesan masuk.</p> 
        @endforeach 
    </div> 
@endsection 