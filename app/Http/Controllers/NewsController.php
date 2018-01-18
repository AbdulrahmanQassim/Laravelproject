<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\News;
use App\User;
use File;
use Auth;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('post.all', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }
        public function createe()
    {
        $categories = Category::all();
        return view('post.create_sponser', compact('categories'));
    }
    public function save(Request $request)
    {
        $post = new News();
        $post->title = $request->title;
        $post->post = $request->post;
        $post->num = $request->num;
        $post->price = $request->price;
        $post->user_id = Auth::id();
        $post->slide = $request->slide;
        $post->category_id = $request->categories;
        if ($request->has('image')) {
            $filename = str_random(10) . '.png';
            $request->file('image')->move(public_path('uploaded_images'), $filename);
        } else {
            $filename = 'no_avatar.jpg';
        }
        $post->image = $filename;
        $post->save();
        return redirect('/news');
    }
    public function insert(Request $request)
    {
        $post = new news();
        $post->title = $request->title;
        $post->post = $request->post;
        $post->num = $request->num;
        $post->price = $request->price;
        $post->user_id = Auth::id();
        $post->slide = $request->slide;
        $post->category_id = $request->categories;
        if ($request->has('image')) {
            $filename = str_random(10) . '.png';
            $request->file('image')->move(public_path('uploaded_images'), $filename);
        } else {
            $filename = 'no_avatar.jpg';
        }
        $post->image = $filename;
        $post->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $news = News::find($id);
        $filename = public_path() . '/uploaded_images/' . $news->image;
        File::Delete($filename);
        $news->delete();
        return redirect('/news');
    }
}