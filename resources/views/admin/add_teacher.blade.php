@extends('layouts.admin_panel')
@section('title')
	Add Teacher
@endsection
@section('main')
<form action='add_teacher_mysql.php' method="post" enctype="multipart/form-data">
					<div class="row st_row">
						<div class="col-12">
							<h2>Basic Info</h2>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="name" class="form-label">Full Name : <sup>*</sup></label>
										<input type="text" class="form-control" id="name" placeholder="Your name.." name="t_name" required >
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="designation" class="form-label">Designation : <sup>*</sup> </label>
										<input type="text" class="form-control" id="designation" placeholder="Designation.." name="designation" required >
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="education" class="form-label">Education : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="education" name="education" required>
											  <option>Education..</option>
											  <option>Primary Education</option>
											  <option>Junior Secondary Education</option>
											  <option>Secondary Education</option>
											  <option>Higher Secondary</option>
											  <option>Diploma in Engineering</option>
											  <option>Fazil</option>
											  <option>Bachelor's</option>
											  <option>Kamil</option>
											  <option>Bachelor (Engineering & Technology)</option>
											  <option>Master's</option>
											  <option>Master of Philosopy</option>
											  <option>Doctorate</option>
											</select>
										</div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="department" class="form-label">Department : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="department" name="department" required>
											  <option>Department..</option>
											  <option>Arbi</option>
											  <option>Bangla</option>
											  <option>Math</option>
											  <option>English</option>
											</select>
										</div>
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="number" class="form-label">Mobile Number : <sup>*</sup></label>
										<input type="number" class="form-control count-chars" maxlength="11" data-max-chars="11" id="number" placeholder="Number.." name="t_number" required >
										<div class="input-msg"></div>
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="pass" class="form-label">Password : <sup>*</sup></label>
										<input type="text" class="form-control count-chars" id="pass" maxlength="8" data-max-chars="8" placeholder="Password.." name="t_pass" required>
										<div class="input-msg"></div>
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="email" class="form-label">Email Here :  <span>(Optional)</span></label>
										<input type="email" class="form-control" id="email" placeholder="Emial here.." name="t_email">
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="gender" class="form-label">Gender : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="gender" name="t_gender" required>
											  <option>Gender..</option>
											  <option>Male</option>
											  <option>Female</option>
											</select>
										</div>
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="date" class="form-label">Joining Date : <sup>*</sup></label>
										<input type="date" class="form-control" id="date" name="joi_date" required>
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="blood" class="form-label">Blood Group : <span>(Optional)</span></label>
										<div class="form-group-2">
											<select class="form-select" id="blood" name="t_blood">
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
										<input type="file" id="picture" name="t_picture" style="padding:0px;" required>
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="birth" class="form-label">Date of Birth : <sup>*</sup></label>
										<input type="date" class="form-control" id="birth" name="t_birth" required >
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="n_number" class="form-label">NID Number :  <sup>*</sup></label>
										<input type="number" class="form-control count-chars" id="n_number" placeholder="NID.." name="n_number" maxlength="10" data-max-chars="10" required>
										<div class="input-msg"></div>
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
									<input type="text" class="form-control" id="s_present_care" placeholder="Care of.." name="t_present_care" required >
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_present_village" placeholder="Village.." name="t_present_village" required >
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									<div class="form-group-2">
											<select class="form-select" id="s_present_upzila" name="t_present_upzila" required >
											  <option>Upazila/P.S..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_district" class="form-label">District : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_present_district" name="t_present_district" required >
												<option>District..</option>
											</select>
										</div>
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="s_post_of" class="form-label">Post Office : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_present_p_office" name="t_present_p_office" required >
											  <option>Post Office..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									<div class="form-group-2">
											<select class="form-select" id="s_present_p_cod" name="t_present_p_cod" required >
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
									<input type="text" class="form-control" id="s_permanent_care" placeholder="Care of.." name="t_permanent_care" required >
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_permanent_village" placeholder="Village.." name="t_permanent_village" required >
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_upzila" name="t_permanent_upzila" required >
											  <option>Upazila/P.S..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_district" class="form-label">District : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_district" name="t_permanent_district" required >
											  <option>District..</option>
											</select>
										</div>
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="s_post_of" class="form-label">Post Office : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_office" name="t_permanent_p_office" required >
											  <option>Post Office..</option>
											</select>
									 </div>
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									  <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_cod" name="t_permanent_p_cod" required >
											  <option>Post Code..</option>
											</select>
									 </div>
								</div>
							</div>
						</div>
					</div> <br>
					<button type="submit" class="st_button ms-3" name="s_submit">Submit</button>
				</form>
@endsection