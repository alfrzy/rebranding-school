<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{


    public function index()
{
    $students = Student::all(); // Ambil semua data siswa
    return view('students.index', compact('students')); // Kirim data ke view
}
    public function create()
    {
        return view('ppdb');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'nik' => 'required|string|unique:students,nik',
        'gender' => 'required|in:L,P',
        'place_of_birth' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'religion' => 'required|string|max:255',
        'address' => 'required|string',
        'child_number' => 'required|integer',
        'siblings_count' => 'required|integer',
        'weight' => 'required|numeric',
        'height' => 'required|numeric',
        'disability' => 'nullable|string|max:255',
        'illness_history' => 'nullable|string|max:255',
        'illness_duration' => 'nullable|integer',
        'father_name' => 'required|string|max:255',
        'father_job' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'mother_job' => 'required|string|max:255',
    ]);

    Student::create($request->all());

    return redirect('/ppdb')->with('success', 'Pendaftaran berhasil!');
}

}
