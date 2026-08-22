<?php 
 
namespace App\Providers; 
 
use Illuminate\Support\ServiceProvider; 
use Illuminate\Support\Facades\URL; 
 
class AppServiceProvider extends ServiceProvider 
{ 
    public function register(): void 
    { 
        // 
    } 
 
    public function boot(): void 
    { 
        // Cloudflare Tunnel mengirim header ini kalau request aslinya HTTPS, 
        // walau traffic ke server lokal diteruskan lewat HTTP biasa. 
        // Kalau akses langsung ke 127.0.0.1 (tanpa tunnel), header ini tidak ada, 
        // jadi URL tetap http:// seperti biasa. 
        if (request()->header('X-Forwarded-Proto') === 'https') { 
            URL::forceScheme('https'); 
        } 
    } 
}