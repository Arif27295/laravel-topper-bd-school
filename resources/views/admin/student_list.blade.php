@extends('layouts.admin_panel')
@section('title')
	Student List
@endsection
@section('main')
<div class="row mt-5">
    <div class="col-3 all-progress-bar" style="padding-right:5px;">
        <div class="ellipsis-hover">
            <i class="fa-solid fa-ellipsis"></i>
             <ul class="nav three-dot-ul flex-column">
              <li class="nav-item"><a class="nav-link" href="#">View More</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-3" style="text-align:center;align-content:center">
                <i class="ri-open-arm-line"></i>
            </div>
            <div class="col-9">
                <p>Total Students</p>
                <p>3290</p>
                <div class="progress">
                  <div class="progress-bar" style="width:40%;"></div>
                </div>
                <p style="font-weight:400;">40% Increase in 2024</p>
            </div>
        </div>
    </div>
    <div class="col-3 all-progress-bar" style="padding: 0px 5px">
        <div class="ellipsis-hover">
            <i class="fa-solid fa-ellipsis"></i>
            <ul class="nav three-dot-ul flex-column">
              <li class="nav-item"><a class="nav-link" href="#">View More</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-3" style="text-align:center;align-content:center">
                <i class="ri-user-2-fill"></i>
            </div>
            <div class="col-9">
                <p>New Students</p>
                <p>100</p>
                <div class="progress">
                  <div class="progress-bar" style="width:60%;"></div>
                </div>
                <p style="font-weight:400;">60% Increase in 20 days</p>
            </div>
        </div>
    </div>
    <div class="col-3 all-progress-bar" style="padding: 0px 5px">
        <div class="ellipsis-hover">
            <i class="fa-solid fa-ellipsis"></i>
            <ul class="nav three-dot-ul flex-column">
              <li class="nav-item"><a class="nav-link" href="#">View More</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-3" style="text-align:center;align-content:center">
                <i class="ri-team-fill"></i>
            </div>
            <div class="col-9">
                <p>Regular Students</p>
                <p>220</p>
                <div class="progress">
                  <div class="progress-bar" style="width:20%;"></div>
                </div>
                <p style="font-weight:400;">20% Increase in 20 days</p>
            </div>
        </div>
    </div>
    <div class="col-3 all-progress-bar" style="padding-left:5px;">
        <div class="ellipsis-hover">
            <i class="fa-solid fa-ellipsis"></i>
            <ul class="nav three-dot-ul flex-column">
              <li class="nav-item"><a class="nav-link" href="#">View More</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-3" style="text-align:center;align-content:center">
                <i class="ri-money-dollar-circle-line"></i>
            </div>
            <div class="col-9">
                <p>Irregular Students</p>
                <p>50</p>
                <div class="progress">
                  <div class="progress-bar" style="width:10%;"></div>
                </div>
                <p style="font-weight:400;">10% Increase in 20 days</p>
            </div>
        </div>
    </div>
</div>
<div class="row mt-5" style="background:#181819;">
    <div class="col-12">
        <div class="row mt-4 mb-4 ps-4">
            <div class="col-12">
                <a href="{{route('add_student')}}" class="me-4 add-view" style="float:right;">Add Student</a>
            </div>
        </div>
    </div>
    <div class="col-12 list-view">
        <div class="scrollbox pt-3" style="background: #28282A; color:#fff">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                        <th>Profile</th>
                        <th>Students ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Roll No</th>
                        <th>Mobile Number</th>
                        <th>Action</th>
                     </tr>
                </thead>
                <tbody>
                    @if($student_lists->count() > 0)
                        @foreach($student_lists as $student_list)
                            <tr>
                                <td>
                                    <div><img src='{{asset('student_image')}}/{{$student_list->img}}' width='100%'></div>
                                </td>
                                <td>{{$student_list->stu_id}}</td>
                                <td>{{$student_list->name}}</td>
                                <td>{{$student_list->class}}</td>
                                <td>{{$student_list->roll}}</td>
                                <td>{{$student_list->number}}</td>
                                <td class='action_button' style='cursor:pointer'>
                                    <a href='edit_product/{{$student_list->id}}'><i class='fa-solid fa-pen'></i></a> &nbsp
                                    <a href='delete.php/{{$student_list->id}}'><i class='fa-solid fa-trash'></i></a> &nbsp
                                    <a href='view.php/{{$student_list->id}}'><i class='fa-solid fa-eye'></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
   new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        }
    }
});
</script>
@endpush
