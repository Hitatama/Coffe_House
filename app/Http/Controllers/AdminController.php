<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    // public function FileUpload(Request $request){
    //     $request->validate([
    //         'berkas' => 'required|file|image|max:20000',
    //     ]);
    //     $extFile = $request->berkas->getClientOriginalExtension();
    //     $namaFile = 'User-'.time().".".$extFile;
    //     $path = $request->berkas->move('img',$namaFile);
    //     // echo "Variable Path berisi: $path <br>";

    //     // $pathBaru = asset('img/'.$namaFile);
    //     // echo "Proses upload berhasil, file berada di: <a href='$pathBaru'>$pathBaru";
    //     return redirect('/admin')->with('success', 'Regristration Successfull! Please login');
    // }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'berkas' => 'required|file|image|max:20000',
            'name'  => 'required|min:3|max:50',
            'description' => 'required',
            'opentime' => 'required',
            'address' => 'required',
            'created_by' => 'required',
        ]);
        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = 'User-' . time() . "." . $extFile;
        $path = $request->berkas->move('img', $namaFile);

        Cafe::create($validateData);

        return redirect('/admin')->with('success', 'upload Successfull!');
    }

    public function destroy(Cafe $cafe)
    {
        $cafe->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Menu deleted successfully');
    }
}
