<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Note;

class NewNoteController extends Controller
{
    public function index()
    {
        $notes = DB::table('notes')->get();
        $tags = DB::table('tags')->get()->keyBy('id');;
        $note_tags = DB::table('note_tag')->get();

        return view('add-new', compact('notes', 'tags', 'note_tags'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'source' => 'nullable|string|max:255',
            'book' => 'nullable|string|max:255',
        'chapter' => 'nullable|string|max:255',
        'verse' => 'nullable|string|max:255'
        ]);

        Note::create($validated);

        return redirect()->route('notes.create')
            ->with('success', 'Запись успешно создана!');
    }
}
