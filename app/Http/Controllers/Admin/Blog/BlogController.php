<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        if ($request->ajax()) {
            if ($request->hasFile('image')) {
                if (!empty($blog->image)) {
                    $image_path = $blog->image;
                    unlink($image_path);
                }
                $image = $request->file('image');
                $name = time() . 'blog' . '.' . $image->getClientOriginalExtension();
                $destinationPath = 'blog_image/';
                $image->move($destinationPath, $name);
                $blog->image = 'blog_image/' . $name;
            }
        }
        $blog->save();

        return response()->json([
            'success' => 'Blog Add Successfully!'
        ]);
    }
}
