<?php
namespace App\Http\Controllers;
use App\Category;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function welcome()
    {
        $views = News::where('slide', '=', '1')->get();
        $slide = News::where('slide', '=', '1')->limit(4)->get();
        $sport = News::where('category_id', '=', '1')->limit(3)->get();
        return view('welcome', compact('slide', 'sport','views'));
    }
    public function news(Category $category)
    {
        $news = News::where('category_id', '=', $category->id)->paginate(10);
        return view('news', compact('news', 'category'));
    }
}