<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoUrl;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::user()->status == 1) {
            $data = DB::table('video_urls')->get();
            return view('home', compact('data'));
        } else {
            return view('category');
        }
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

    public function videoAll()
    {
        $data = DB::table('video_urls')->get();
        return view('video_All', compact('data'));
    }
    public function video(string $id)
    {
        $videoId = DB::table('video_urls')->where('id', $id)->first();
        $dataAll = DB::table('video_urls')
            ->where('id', '>', $id) // ดึงเฉพาะ id ที่มากกว่า $id
            ->orderBy('id', 'asc')  // เรียงลำดับจากน้อยไปมาก
            ->limit(4)              // จำกัด 5 รายการ
            ->get();
        $dataAll2 = DB::table('video_urls')
            ->where('id', '<', $id) // ดึงเฉพาะ id ที่มากกว่า $id
            ->orderBy('id', 'asc')  // เรียงลำดับจากน้อยไปมาก
            ->limit(4)              // จำกัด 5 รายการ
            ->get();



        return view('videoId', compact('dataAll', 'dataAll2', 'videoId'));
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