<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;
use \Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // Date must be in format Y-M-D. Must also not already exist in entries table date column
        // Selected mood_id must exist in the moods table under column id
        $request->validate([
            'nama' => 'string|nullable',
            'username' => 'string|nullable',
            'email' => 'string|nullable',
            'password' => 'string|nullable',
            'level' => 'string|nullable',
            'status' => 'string|nullable',
        ]);
        $request->merge(['password' => Hash::make($request->password)]);
        users::create($request->all());
        Session::flash('success', 'Berhasil!');
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(daftar $daftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, daftar $daftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(daftar $daftar)
    {
        //
    }
}
