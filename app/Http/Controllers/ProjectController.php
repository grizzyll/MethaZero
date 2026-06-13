<?php
namespace App\Http\Controllers;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Ambil semua data untuk ditampilkan di layout baru
        $projects = Project::latest()->get();
        return view('welcome', compact('projects'));
    }
}