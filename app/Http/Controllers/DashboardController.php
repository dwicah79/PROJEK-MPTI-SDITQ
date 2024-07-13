<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\About;
use App\Models\History;
use App\Models\Prestasi;
use App\Models\Keluh;
use App\Models\Visimisi;

class DashboardController extends Controller
{
    public function home()
    {
        $keluh = Keluh::get();
        $about = About::get();
        $guru = Guru::paginate(5);
        $prestasi = Prestasi::get();
        $visimisi = Visimisi::get();

        return view("dashboard.home", compact('about', 'guru', 'prestasi', 'keluh', 'visimisi')); // Mengirim data ke view
    }

    public function getData()
    {
        $guruCount = Guru::count();
        $aboutCount = About::count();
        $prestasiCount = Prestasi::count();
        $visimisiCount = Visimisi::count();
        $keluhCount = Keluh::count();


        return response()->json([
            'guru' => $guruCount,
            'about' => $aboutCount,
            'prestasi' => $prestasiCount,
            'visimisi' => $visimisiCount,
            'keluh' => $keluhCount
        ]);
    }

}
