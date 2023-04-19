<?php

namespace App\Http\Controllers;

use App\Models\FakeAccount;
use App\Models\RealAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function linkRealAccount()
    {
        $realAccounts = RealAccount::where('user_id', Auth::id())->where('category', 'Follow Instagram Account')->get();
        return view('account.instagram.real-account', compact('realAccounts'));
    }

    public function linkLikePost()
    {
        $likePosts = RealAccount::where('user_id', Auth::user()->id)->where('category', 'Like Instagram Post')->get();
        return view('account.instagram.link-like', compact('likePosts'));
    }

    public function linkCommentPost()
    {
        $commentPosts = RealAccount::where('user_id', Auth::user()->id)->where('category', 'Comment Instagram Post')->get();
        return view('account.instagram.link-comment', compact('commentPosts'));
    }

    // new

    public function linkRealAccountTiktok()
    {
        $realAccounts = RealAccount::where('user_id', Auth::id())->where('category', 'Follow Tiktok Account')->get();
        return view('account.tiktok.real-account', compact('realAccounts'));
    }

    public function linkLikePostTiktok()
    {
        $likePosts = RealAccount::where('user_id', Auth::user()->id)->where('category', 'Like Tiktok Video')->get();
        return view('account.tiktok.link-like', compact('likePosts'));
    }

    public function linkCommentPostTiktok()
    {
        $commentPosts = RealAccount::where('user_id', Auth::user()->id)->where('category', 'Comment Tiktok Video')->get();
        return view('account.tiktok.link-comment', compact('commentPosts'));
    }

    // new

    public function linkRealAccountYoutube()
    {
        $realYoutubeAccounts = RealAccount::where('user_id', Auth::id())->where('category', 'Subscribe Youtube Chanel')->get();
        return view('account.youtube.real-account', compact('realYoutubeAccounts'));
    }

    public function linkLikePostYoutube()
    {
        $likePosts = RealAccount::where('user_id', Auth::user()->id)->where('category', 'Likes Youtube Video')->get();
        return view('account.youtube.link-like', compact('likePosts'));
    }

    public function linkCommentPostYoutube()
    {
        $commentPosts = RealAccount::where('user_id', Auth::user()->id)->where('category', 'Comment Youtube Video')->get();
        return view('account.youtube.link-comment', compact('commentPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('real_accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $realAccountsFollowInstagramCount = RealAccount::where('user_id', Auth::user()->id)
            ->where('category', 'Follow Instagram Account')->count();
        $realAccountsSubscribeYoutubeCount = RealAccount::where('user_id', Auth::user()->id)
            ->where('category', 'Subscribe Youtube Chanel')->count();
        if ($realAccountsFollowInstagramCount >= 1 && $request->category === 'Follow Instagram Account') {
            return redirect()->back()->with('error', 'Anda telah memiliki 1 akun pada kategori Follow Instagram Account');
        }
        if ($realAccountsSubscribeYoutubeCount >= 1 && $request->category === 'Subscribe Youtube Chanel') {
            return redirect()->back()->with('error', 'Anda telah memiliki 1 akun pada kategori Subscribe Youtube Chanel');
        }

        $request->validate([
            'username' => 'required|string|max:255|unique:real_accounts',
        ]);
        // dd($request->all());
        RealAccount::create([
            'user_id' => Auth::user()->id,
            'username' => $request->username,
            'counter' => 0,
            'status'=> 'active',
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Real Account created successfully.');
    }
}
