@extends('layouts.admin_panel')
@section('title')
	Add Student
@endsection
@section('main')
<!--add-student-start-->
@if(session('delete'))
        <p class="alert alert-danger text-white alert-design">{{session('delete')}}</p>
        @elseif(session('success'))
        <p class="alert alert-success text-white alert-design">{{session('success')}}</p>
    @endif
<form action="{{route('create_student')}}" method="post" enctype="multipart/form-data">
	@csrf
					<div class="row st_row">
						<div class="col-12">
							<h2>Basic Info</h2>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="name" class="form-label">Full Name : <sup>*</sup></label>
										<input type="text" class="form-control" id="name" placeholder="Your name.." name="s_name" required >
										<x-input-error :messages="$errors->get('s_name')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="father_name" class="form-label">Father Name : <sup>*</sup> </label>
										<input type="text" class="form-control" id="father_name" placeholder="Father name.." name="father_name" required >
										<x-input-error :messages="$errors->get('father_name')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="father_nid" class="form-label">Father NID : <sup>*</sup> </label>
										<input type="number" class="form-control count-chars" id="father_nid" placeholder="Father NID.." maxlength="10" data-max-chars="10" name="father_nid" required >
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('father_nid')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
								<div class="col-4 form-group" style="padding-right:20px;">
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
										<x-input-error :messages="$errors->get('class')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="mother_name" class="form-label">Mother Name : <sup>*</sup></label>
										<input type="text" class="form-control" id="mother_name" placeholder="Mother name.." name="mother_name" required >
										<x-input-error :messages="$errors->get('mother_name')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="mother_nid" class="form-label">Mother NID : <sup>*</sup> </label>
										<input type="number" class="form-control count-chars" id="mother_nid" maxlength="10" data-max-chars="10" placeholder="Mother NID.." name="mother_nid" required >
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('mother_nid')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="roll_no" class="form-label">Roll No : <sup>*</sup></label>
										<input type="number" class="form-control" id="roll_no" placeholder="Roll.." name="roll_no" required>
										<x-input-error :messages="$errors->get('roll_no')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="number" class="form-label">Mobile Number : <sup>*</sup></label>
										<input type="number" class="form-control count-chars" maxlength="11" data-max-chars="11" id="number" placeholder="Number.." name="s_number" required >
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('s_number')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="pass" class="form-label">Password : <sup>*</sup></label>
										<input type="text" class="form-control count-chars" id="pass" maxlength="8" data-max-chars="8" placeholder="Password.." name="s_pass" required>
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('s_pass')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="email" class="form-label">Email Here :  <span>(Optional)</span></label>
										<input type="email" class="form-control" id="email" placeholder="Emial here.." name="s_email">
										<x-input-error :messages="$errors->get('s_email')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="gender" class="form-label">Gender : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="gender" name="s_gender" required>
											  <option>Gender..</option>
											  <option value="male">Male</option>
											  <option value="female">Female</option>
											</select>
										</div>
										<x-input-error :messages="$errors->get('s_gender')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="date" class="form-label">Registration Date : <sup>*</sup></label>
										<input type="date" class="form-control" id="date" name="reg_date" required>
										<x-input-error :messages="$errors->get('reg_date')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="blood" class="form-label">Blood Group : <span>(Optional)</span></label>
										<div class="form-group-2">
											<select class="form-select" id="blood" name="s_blood">
											  <option>Blood..</option>
											  <option value="o-">O-</option>
											  <option value="o+">O+</option>
											  <option value="a-">A-</option>
											  <option value="a+">A+</option> 
											  <option value="b-">B-</option>
											  <option value="b+">B+</option>
											  <option value="ab-">AB-</option>
											  <option value="ab+">AB+</option>
											</select>
										</div>
										<x-input-error :messages="$errors->get('s_blood')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="picture" class="form-label" style="display:block">Picture : <sup>*</sup></label>
										<input type="file" id="picture" name="s_picture" style="padding:0px;" required>
										<x-input-error :messages="$errors->get('s_picture')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="birth" class="form-label">Date of Birth : <sup>*</sup></label>
										<input type="date" class="form-control" id="birth" name="s_birth" required >
										<x-input-error :messages="$errors->get('s_birth')" class="mt-2" />
									</div>
								</div> <br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;position:relative">
										<label for="s_id" class="form-label">Student ID :  <sup>*</sup></label>
										<input type="text" class="form-control" id="s_id" placeholder="Student ID.." name="s_id" required>
										<i class="fa-solid fa-rotate generate_id" data-bs-toggle="tooltip" title="Generate ID"></i>
										<x-input-error :messages="$errors->get('s_id')" class="mt-2" />
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
									<x-input-error :messages="$errors->get('s_present_care')" class="mt-2" />
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_present_village" placeholder="Village.." name="s_present_village" required >
									<x-input-error :messages="$errors->get('s_present_village')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									<div class="form-group-2">
										<select class="form-select" id="s_present_upzila" name="s_present_upzila" required >
										  <option>Upazila/P.S..</option>
										</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_present_upzila')" class="mt-2" />
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
										<x-input-error :messages="$errors->get('s_present_district')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="s_post_of" class="form-label">Post Office : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_present_p_office" name="s_present_p_office" required >
											  <option>Post Office..</option>
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_present_p_office')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									<div class="form-group-2">
											<select class="form-select" id="s_present_p_cod" name="s_present_p_cod" required >
											  <option>Post Code..</option>
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_present_p_cod')" class="mt-2" />
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
									<x-input-error :messages="$errors->get('s_permanent_care')" class="mt-2" />
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" id="s_permanent_village" placeholder="Village.." name="s_permanent_village" required >
									<x-input-error :messages="$errors->get('s_permanent_village')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_upzila" name="s_permanent_upzila" required >
											  <option>Upazila/P.S..</option>
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_permanent_upzila')" class="mt-2" />
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
										<x-input-error :messages="$errors->get('s_permanent_district')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="s_post_of" class="form-label">Post Office : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_office" name="s_permanent_p_office" required >
											  <option>Post Office..</option>
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_permanent_p_office')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									  <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_cod" name="s_permanent_p_cod" required >
											  <option>Post Code..</option>
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_permanent_p_cod')" class="mt-2" />
								</div>
							</div>
						</div>
					</div> <br>
					<button type="submit" class="st_button ms-3">Submit</button>
				</form>
				<!--add-student-end-->
				@endsection

				@push('scripts')
				<script type='text/javascript'>
					//tooltip-start
					var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
					var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
					return new bootstrap.Tooltip(tooltipTriggerEl)
					})
					//tooltip-end


					//upzila-start	
					$('#s_present_district').on('change', function() {
						var district_id = $(this).val();
						if (district_id) {
							$.ajax({
								url: '{{route("upzila")}}',
								type: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
									district_id: district_id
								},
								success: function(result) {
									$('#s_present_upzila').empty().append('<option value="">Select Upzila</option>');
									$.each(result, function(key, value) {
										$('#s_present_upzila').append('<option value="' + value.id + '">' + value.name + '</option>');
									});
								},
								error: function(xhr) {
									console.error(xhr.responseText);
								}
							});
						} else {
							$('#s_present_upzila').empty().append('<option value="">Select Upzila</option>');
						}
					});
					$('#s_permanent_district').on('change', function() {
						var district_id = $(this).val();
						if (district_id) {
							$.ajax({
								url: '{{route("upzila")}}',
								type: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
									district_id: district_id
								},
								success: function(result) {
									$('#s_permanent_upzila').empty().append('<option value="">Select Upzila</option>');
									$.each(result, function(key, value) {
										$('#s_permanent_upzila').append('<option value="' + value.id + '">' + value.name + '</option>');
									});
								},
								error: function(xhr) {
									console.error(xhr.responseText);
								}
							});
						} else {
							$('#s_permanent_upzila').empty().append('<option value="">Select Upzila</option>');
						}
					});
					//upzila-end
					//post_office-start
					$('#s_present_upzila').on('change', function() {
						var upzila_id = $(this).val();
						if (upzila_id) {
							$.ajax({
								url: '{{route("post_office")}}',
								type: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
									upzila_id: upzila_id
								},
								success: function(result) {
									$('#s_present_p_office').empty().append('<option value="">Select Post Office</option>');
									$.each(result, function(key, value) {
										$('#s_present_p_office').append('<option value="' + value.id + '">' + value.p_name + '</option>');
									});
								},
								error: function(xhr) {
									console.error(xhr.responseText);
								}
							});
						} else {
							$('#s_present_p_office').empty().append('<option value="">Select Post Office</option>');
						}
					});
					$('#s_permanent_upzila').on('change', function() {
						var upzila_id = $(this).val();
						if (upzila_id) {
							$.ajax({
								url: '{{route("post_office")}}',
								type: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
									upzila_id: upzila_id
								},
								success: function(result) {
									$('#s_permanent_p_office').empty().append('<option value="">Select Post Office</option>');
									$.each(result, function(key, value) {
										$('#s_permanent_p_office').append('<option value="' + value.id + '">' + value.p_name + '</option>');
									});
								},
								error: function(xhr) {
									console.error(xhr.responseText);
								}
							});
						} else {
							$('#s_permanent_p_office').empty().append('<option value="">Select Post Office</option>');
						}
					});
					//post_office-end
					//post_office-code-start
					$('#s_present_p_office').on('change', function() {
						var code = $(this).val();
						if (code) {
							$.ajax({
								url: '{{route("post_code")}}',
								type: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
									code: code
								},
								success: function(result) {
									$('#s_present_p_cod').empty().append('<option value="">Select Post Code</option>');
									$.each(result, function(key, value) {
										$('#s_present_p_cod').append('<option value="' + value.id + '">' + value.p_code + '</option>');
									});
								},
								error: function(xhr) {
									console.error(xhr.responseText);
								}
							});
						} else {
							$('#s_present_p_cod').empty().append('<option value="">Select Post Code</option>');
						}
					});
					$('#s_permanent_p_office').on('change', function() {
						var code = $(this).val();
						if (code) {
							$.ajax({
								url: '{{route("post_code")}}',
								type: "POST",
								data: {
									"_token": "{{ csrf_token() }}",
									code: code
								},
								success: function(result) {
									$('#s_permanent_p_cod').empty().append('<option value="">Select Post Code</option>');
									$.each(result, function(key, value) {
										$('#s_permanent_p_cod').append('<option value="' + value.id + '">' + value.p_code + '</option>');
									});
								},
								error: function(xhr) {
									console.error(xhr.responseText);
								}
							});
						} else {
							$('#s_permanent_p_cod').empty().append('<option value="">Select Post Code</option>');
						}
					});
					//post_office-code-end


					//add-student-start--
	$("#check1").click(function(){
		if ($('#check1').is(':checked')) {
			var v1 =	$("#s_present_care").val();
			var v2 =	$("#s_present_village").val();
			var v3 =	$("#s_present_upzila").val();
			var v4 =	$("#s_present_district").val();
			var v5 =	$("#s_present_p_office").val();
			var v6 =	$("#s_present_p_cod").val();
			
				
				$("#s_permanent_district").val(v4);
				$("#s_permanent_care").val(v1);
				$("#s_permanent_village").val(v2);
				
			//upzila-start-
				$.ajax({
					url: '{{route("upzila")}}',                                         
					type: "POST",
					data: {
						"_token": "{{ csrf_token() }}",
						district_id: v4
					},
					success: function(result) {
						$('#s_permanent_upzila').empty().append('<option value="">Select Upzila</option>');
							$.each(result, function(key, value) {
								$('#s_permanent_upzila').append('<option value="' + value.id + '">' + value.name + '</option>');
						});

					$("#s_permanent_upzila").val(v3);
				   }
		        });
			//upzila-end-
			//post-office-start-
				$.ajax({
					url: '{{route("post_office")}}',                                         
					type: "POST",
					data: {
						"_token": "{{ csrf_token() }}",
						upzila_id: v3
					},
					success: function(result) {
						$('#s_permanent_p_office').empty().append('<option value="">Select Post Office</option>');
							$.each(result, function(key, value) {
								$('#s_permanent_p_office').append('<option value="' + value.id + '">' + value.p_name + '</option>');
							}
						);
					$("#s_permanent_p_office").val(v5);
					   }
				})
			//post-office-end-
			//post-office-code-start-
				$.ajax({
					url: '{{route("post_code")}}',                                         
					type: "POST",
					data: {
						"_token": "{{ csrf_token() }}",
						code: v5
					},
					success: function(result) {
						$('#s_permanent_p_cod').empty().append('<option value="">Select Post Code</option>');
							$.each(result, function(key, value) {
								$('#s_permanent_p_cod').append('<option value="' + value.id + '">' + value.p_code + '</option>');
							}
						);
					$("#s_permanent_p_cod").val(v6);
					   }
				})
			//post-office-code-end-
			}else{
				$("#s_permanent_care").val('');
				$("#s_permanent_village").val('');
				
				var districtOptions = '<option value="">District..</option>';
				@if($districts->count() > 0)
					@foreach($districts as $district)
						districtOptions += '<option value="{{ $district->id }}">{{ $district->d_name }}</option>';
					@endforeach
				@endif
				$("#s_permanent_district").html(districtOptions);

				var upzilaOptions = '<option value="">Upazila/P.S..</option>';
				$('#s_permanent_upzila').html(upzilaOptions);
				
				var post_office_Options = '<option value="">Post Office..</option>';
				$("#s_permanent_p_office").html(post_office_Options);

				var post_code_Options = '<option value="">Post Code..</option>';
				$("#s_permanent_p_cod").html(post_code_Options);
			}
				   
		  });
	//add-student-end--
				</script>
				@endpush
