<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username cannot be empty',
            'name.required' => 'Name cannot be empty',
            'password.required' => 'Password cannot be empty',
        ]);

        session([
            'username' => $request->username,
            'name' => $request->name,
            'password' => $request->password
        ]);

        return redirect('/dashboard/' . $request->username);
    }

    // DASHBOARD
    public function showDashboard($username)
    {
        $name = session('name');
        $password = session('password');

        return view('dashboard', compact('username', 'name', 'password'));
    }

    // PROFILE
    public function profile($username)
    {
        $name = session('name') ?? $username;
        $password = session('password') ?? '123456';

        $profile = [
            'username' => $username,
            'name' => $name,
            'email' => strtolower(str_replace(' ', '', $name)) . '@gmail.com',
            'phone' => '081234567890',
            'password' => $password,
            'role' => 'Customer',
        ];

        return view('profile', compact('username', 'profile'));
    }

    // PENGELOLAAN
    public function pengelolaan($username)
    {
        $bouquets = [
            [
                'nama' => 'Rose Romance',
                'harga' => 'Rp100.000',
                'deskripsi' => 'Buket bunga mawar pink',
                'status' => 'Tersedia',
                'gambar' => 'rose-romance.png'
            ],
            [
                'nama' => 'Ocean Dream',
                'harga' => 'Rp85.000',
                'deskripsi' => 'Buket bunga biru mix',
                'status' => 'Tersedia',
                'gambar' => 'ocean-dream.png'
            ],
            [
                'nama' => 'Lavender Bliss',
                'harga' => 'Rp90.000',
                'deskripsi' => 'Buket lavender ungu',
                'status' => 'Terbatas',
                'gambar' => 'lavender-bliss.png'
            ],
            [
                'nama' => 'Romantic Peony',
                'harga' => 'Rp200.000',
                'deskripsi' => 'Buket bunga pink peony',
                'status' => 'Pre Order',
                'gambar' => 'romantic-peony.png'
            ],
            [
                'nama' => 'Sunny Bloom',
                'harga' => 'Rp150.000',
                'deskripsi' => 'Buket bunga matahari',
                'status' => 'Tersedia',
                'gambar' => 'sunny-bloom.png'
            ],
            [
                'nama' => 'Lovely Tulip',
                'harga' => 'Rp200.000',
                'deskripsi' => 'Buket bunga tulip',
                'status' => 'Pre Order',
                'gambar' => 'lovely-tulip.png'
            ],
            [
                'nama' => 'Eternal Rose',
                'harga' => 'Rp100.000',
                'deskripsi' => 'Buket bunga mawar merah',
                'status' => 'Tersedia',
                'gambar' => 'eternal-rose.png'
            ],
            [
                'nama' => 'Pure Lily',
                'harga' => 'Rp175.000',
                'deskripsi' => 'Buket bunga lily',
                'status' => 'Pre Order',
                'gambar' => 'pure-lily.png'
            ],
            [
                'nama' => 'Sweet Pastel',
                'harga' => 'Rp120.000',
                'deskripsi' => 'Buket bunga mix warna pastel',
                'status' => 'Terbatas',
                'gambar' => 'sweet-pastel.png'
            ],
            [
                'nama' => 'Thumbelina Delight',
                'harga' => 'Rp150.000',
                'deskripsi' => 'Buket bunga warna mix',
                'status' => 'Tersedia',
                'gambar' => 'thumbelina-delight.png'
            ]
        ];

        return view('pengelolaan', compact('username', 'bouquets'));
    }
}
