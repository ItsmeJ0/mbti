<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data dari tabel question
        $questions = DB::table('questions')->get();
        $question_weights = DB::table('question_weights')->get();

        // Ambil semua data dari tabel useradmin
        $admins = DB::table('useradmin')->get();

        // Kirim data ke view
        return view('admin.dashboard', [
            'questions' => $questions,
            'question_weights' => $question_weights ,
            'admins' => $admins
        ]);
    }
}
