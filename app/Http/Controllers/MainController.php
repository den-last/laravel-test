<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $notes = DB::table('notes')->get();
        $tags = DB::table('tags')->get()->keyBy('id');;
        $note_tags = DB::table('note_tag')->get();

        return view('main', compact('notes', 'tags', 'note_tags'));
    }
    public function show($id)
    {
        $note = DB::table('notes')->find($id);

        return view('note', compact('note'));
    }
}
