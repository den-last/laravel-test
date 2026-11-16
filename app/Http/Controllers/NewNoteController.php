<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewNoteController extends Controller
{
    public function index()
    {
        $notes = DB::table('notes')->get();
        $tags = DB::table('tags')->get()->keyBy('id');;
        $note_tags = DB::table('note_tag')->get();

        return view('add-new', compact('notes', 'tags', 'note_tags'));
    }
    
}
