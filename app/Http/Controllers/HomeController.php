<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoUrl;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('video_urls')->get();
        return view('home', compact('data'));
    }

    public function create()
    {
        return view('create_video');
    }
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'website' => ['required', 'regex:/^https:\/\/[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+.*$/'],
            'name' => 'required|string',
            'details' => 'nullable|string',
        ]);
        VideoUrl::create($validatedData);
        return redirect('home')->with('message', "บันทึกสำเร็จ");
    }

    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $flight =  VideoUrl::find($id);
        $flight->delete();
        return redirect()->back()->with('message', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}