<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Forum;

class CommentController extends Controller
{
    //
    public function buatKomentar(Request $request,Forum $forum)
    {
    	$comment = new Comment;
    	$comment->isi_komentar = $request->isi_komentar;
    	$comment->user_id = auth()->user()->id;

    	$forum->comments()->save($comment);


    	return back()->withMessage('Komentar berhasil dibuat!!!');
    }
}
