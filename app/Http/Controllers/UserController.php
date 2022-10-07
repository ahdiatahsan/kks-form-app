<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:user-view'])->only(['index', 'show', 'datatable']);
        $this->middleware(['permission:user-create'])->only(['create', 'store']);
        $this->middleware(['permission:user-update'])->only(['edit', 'update']);
        $this->middleware(['permission:user-delete'])->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Request $request)
    {
        //Get district name and check if user is a district //
        $districtName = User::select('name')->where('id', '=', $user->id)->first();
        $districtCount = User::where('district_id', '=', $user->id)->count();
        if ($districtCount < 1) {
            return redirect()->route('user.index')->with('warning', 'Rincian gagal diakses karena pengguna yang dimaksud bukan merupakan sebuah Kecamatan.');
        }

        if ($request->ajax()) {
            $villageIds = User::where('district_id', '=', $user->id)->get('id');
            $userVillages = User::whereIn('id', $villageIds)->get();

            return DataTables::of($userVillages)
                ->addColumn('action', function ($userVillage) {
                    return view('dashboard.user.actionShow', compact('userVillage'))->render();
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('dashboard.user.show', compact('user', 'districtName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $districtName = User::select('name')->where('id', '=', $user->district_id)->first();
        return view('dashboard.user.edit', compact('user', 'districtName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:25',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|max:255',
            'password_confirm' => 'same:password',
            'contact_person' => 'string|max:255',
            'district_id' => 'numeric'
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->filled('district_id')) {
            $user->district_id = $request->input('district_id');
        }

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->contact_person = $request->input('contact_person');
        $user->save();

        return redirect()->route('user.edit', $user->id)->with('success', 'Informasi pengguna telah diubah.');
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

    /**
     * Yajra datatable
     */
    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $users = User::get();

            return DataTables::of($users)
                ->addColumn('action', function ($user) {
                    return view('dashboard.user.action', compact('user'))->render();
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    /**
     * Select2 Division
     */
    public function select2_district(Request $request)
    {
        if ($request->ajax()) {
            $q = $request->input('q');

            $assets = User::select('id', 'name')
                ->where('name', 'LIKE', '%' . $q . '%')
                ->whereHas("roles", function($q){ $q->where("name", "district"); })
                ->get();

            return response()->json($assets, 200);
        }
    }
}
