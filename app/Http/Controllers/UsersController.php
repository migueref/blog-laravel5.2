<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Laracast\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::orderBy('id', 'ASC')->paginate(10);
		return view('admin.users.index')->with('users',$users);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $user = new User($request->all());
		$user->password=bcrypt($request->password);
		$user->save();
		flash('Se ha registrado '.$user->name.' De forma exitosa', 'success');
		return redirect()->route('admin.users.index');
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
    public function edit($id)
    {
        $user= User::find($id);
		return view('admin.users.edit')->with('user',$user);
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
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		flash('Se ha modificado el usuario:  '.$user->name.' De forma exitosa', 'warning');
		return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   	public function destroy($id)
	{
    	$user = User::find($id);
		$user->delete();
		flash('Se ha eliminado '.$user->name.' De forma exitosa', 'danger');
		return redirect()->route('admin.users.index');
    }
}
