<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); // Autentifikasi Pengguna CUk
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // Halaman Index
    {
        return view('dashboard.dashcontent.profil')
        ->with('judul', 'Profil Saya');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // Santai, ini digunakan sebagai halaman untuk membuat profil
        // Atau, ini adalah halaman yang digunakan saat user pertama kali mendaftar
        $user = User::find($id);
        return view('dashboard.dashcontent.profil.buat')
        ->with([
            'judul' => 'Buat Profil Kamu',
            'user' => $user
            // Tambahan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
         // Memasukkan data dari inputan user
         $this->validate($request, [
            'avatar' => 'nullable',
            'jobs' => 'required',
            'jobs_where' => 'required',
            'contact_phone' => 'required|numeric',
            'address_line1' => 'required',
            'address_line2' => 'required',
            'address_city' => 'required',
            'address_province' => 'required',
            'address_zipcode' => 'required',
            'sex' => 'required',
            'birthday' => 'required|date',
            // Here is Social Networking input Proccess
            'social_facebook' => 'nullable',
            'social_twitter' => 'nullable',
            'social_instagram' => 'nullable',
            'social_linkedin' => 'nullable',
            'social_youtube' => 'nullable'
            ]);

            $tambahkan = User::where('id', $id)->first();
            $tambahkan->jobs = $request['jobs'];
            $tambahkan->jobs_where = $request['jobs_where'];
            $tambahkan->contact_phone = $request['contact_phone'];
            $tambahkan->address_line1 = $request['address_line1'];
            $tambahkan->address_line2 = $request['address_line2'];
            $tambahkan->address_city = $request['address_city'];
            $tambahkan->address_province = $request['address_province'];
            $tambahkan->addrees_zipcode = $request['address_zipcode'];
            $tambahkan->sex = $request['sex'];
            $tambahkan->birthday = $request['birthday'];
            $tambahkan->social_facebook = $request['social_facebook'];
            $tambahkan->social_twitter = $request['social_twitter'];
            $tambahkan->social_instagram = $request['social_instagram'];
            $tambahkan->social_linkedin = $request['social_linkedin'];
            $tambahkan->social_youtube = $request['social_youtube'];
            $tambahkan->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan data Profil
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // Comming Soon
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
