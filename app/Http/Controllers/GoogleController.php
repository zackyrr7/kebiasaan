<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

        $googleUser = Socialite::driver('google')->stateless()->user();


        $user = User::firstOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'password' => bcrypt(uniqid()),
                'id' => $googleUser->id,
                'remember_token' => $googleUser->token,
                'created_at' => now(),
                'google_token' => $googleUser->token,
            ]
        );
        DB::table('users')->where('email', $googleUser->getEmail())->update(
            [
                'google_token' => $googleUser->token,
            ]
        );




        Auth::login($user);
        $detail = DB::table('user_detail')->where('user_id', $googleUser->id)->first();
        if (!$detail) {
            return redirect()->route('detail.SiswaAwal');
        } else {

            return redirect('/');
        }
    }


    public function createDetailSiswa()
    {
        $data = [
            'kelas' => DB::table('kelas')->get(),
        ];

        return view('auth.detail_siswa')->with($data);
    }

    public function simpanDetailSiswa(Request $request)
    {

        try {
            DB::table('user_detail')->insert([
                'user_id' => Auth::user()->id,
                'kelas_id' => $request->kelas_id,
                'role' => 'siswa',
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 1
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'false',
                'message' => $th->getMessage()
            ]);
        }
    }
}
