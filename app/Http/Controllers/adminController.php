<?php

namespace App\Http\Controllers;

use App\Models\upzila;
use App\Models\district;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index(){
       return view('admin.index');
    }
    public function event_management()
    {
        // ডাটাবেস থেকে ডাটা ফেচ করা
        $schedules = DB::table('schedule_list')->get();

        // ডেটাগুলো ফরম্যাট করা
        $sched_res = $schedules->map(function ($row) {
            return [
                'id' => $row->id,
                'sdate' => date("F d, Y h:i A", strtotime($row->start_datetime)),
                'edate' => date("F d, Y h:i A", strtotime($row->end_datetime)),
                'title' => $row->title ?? '',
                'description' => $row->description ?? '',
            ];
        });

        // টেমপ্লেটে ডাটা পাঠানো
        return view('admin.event_management', ['schedules' => $sched_res]);
    }
    public function add_student(){
        $districts = district::all();
        return view('admin.add_student',compact('districts'));
    }
    public function upzila(Request $request){
        return $request;
    $district_id = $request->district_id;

    if ($district_id) {
        // সঠিকভাবে উপজিলা ফিল্টার করা
        $upzilas = upzila::where('district_id', $district_id)->get();

        // উপজিলা ডেটা JSON ফর্ম্যাটে রিটার্ন করা
        return response()->json($upzilas);
    }

    return response()->json(['error' => 'No district ID provided'], 400);
}





    public function add_teacher(){
        return view('admin.add_teacher');
     }
}
