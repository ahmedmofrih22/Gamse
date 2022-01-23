<?php

namespace App\Http\Controllers;

use App\Coach;
use App\images;
use Illuminate\Http\Request;


class gems extends Controller
{
    public function index_2()
    {


        $img = images::all();
        return view('games.index', compact('img'));
    }

    public function games()
    {
        $img = images::all();
        return view('games.games', compact('img'));
    }
    public function BeComeTrainer()
    {
        return view('games.BeComeTrainer');
    }
    public function traineReqest()
    {
        return view('games.traineReqest');
    }
    public function howWork()
    {
        $coach = Coach::all();
        return view('games.howWork', compact('coach'));
    }
    public function conversation()
    {
        return view('games.conversation');
    }
    public function favorite()
    {
        $coach = Coach::all();
        return view('games.favorite', compact('coach'));
    }
    public function notifcation()
    {

        return view('games.notifcation');
    }
    public function  policy()
    {
        return view('games.policy');
    }
    public function  terms()
    {
        return view('games.terms');
    }
    public function  About()
    {
        return view('games.About');
    }
    public function   game_details(Request $request)
    {




        $images = images::find($request->id);
        return view('games.game-details', compact('images'));
    }
    public function  Couch_profile(Request $request)
    {


        $coch = Coach::find($request->id);

        return view('games.Couch-profile', compact('coch'));
    }
    public function  conver_sation(Request $request)
    {

        // $coch = Coach::all()->first();


        return view('games.conversation');
    }
    public function  reservat()
    {
        return view('games.reservat');
    }
    public function  Account()
    {

        return view('games.Account');
    }
    public function  login()
    {
        return view('games.login');
    }
    public function  bank_tansaction()
    {
        return view('games.bank-tansaction');
    }
}
