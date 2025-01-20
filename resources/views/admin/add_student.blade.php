@extends('layouts.admin_panel')
@section('title')
	Add Student
@endsection
@section('main')
<!--add-student-start-->
<form action='add_student_mysql.php' method="post" enctype="multipart/form-data">
					<div class="row st_row">
						<div class="col-12">
							<h2>Basic Info</h2>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="name" class="form-label">Full Name : <sup>*</sup></label>
										<input type="text" class="form-control" id="name" placeholder="Your name.." name="s_name" required >
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="p_name" class="form-label">Parents Name : <sup>*</sup> </label>
										<input type="text" class="form-control" id="p_name" placeholder="Parents name.." name="p_name" required >
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="class" class="form-label">Class : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="class" name="class" required>
											  <option>Class..</option>
											  <option>Play</option>
											  <option>Nursery</option>
											  <option>One</option>
											  <option>Two</option>
											  <option>Three</option>
											  <option>Four</option>
											  <option>Five</option>
											  <option>Six</option>
											  <option>Seven</option>
											  <option>Eight</option>
											  <option>Nine</option>
											  <option>Ten</option>
											</select>
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="roll_no" class="form-label">Roll No : <sup>*</sup></label>
										<input type="number" class="form-control" id="roll_no" placeholder="Roll.." name="roll_no" required>
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="number" class="form-label">Mobile Number : <sup>*</sup></label>
										<input type="number" class="form-control count-chars" maxlength="11" data-max-chars="11" id="number" placeholder="Number.." name="s_number" required >
										<div class="input-msg"></div>
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="pass" class="form-label">Password : <sup>*</sup></label>
										<input type="text" class="form-control count-chars" id="pass" maxlength="8" data-max-chars="8" placeholder="Password.." name="s_pass" required>
										<div class="input-msg"></div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="email" class="form-label">Email Here :  <span>(Optional)</span></label>
										<input type="email" class="form-control" id="email" placeholder="Emial here.." name="s_email">
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="gender" class="form-label">Gender : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="gender" name="s_gender" required>
											  <option>Gender..</option>
											  <option>Male</option>
											  <option>Female</option>
											</select>
										</div>
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="date" class="form-label">Registration Date : <sup>*</sup></label>
										<input type="date" class="form-control" id="date" name="reg_date" required>
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="blood" class="form-label">Blood Group : <span>(Optional)</span></label>
										<div class="form-group-2">
											<select class="form-select" id="blood" name="s_blood">
											  <option>Blood..</option>
											  <option>O-</option>
											  <option>O+</option>
											  <option>A-</option>
											  <option>A+</option> 
											  <option>B-</option>
											  <option>B+</option>
											  <option>AB-</option>
											  <option>AB+</option>
											</select>
										</div>
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="picture" class="form-label" style="display:block">Picture : <sup>*</sup></label>
										<input type="file" id="picture" name="s_picture" style="padding:0px;" required>
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="birth" class="form-label">Date of Birth : <sup>*</sup></label>
										<input type="date" class="form-control" id="birth" name="s_birth" required >
									</div>
								</div> <br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="s_id" class="form-label">Student ID :  <sup>*</sup></label>
										<input type="text" class="form-control" id="s_id" placeholder="Student ID.." name="s_id" required>
									</div>
								</div>
						</div>
					</div>
					<div class="row st_p_row">
						<div class="col-6" style="padding-right:10px;">
							<div class="row">
								<div class="col-12"><p class="address">Present Address</p></div>
								<div class="col-6 pe-2 form-group">
									<label for="s_care" class="form-label">Care of : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_present_care" placeholder="Care of.." name="s_present_care" required >
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_present_village" placeholder="Village.." name="s_present_village" required >
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									<div class="form-group-2">
										<select class="form-select" id="s_present_upzila" name="s_present_upzila" required >
										  <option>Upazila/P.S..</option>
										</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_district" class="form-label">District : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_present_district" name="s_present_district" required >
												<option>District..</option>
												@if($districts->count() > 0)
													@foreach($districts as $district)
														<option value="{{$district->id}}">{{$district->d_name}}</option>
													@endforeach
												@endif
											</select>
										</div>
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="s_post_of" class="form-label">Post Office : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_present_p_office" name="s_present_p_office" required >
											  <option>Post Office..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									<div class="form-group-2">
											<select class="form-select" id="s_present_p_cod" name="s_present_p_cod" required >
											  <option>Post Code..</option>
											</select>
									 </div>
								</div>
							</div>
						</div>
						<div class="col-6" style="padding-left:10px; position:relative;">
							<div class="form-check s-form-check">
							  <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"  style="font-size:23px">
							  <label class="form-check-label ms-1 mt-1" for="check1">Same Value</label>
							</div>
							<div class="row">
								<div class="col-12"><p class="address">Permanent Address</p></div>
								<div class="col-6 pe-2 form-group">
									<label for="s_care" class="form-label">Care of : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_permanent_care" placeholder="Care of.." name="s_permanent_care" required >
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_permanent_village" placeholder="Village.." name="s_permanent_village" required >
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_upzila" name="s_permanent_upzila" required >
											  <option>Upazila/P.S..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_district" class="form-label">District : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_district" name="s_permanent_district" required >
											  <option>District..</option>
											  @if($districts->count() > 0)
													@foreach($districts as $district)
														<option value="{{$district->id}}">{{$district->d_name}}</option>
													@endforeach
												@endif
											</select>
										</div>
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="s_post_of" class="form-label">Post Office : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_office" name="s_permanent_p_office" required >
											  <option>Post Office..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									  <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_cod" name="s_permanent_p_cod" required >
											  <option>Post Code..</option>
											</select>
									 </div>
								</div>
							</div>
						</div>
					</div> <br>
					<button type="submit" class="st_button ms-3" name="s_submit">Submit</button>
				</form>
				<!--add-student-end-->
@endsection