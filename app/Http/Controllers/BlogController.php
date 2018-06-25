<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogComment;
use App\Http\Requests\BlogCommentRequest;
use Response;
use Sentinel;
use DB;


class BlogController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Blog::allTags();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Grab all the blogs
        $blogs = Blog::latest()->paginate(5);
        $tags = $this->tags;
        // Show the page

        //Show most recent 3 blog posts
//        $recents = $blogs->sortByDecs('id', 'DESC')->first();
        $recents= Blog::orderBy('created_at','desc')->take(3)->get();
//        $recents = Blog::where('simple',true)->orderBy('created_at','desc')->skip(1)->take(1)->get();

        return view('blog', compact('blogs', 'tags','recents'));
    }


    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function getBlog($slug = '')
    {

        $blog = Blog::where('slug', $slug)->first();

        if ($blog) {
            $blog->increment('views');
        } else {
            abort('404');
        }
        $recents= Blog::orderBy('created_at','desc')->take(3)->get();
        // Show the page
        return view('blogitem', compact('blog','recents'));
    }

    /**
     * @param $tag
     * @return \Illuminate\View\View
     */
    public function getBlogTag($tag)
    {
        $blogs = Blog::withAnyTags($tag)->paginate(5);
        $tags = $this->tags;
        $recents= Blog::orderBy('created_at','desc')->take(3)->get();
        return view('blog', compact('blogs', 'tags','recents'));
    }

    /**
     * @param BlogCommentRequest $request
     * @param Blog $blog
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeComment(BlogCommentRequest $request, Blog $blog)
    {
        $blogcooment = new BlogComment($request->all());
        $blogcooment->blog_id = $blog->id;
        $blogcooment->save();
        return redirect('blogitem/' . $blog->slug);
    }

}
