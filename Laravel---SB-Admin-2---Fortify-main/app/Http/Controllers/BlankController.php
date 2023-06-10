<?php

namespace App\Http\Controllers;
use App\blank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BlankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blank = blank::get();

        return view('blank', ['blank' => $blank]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Id_sekolah'=> 'required|numeric|unique:blank'
        // ]);
        blank::create([
            'Id_sekolah' => $request->id_sekolah,
            'sekolah' => $request->sekolah,
            'tahun' => $request->tahun,

        ]);

        return redirect()->route('blank.index')->with('message', 'User added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = blank::where('Id_sekolah', $id) ->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blank $id)
    {
        $request->validate([
            'Id_sekolah' => 'required|string|max:255',
            'sekolah' => 'nullable|string|max:255',
            'tahun' => 'required|string|email|max:255|unique:users,email,' . Auth::user()->id,

        ]);


        $user = blank::findOrFail(Auth::user()->id);
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');

        if (!is_null($request->input('current_password'))) {
            if (Hash::check($request->input('current_password'), $user->password)) {
                $user->password = Hash::make($request->input('new_password'));
            } else {
                return redirect()->back()->withInput();
            }
        }

        $user->save();

        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Auth::id() == $id->getKey()) {
            return redirect()->route('blank.index')->with('warning', 'Can not delete yourself!');
        }

        $id->delete();

        return redirect()->route('blank.index')->with('message', 'User deleted successfully!');
    }
}
