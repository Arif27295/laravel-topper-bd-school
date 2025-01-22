<?php
namespace App\Http\Controllers;
use App\Models\upzila;
use App\Models\district;
use App\Models\post_code;
use App\Models\post_office;
use App\Models\add_student;
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
        $district_id = $request->district_id;

        if ($district_id) {
            $upzilas = upzila::where('upzila_id', $district_id)->get();
            return response()->json($upzilas);
        }

        return response()->json(['error' => 'No district ID provided'], 400);
    }
    public function post_office(Request $request){
        $upzila_id = $request->upzila_id;

        if ($upzila_id) {
            $post_office = post_office::where('p_office_id', $upzila_id)->get();
            return response()->json($post_office);
        }

        return response()->json(['error' => 'No district ID provided'], 400);
    }
    public function post_code(Request $request){
        $code = $request->code;

        if ($code) {
            $post_code = post_code::where('p_cod_id', $code)->get();
            return response()->json($post_code);
        }

        return response()->json(['error' => 'No district ID provided'], 400);
    }
    public function add_teacher(){
        $districts = district::all();
        return view('admin.add_teacher',compact('districts'));
     }

     public function create_student(Request $request){
        $request->validate([
            's_name' => 'required|min:3',
            'father_name' => 'required|min:3',
            'father_nid' => 'required|numeric|digits:10|unique:add_students,father_nid',
            'mother_name' => 'required|min:3',
            'mother_nid' => 'required|numeric|digits:10|unique:add_students,mother_nid',
            'class' => 'required',
            'roll_no' => 'required|numeric',
            's_number' => 'required|numeric|digits:11|unique:add_students,number',
            's_pass' => 'required',
            's_email' => 'required|email|unique:add_students,email',
            's_gender' => 'required',
            'reg_date' => 'required|date',
            's_blood' => 'required',
            's_birth' => 'required|date',
            's_id' => 'required|unique:add_students,stu_id',
            's_present_care' => 'required',
            's_present_village' => 'required',
            's_present_upzila' => 'required',
            's_present_district' => 'required',
            's_present_p_office' => 'required',
            's_present_p_cod' => 'required|numeric',
            's_permanent_care' => 'required',
            's_permanent_village' => 'required',
            's_permanent_upzila' => 'required',
            's_permanent_district' => 'required',
            's_permanent_p_office' => 'required',
            's_permanent_p_cod' => 'required|numeric',
        ]);
        $add_student = new add_student();
        $add_student->name = $request->s_name;
        $add_student->father_n = $request->father_name;
        $add_student->father_nid = $request->father_nid;
        $add_student->mother_n = $request->mother_name;
        $add_student->mother_nid = $request->mother_nid;
        $add_student->class = $request->class;
        $add_student->roll = $request->roll_no;
        $add_student->number = $request->s_number;
        $add_student->pass = $request->s_pass;
        $add_student->email = $request->s_email;
        $add_student->gender = $request->s_gender;
        $add_student->reg_date = $request->reg_date;
        $add_student->birth_date = $request->s_birth;
        $add_student->blo_grp = $request->s_blood;
        if($request->hasFile("s_picture")){
            $file=$request->file('s_picture');
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("student_image/"), $imageName);
            $add_student->img = $imageName;
         }else {
            return back()->withErrors(['image' => 'Image file is required.']);
         }
        $add_student->stu_id = $request->s_id;
        $add_student->pre_care = $request->s_present_care;
        $add_student->pre_vill = $request->s_present_village;
        $add_student->pre_dist = $request->s_present_district;
        $add_student->pre_upzi = $request->s_present_upzila;
        $add_student->pre_p_offi = $request->s_present_p_office;
        $add_student->pre_p_cod = $request->s_present_p_cod;
        $add_student->pre_p_cod = $request->s_present_p_cod;
        $add_student->per_care = $request->s_permanent_care;
        $add_student->per_vill = $request->s_permanent_village;
        $add_student->per_dist = $request->s_permanent_district;
        $add_student->per_upzi = $request->s_permanent_upzila;
        $add_student->per_p_offi = $request->s_permanent_p_office;
        $add_student->per_p_cod = $request->s_permanent_p_cod;
        $add_student->per_p_cod = $request->s_permanent_p_cod;
        $add_student->save();
        return back()->with('success','Data create success.');
     }
     public function student_list(){
        $student_lists = add_student::all();
        return view('admin.student_list',compact('student_lists'));
     }
}
