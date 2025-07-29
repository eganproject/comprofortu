<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use App\Models\ClientExperience;
use App\Models\HeroImages;
use App\Models\AboutUs;
use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index()
    {
        $hero = HeroImages::where('modul', 'index')->first();
        $clientExperience = ClientExperience::latest()->limit(8)->get();
        return view('user.index', compact('hero', 'clientExperience'));
    }
    public function about()
    {
        $hero = HeroImages::where('modul', 'about')->first();
        $about = AboutUs::first();
        return view('user.about', compact(['hero', 'about']));
    }
    public function service()
    {
        $hero = HeroImages::where('modul', 'service')->first();
        $services = Service::all();
        return view('user.service', compact(['hero', 'services']));
    }

    public function product()
    {
        $hero = HeroImages::where('modul', 'product')->first();
        return view('user.product.index', compact(['hero']));
    }

    public function blog()
    {
        $hero = HeroImages::where('modul', 'blog')->first();
        $blog = BlogArticle::with(['user'])->latest()->paginate(9);
        return view('user.blog.index', compact(['hero', 'blog']));
    }

    public function loadMorePosts(Request $request)
    {

        $posts = BlogArticle::with('user')->latest()->paginate(9);

        $posts->getCollection()->transform(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug, // Asumsi Anda punya slug untuk URL
                'image_url' => $post->image ? asset('storage/' . $post->image) : 'https://placehold.co/400x250/E9D5FF/3B0764?text=Blog+Post',
                'author_name' => $post->user->name ?? 'Anonim',
                'author_avatar' => 'https://placehold.co/40x40/CFD8DC/78909C?text=' . substr($post->user->name ?? 'A', 0, 1),
                'published_date' => \Carbon\Carbon::parse($post->tanggal)->format('d F Y'),
                'likes' => $post->likes ?? 0,
                'comments' => $post->comments ?? 0,
                'views' => $post->views ?? 0,
            ];
        });

        return response()->json($posts);
    }

    public function showBlog($slug)
    {
        BlogArticle::where('slug', $slug)->increment('views');
        $blog = BlogArticle::where('slug', $slug)->with(['user'])->first();
        $recentPost = BlogArticle::with(['user'])->whereNot('slug', $slug)->latest()->limit(3)->get();
        return view('user.blog.show', compact('blog', 'recentPost'));
    }
}
