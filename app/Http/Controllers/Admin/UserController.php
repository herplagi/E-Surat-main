<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // <form action="' . route('user.destroy', $item->id) . '" method="POST" ">
        //                     ' . method_field('delete') . csrf_field() . '
        //                 </form>
        if (request()->ajax()) {
            $query = User::latest()->get();
            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    if ($item->role == 'Super Admin') {
                        return'
                        <a class="btn btn-primary btn-xs" href="' . route('user.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                    ';
                    } else {
                        return'
                        <a class="btn btn-primary btn-xs" href="' . route('user.edit', $item->id) . '">
                            <i class="fas fa-edit"></i> &nbsp; Ubah
                        </a>
                        <button class="btn btn-danger btn-xs deleteUser" value="'.$item->id.'">
                                <i class="far fa-trash-alt"></i> &nbsp; Hapus
                        </button>
                    ';
                    }
                })
                ->editColumn('name', function ($item) {
                    return $item->profile ? 
                                '<div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid" src="'. Storage::url($item->profile) .'" /></div>'.
                                    $item->name .'
                                </div>' 
                            : 
                                '<div class="d-flex align-items-center">
                                    <div class="avatar me-2"><img class="avatar-img img-fluid" src="https://ui-avatars.com/api/?name='.$item->name.'" /></div>'.
                                    $item->name .'
                                </div>';
                })
                ->addIndexColumn()
                ->removeColumn('id')
                ->rawColumns(['action','name'])
                ->make();
        }
        return view('pages.admin.user.index');
    }

    public function create()
    {
        return view('pages.admin.user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'role' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()
                    ->route('user.index')
                    ->with('success', 'Sukses! Data Pengguna Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();

        return view('pages.admin.user.index',[
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $item = User::findOrFail($id);

        return view('pages.admin.user.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
        ]);

        $item = User::findOrFail($id);
        
        $item->update($validatedData);

        return redirect()
                ->route('user.index')
                ->with('success', 'Sukses! Data Pengguna telah diperbarui');
    }

    public function destroy(Request $request)
    {
        $item = User::findorFail($request->deleteUser_id);

        // Storage::delete($item->profile);

        $item->delete();

        return redirect()
                ->route('user.index')
                ->with('success', 'Sukses! Data Pengguna telah dihapus');
    }


    public function change_password()
    {
        return view('pages.admin.user.change-password');
    }

}
