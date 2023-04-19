<?php

namespace App\Http\Controllers;

use App\Models\FakeAccount;
use App\Models\Follow;
use App\Models\RealAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();
        $fakeUsers = FakeAccount::with('fl')->where('status', 'active')->where('user_id', $userId)->get();
        $realUser = RealAccount::all();
        $waitingList = Follow::with('realAccount.user')
            ->where('status', 'pending')
            ->whereHas('realAccount', function ($query) use ($userId) {
                $query->where('user_id', $userId)->whereNull('back_id');
            })
            ->get();
        // dd($fakeUsers->toArray(),$realUser->toArray(),$waitingList->toArray());
        return view('home', compact('realUser', 'waitingList', 'fakeUsers'));
    }

    public function history()
    {
        $userId = Auth::id();
        $fakeUser = FakeAccount::where('user_id', $userId)->get();
        $realUser = RealAccount::all();
        $history = Follow::where('user_id', $userId)->get();
        return view('history', compact('fakeUser', 'realUser', 'history', 'fakeUser'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
