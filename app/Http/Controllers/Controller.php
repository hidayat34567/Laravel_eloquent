<?php

namespace App\Http\Controllers;

// Mengimpor trait yang menyediakan fungsionalitas untuk otorisasi, penjadwalan pekerjaan, dan validasi
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// Mendefinisikan kelas Controller yang mewarisi dari BaseController
class Controller extends BaseController
{
    // Menggunakan trait untuk otorisasi, penjadwalan pekerjaan, dan validasi
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
