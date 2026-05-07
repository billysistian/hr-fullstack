<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function __construct()
    {
        if (request()->token) {
            Auth::setToken(request()->token);
        }
    }

    public function pdf()
    {
        $karyawan = Karyawan::all();

        $pdf = Pdf::loadView('report.karyawan-pdf', compact('karyawan'));

        return $pdf->download('laporan-karyawan.pdf');
    }
}
