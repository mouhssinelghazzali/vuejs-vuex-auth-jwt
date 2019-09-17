<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return response()->json(
        //     [
        //         'status' => 'success',
        //         'users' => $users->toArray()
        //     ], 200);

        return view('createUser');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'password' => 'required|min:5',
                'email' => 'required|email|unique:users'
            ], [
                'name.required' => 'Nom obligatoire',
                'password.required' => 'Password obligatoire'
            ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        dd($request);
        $user = User::create($input);

        return back()->with('success', 'User created successfully.');
    }
    public function show(Request $request, $id)
    {
        $user = User::find($id);
        return response()->json(
            [
                'status' => 'success',
                'user' => $user->toArray()
            ], 200);
    }
}
