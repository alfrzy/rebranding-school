<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {

       $totalStudents = Student::count(); // Menghitung jumlah siswa

        return view('dashboard', compact('totalStudents'));
    }
}
