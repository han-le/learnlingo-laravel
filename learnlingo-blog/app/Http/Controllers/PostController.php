<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    function index() {
        //Get all the posts in desc of time + load all category to solve the N+1 Query problem
        $posts = Post::latest()
            ->with('category')
            ->paginate(4);

        //return view('homepage', ['allPosts' => $posts->get()]);

        //Pagination. By default: 15 item per page
        return view('homepage', ['allPosts' => $posts]);
    }

    function getSearch (Request $request) {
        //If the user don't submit anything => do not run
        $request->validate(['keyword' => 'required']);

        //Get what user input in the search form
        $input = $request->get("keyword");

        //If the input is not null => Search the database based and assign them to the result
        if (!empty($input)) {
            //Get all the post
            $posts = Post::latest();
            //query builder
            $posts = $posts->where('post_title', 'like', '%' . $input . '%')->get();
        }

        return view('search-results', [
            'searchResults' => $posts,
            'keyword' => $input
        ]);
    }
}
