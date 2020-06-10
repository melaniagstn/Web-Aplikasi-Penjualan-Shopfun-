<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result = User::orderBy('name','asc')->get();
        return view('admin.user.index',[ 'data'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama'=>'required|min:3|max:225',
        'email' => 'required|string|email|max:225|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    User::create([
        'name'=>$request->nama,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
    ]);

    return redirect()->route('user.index')->with('store','Berhasil disimpan!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',['row'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if(!empty($request->password)){
            $query = [
                'name' =>$request->nama,
                'email' =>$request->email,
                'password'=>bcrypt($request->password),
            ];
        } else {
            $query = [
                'name'=>$request->nama,
                'email'=>$request->email,
            ];
        }

        $user->update($query);

        return redirect()->route('user.index')->with('update', 'Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profil()
    {
        return view('admin.user.profil',['row'=>Auth::user()]);
    }
    
    public function profilUpdate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if(!empty($request->password)){
            $query = [
                'name' =>$request->nama,
                'email' =>$request->email,
                'password'=>bcrypt($request->password),
            ];
        } else {
            $query = [
                'name'=>$request->nama,
                'email'=>$request->email,
            ];
        }

        $user->update($query);

        return back()->with('update', 'Berhasil diupdate');
    }
    
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('destroy','Berhasil dihapus!');
    }
}
