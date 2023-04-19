<?php

namespace App\Http\Controllers;

use App\Models\FakeAccount;
use App\Models\Follow;
use App\Models\RealAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function followInstagram()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        if (auth()->user()->realAccounts->count() < 1) {
            return redirect()->route('real.account')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Follow Instagram Account')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->where('status', 'active')->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
            // $query->apa_ini = $query->status;
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('status', 'active')->where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });

        // dd($realInstagramAccount->toArray(), $fakeInstagram->toArray());
        return view('instagram.follow', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function followTiktok()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Follow Tiktok Account')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.tiktok')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Follow Tiktok Account')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('tiktok.follow', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function subscribeYoutube()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Subscribe Youtube Chanel')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.youtube')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Subscribe Youtube Chanel')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('youtube.subscribe', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function likeInstagram()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Like Instagram Post')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.account')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Like Instagram Post')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('instagram.like', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function likeTiktok()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Like Tiktok Video')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.tiktok')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Like Tiktok Video')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('tiktok.like', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function likeYoutube()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Likes Youtube Video')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.youtube')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Likes Youtube Video')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('youtube.like', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function commentInstagram()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Comment Instagram Post')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.account')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Comment Instagram Post')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('instagram.comment', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function commentTiktok()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Comment Tiktok Video')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.tiktok')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Comment Tiktok Video')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('tiktok.comment', compact('realInstagramAccount', 'fakeInstagram'));
    }

    public function commentYoutube()
    {
        // Mengambil user yang sedang login
        $user = Auth::user();
        $totalRealAccount = RealAccount::where('category', 'Comment Youtube Video')->where('user_id', $user->id)->count();
        if ($totalRealAccount < 1) {
            return redirect()->route('real.youtube')->with('error', 'Harus memiliki real account minimal 1');
        }
        // Mengambil daftar real account kategori follow instagram
        $realInstagramAccount = RealAccount::where('category', 'Comment Youtube Video')->where('user_id', '!=', auth()->user()->id)->get()->each(function ($query) {
            $query->total_fake_account_dia = $query->user->fakeAccounts->count();
            $query->account_used = $query->follow->where('user_id', auth()->user()->id)->count();
        });
        // Mengambil daftar fake account milik user yang sedang login
        $fakeInstagram = FakeAccount::where('social_media', 'Instagram')->where('status', 'active')->with('fl')->where('user_id', $user->id)->get()->filter(function ($query) {
            // echo  count($query->fl) < 1
            return true;
        });
        return view('youtube.comment', compact('realInstagramAccount', 'fakeInstagram'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function follow(Request $request)
    {
        $follow = new Follow;
        $follow->user_id = Auth::user()->id;
        $follow->real_account_id = $request->real_account_id;
        $follow->fake_account_id = $request->fake_account_id;
        $follow->type = $request->type;
        $follow->status = 'pending';
        $follow->save();

        return redirect()->back();
    }

    public function follback(Request $request)
    {

        // $follow = new Follow;
        // $follow->user_id = Auth::user()->id;
        // $follow->real_account_id = $request->real_account_id;
        // $follow->fake_account_id = $request->back_id;
        // $follow->back_id = $request->back_id;
        // $follow->type = $request->type;
        // $follow->status = 'back';
        // $follow->save();

        $follow = Follow::create([
            'user_id' => Auth::user()->id,
            'real_account_id' => $request->real_account_id,
            'fake_account_id' => $request->back_id,
            'back_id' => $request->back_id,
            'type' => $request->type,
            'status' => 'back'
        ]);

        $id = $request->id;
        $follback = Follow::find($id);
        $follback->update([
            'back_id' => $request->back_id,
            'status' => 'confirmed'
        ]);

        $realAccount = RealAccount::findOrFail($request->real_account_id);
        $realAccount->counter++;
        $realAccount->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Follow $follow)
    {
        //
    }
}



// dd($fakeInstagram->toArray(),$realInstagramAccount->toArray());
// Looping untuk setiap real account dan mencari daftar fake account yang belum follow real account
// foreach ($realInstagramAccount as $realUser) {
//     // Mendapatkan id real user
//     $realUserId = $realUser->id;
//     // Mengambil daftar fake user yang belum mengikuti real user
//     $fakeUsers = FakeAccount::whereNotIn('id', function ($query) use ($realUserId) {
//         $query->select('fake_account_id')
//             ->from('follows')
//             ->where('real_account_id', $realUserId);
//     })->where('user_id', $user->id)->where('social_media', 'Instagram')->get(); // Menambahkan kondisi where category = Instagram
//     // Membuat array kosong untuk menyimpan fake user yang belum follow real user
//     $unfollowedFakeUsers = [];
//     // Looping untuk setiap fake user dan memeriksa apakah mereka sudah follow real user
//     foreach ($fakeUsers as $fakeUser) {
//         $followed = Follow::where('fake_account_id', $fakeUser->id)
//             ->where('real_account_id', $realUserId)
//             ->exists();
//         if (!$followed) {
//             // Jika belum follow, tambahkan fake user ke dalam array kosong
//             $unfollowedFakeUsers[] = $fakeUser;
//         }
//     }
//     // Menambahkan daftar fake user ke real user sebagai properti baru
//     $realUser->fakeUsers = $unfollowedFakeUsers;
// }
// dd($realInstagramAccount->toArray());
// dd($realInstagramAccount)
// $oke =[1,2,3,4];
// dd(Arr::join($oke,''));
// Menampilkan view follow instagram dengan daftar real account dan fake account