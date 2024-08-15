<?php
// app/Http/Controllers/CommentController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Str;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'berita_id' => 'required|exists:berita,id',
            'comment' => 'required|string',
        ]);

        Comment::create([
            'id' => (string) Str::uuid(), // Generate a UUID for the id
            'berita_id' => $request->berita_id,
            'comment' => $request->comment,
        ]);

        return back();
    }

    public function reply(Request $request, $parentId)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        Comment::create([
            'id' => (string) Str::uuid(), // Generate a UUID for the id
            'berita_id' => Comment::findOrFail($parentId)->berita_id,
            'comment' => $request->comment,
            'parent_id' => $parentId,
        ]);

        return back();
    }
}
