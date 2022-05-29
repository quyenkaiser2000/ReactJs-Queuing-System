<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\NumberLevel;
use App\Models\Device;
use App\Models\Service;
use DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numberlevel = NumberLevel::select('id')->get();
        $numberlevelCount = $numberlevel->count();

        $numberlevel = NumberLevel::select('id')->where('status', '1')->get();
        $numberlevelCount1 = $numberlevel->count();
        $numberlevel = NumberLevel::select('id')->where('status', '2')->get();
        $numberlevelCount2 = $numberlevel->count();
        $numberlevel = NumberLevel::select('id')->where('status', '0')->get();
        $numberlevelCount0 = $numberlevel->count();
        $useravatar = User::find(Auth::user()->id);
        return view('dashboard.index',compact('useravatar','numberlevelCount','numberlevelCount0','numberlevelCount1','numberlevelCount2'));
    }
}
