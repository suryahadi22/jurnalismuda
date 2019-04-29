<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Hash;       // Enkripsi Password
use Validator;


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
        //
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
            'cok_plugins' => 'formulir',
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
            'jobs_status' => 'required',
            'jobs' => 'required',
            'jobs_where' => 'required',
            'contact_phone_number' => 'required',
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
            $tambahkan->jobs_status = $request['jobs_status'];
            $tambahkan->jobs = $request['jobs'];
            $tambahkan->jobs_where = $request['jobs_where'];
            $tambahkan->contact_phone_number = $request['contact_phone_number'];
            $tambahkan->address_line1 = $request['address_line1'];
            $tambahkan->address_line2 = $request['address_line2'];
            $tambahkan->address_city = $request['address_city'];
            $tambahkan->address_province = $request['address_province'];
            $tambahkan->address_zipcode = $request['address_zipcode'];
            $tambahkan->sex = $request['sex'];
            $tambahkan->birthday = $request['birthday'];
            $tambahkan->social_facebook = $request['social_facebook'];
            $tambahkan->social_twitter = $request['social_twitter'];
            $tambahkan->social_instagram = $request['social_instagram'];
            $tambahkan->social_linkedin = $request['social_linkedin'];
            $tambahkan->social_youtube = $request['social_youtube'];
            $tambahkan->save();

            return redirect()->to('/dashboard/profil');
    }


    public function redirectCok()
    {
        // INI DIGUNAKAN UNTUK REDIRECT DARI /dashboard/profil
        // MENJADI /dashboard/profil/(id user pengguna)
        // // User role
        // $role = Auth::user()->role->name; 
        
        // Check user role
        // switch ($role) {
        //     case 'Manager':
        //             return '/dashboard';
        //         break;
        //     case 'Employee':
        //             return '/projects';
        //         break; 
        //     default:
        //             return '/login'; 
        //         break;
        
        $profilku = Auth::user()->id;

        return redirect('/dashboard/profil/'.$profilku);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
        $user = User::find($id);
        return view('dashboard.dashcontent.profil')
        ->with([
        'judul' => 'Profil Saya',
        'cok_plugins' => 'formulir', // Agar bisa call kebutuhan
        'user' => $user
        ]);
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
       // Memasukkan data dari inputan user
       $this->validate($request, [
        'avatar' => 'nullable',
        'jobs' => 'required',
        'jobs_where' => 'required',
        'contact_phone_number' => 'required',
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

        $gantikan = User::where('id', $id)->first();
        $gantikan->jobs = $request['jobs'];
        $gantikan->jobs_where = $request['jobs_where'];
        $gantikan->contact_phone_number = $request['contact_phone_number'];
        $gantikan->address_line1 = $request['address_line1'];
        $gantikan->address_line2 = $request['address_line2'];
        $gantikan->address_city = $request['address_city'];
        $gantikan->address_province = $request['address_province'];
        $gantikan->address_zipcode = $request['address_zipcode'];
        $gantikan->sex = $request['sex'];
        $gantikan->birthday = $request['birthday'];
        $gantikan->social_facebook = $request['social_facebook'];
        $gantikan->social_twitter = $request['social_twitter'];
        $gantikan->social_instagram = $request['social_instagram'];
        $gantikan->social_linkedin = $request['social_linkedin'];
        $gantikan->social_youtube = $request['social_youtube'];

        // $file       = $request->file('avatar');
        // $fileName   = $file->getClientOriginalName();
        // $request->file('avatar')->move("/data/user/avatar", $fileName);

        // $gantikan->avatar = $fileName;
        $gantikan->save();

        return redirect()->to('/dashboard/profil');
    }

    public function informationUpdate(Request $request, $id)
    {
        // Memasukkan data dari inputan user
       $this->validate($request, [
        'full_name' => 'required',
        'jobs_status' => 'required',
        'jobs' => 'required',
        'jobs_where' => 'required'
        ]);

        $gantikan = User::where('id', $id)->first();
        $gantikan->full_name = $request['full_name'];
        $gantikan->jobs_status = $request['jobs_status'];
        $gantikan->jobs = $request['jobs'];
        $gantikan->jobs_where = $request['jobs_where'];
        $gantikan->update();

        return redirect()->back()->with('success', 'Perubahan Informasi Kamu, SUKSES!');
    }

    public function profilephotoUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'avatar' => 'nullable',
        ]);

        $gantikan = User::where('id', $id)->first();

        $file       = $request->file('avatar');
        $cekUsername = Auth::user()->id; // Menambahkan fitur Username di Gambar
        $fileName   = $file->getClientOriginalName();
        $request->file('avatar')->move("data/user/avatar", $fileName);

        $gantikan->avatar = $fileName;
        $gantikan->save();

        return redirect()->to('/dashboard/profil');
    }

    public function socialmediaUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'social_facebook' => 'nullable',
            'social_twitter' => 'nullable',
            'social_instagram' => 'nullable',
            'social_linkedin' => 'nullable',
            'social_youtube' => 'nullable'
        ]);

        $gantikan = User::where('id', $id)->first();
        $gantikan->social_facebook = $request['social_facebook'];
        $gantikan->social_twitter = $request['social_twitter'];
        $gantikan->social_instagram = $request['social_instagram'];
        $gantikan->social_linkedin = $request['social_linkedin'];
        $gantikan->social_youtube = $request['social_youtube'];
        $gantikan->update();

        return redirect()->back()->with('success', 'Perubahan Informasi Kamu, SUKSES!');
    }

    public function passwordUpdate(Request $request)
    {
        // Formulir Validasi
        Validator::extend('password', function ($attribute, $value, $parameters, $validator)
        {
            return Hash::check($value, \Auth::user()->password);
        });

        $message = ['password' => 'Password saat ini salah'];

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|password',
            'password' => 'required|min:8|confirmed', // New Password
            'password_confirmation' => 'required'
        ], $message);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        // Update password
        $user = User::find(Auth::id());
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect()->back()->with('success', 'Perubahan Password Kamu, SUKSES!');

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
