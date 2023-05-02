<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Borrower;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts\create');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $user = auth()->user();
        // Debugging statement
        $borrower = Borrower::where('account_id', $user->id)->first();
        

        if ($borrower) {
            Post::create([
                'title' => $request->title,
                'body' => $request->body,
                'borrower_id' => $borrower->id,
            ]);
        } else {
            return back()->with('error', 'You are not allowed to create a post.');
        }

        return redirect()->route('posts')->with('success', 'Post created successfully!');
    }
    public function edit(Post $post)
    {
        $user = auth()->user();
        $borrower = Borrower::where('account_id', $user->id)->first();

        if ($borrower && $borrower->id === $post->borrower_id) {
            return view('posts/edit', ['post' => $post]);
        } else {
            return back()->with('error', 'You are not allowed to edit this post.');
        }
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $user = auth()->user();
        $borrower = Borrower::where('account_id', $user->id)->first();

        if ($borrower && $borrower->id === $post->borrower_id) {
            $post->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);
            return redirect()->route('posts')->with('success', 'Post updated successfully!');
        } else {
            return back()->with('error', 'You are not allowed to update this post.');
        }
    }

    public function destroy(Post $post)
    {
        $user = auth()->user();
        $borrower = Borrower::where('account_id', $user->id)->first();

        if ($borrower && $borrower->id === $post->borrower_id) {
            $post->delete();
            return redirect()->route('posts')->with('success', 'Post deleted successfully!');
        } else {
            return back()->with('error', 'You are not allowed to delete this post.');
        }
    }
}