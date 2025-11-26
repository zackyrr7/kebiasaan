<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $id = auth()->user()->id;
        $detail = DB::table('user_detail')->where('user_id', $id)->first();
        $xp = $detail->xp;
        $badges = DB::table('badges')->where('id', $detail->badge)->first();
        // dd($detail);
        $maxXp = $badges->xp;
        $progress = ($xp / $maxXp) * 100;

        $data = [
            'nama' => auth()->user()->name,
            'streak' => $detail->streak ?? 0,
            'xp' => $xp,
            'maxXp' => $maxXp,
            'progress' => $progress,

        ];
        return view('dashboard.index')->with($data);
    }
}
