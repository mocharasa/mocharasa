<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|min:3|max:100',
          'email' => 'required|email',
          'password' => 'required',
          'level' => 'required'
        ]);        
        $user = User::create([                  
                  'name' => $request->name,
                  'email' => $request->email,
                  'level' => $request->level,
				  'password' => bcrypt($request->password)
        ]);                		
        Alert::success('Added', 'Data berhasil ditambahkan!');
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
		return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required|min:3|max:100',
          'email' => 'required|email',          
        ]); 
		if($request->input('password')){
			$user_data = [                  
                  'name' => $request->name,
                  'email' => $request->email,
                  'level' => $request->level,
				  'password' => bcrypt($request->password)
			];                		
		} else {
			$user_data = [                  
                  'name' => $request->name,
                  'email' => $request->email,
                  'level' => $request->level				  
			];                		
		}
        $user = User::findOrFail($id);
		$user->update($user_data);
        Alert::success('Saved', 'Data berhasil disimpan!');
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
		$user->delete();
		Alert::error('Deleted', 'Data berhasil dihapus!');
        return redirect()->route('user.index');
    }
}
