@extends('layouts.admin_panel')
@section('title')
	Student Update
@endsection
@section('main')
<!--add-student-start-->
@if(session('delete'))
        <p class="alert alert-danger text-white alert-design">{{session('delete')}}</p>
        @elseif(session('success'))
        <p class="alert alert-success text-white alert-design">{{session('success')}}</p>
    @endif
<form action="{{route('update_student',$student_info->id)}}" method="post" enctype="multipart/form-data">
	@csrf
    @method('PUT')
					<div class="row st_row">
						<div class="col-12">
							<h2>Update Info</h2>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="name" class="form-label">Full Name : <sup>*</sup></label>
										<input type="text" value="{{$student_info->name}}" class="form-control" id="name" placeholder="Your name.." name="s_name" required >
										<x-input-error :messages="$errors->get('s_name')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="father_name" class="form-label">Father Name : <sup>*</sup> </label>
										<input type="text" class="form-control" value="{{$student_info->father_n}}" id="father_name" placeholder="Father name.." name="father_name" required >
										<x-input-error :messages="$errors->get('father_name')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="father_nid" class="form-label">Father NID : <sup>*</sup> </label>
										<input type="number" value="{{$student_info->father_nid}}" class="form-control count-chars" id="father_nid" placeholder="Father NID.." maxlength="10" data-max-chars="10" name="father_nid" required >
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('father_nid')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
								<div class="col-4 form-group" style="padding-right:20px;">
										<label for="class" class="form-label">Class : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="class"  name="class" required>
											  <option value="play" {{$student_info->class == 'play' ? 'selected' : ''}}>Play</option>
											  <option value="nursery" {{$student_info->class == 'nursery' ? 'selected' : ''}}>Nursery</option>
											  <option value="one" {{$student_info->class == 'one' ? 'selected' : ''}}>One</option>
											  <option value="two" {{$student_info->class == 'two' ? 'selected' : ''}}>Two</option>
											  <option value="three" {{$student_info->class == 'three' ? 'selected' : ''}}>Three</option>
											  <option value="four" {{$student_info->class == 'four' ? 'selected' : ''}}>Four</option>
											  <option value="five" {{$student_info->class == 'five' ? 'selected' : ''}}>Five</option>
											  <option value="six" {{$student_info->class == 'six' ? 'selected' : ''}}>Six</option>
											  <option value="seven" {{$student_info->class == 'seven' ? 'selected' : ''}}>Seven</option>
											  <option value="eight" {{$student_info->class == 'eight' ? 'selected' : ''}}>Eight</option>
											  <option value="nine" {{$student_info->class == 'nine' ? 'selected' : ''}}>Nine</option>
											  <option value="ten" {{$student_info->class == 'ten' ? 'selected' : ''}}>Ten</option>
											</select>
										</div>
										<x-input-error :messages="$errors->get('class')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="mother_name" class="form-label">Mother Name : <sup>*</sup></label>
										<input type="text" class="form-control" id="mother_name" value="{{$student_info->mother_n}}" placeholder="Mother name.." name="mother_name" required >
										<x-input-error :messages="$errors->get('mother_name')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="mother_nid" class="form-label">Mother NID : <sup>*</sup> </label>
										<input type="number" class="form-control count-chars" value="{{$student_info->mother_nid}}" id="mother_nid" maxlength="10" data-max-chars="10" placeholder="Mother NID.." name="mother_nid" required >
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('mother_nid')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="roll_no" class="form-label">Roll No : <sup>*</sup></label>
										<input type="number" class="form-control" value="{{$student_info->roll}}" id="roll_no" placeholder="Roll.." name="roll_no" required>
										<x-input-error :messages="$errors->get('roll_no')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="number" class="form-label">Mobile Number : <sup>*</sup></label>
										<input type="text" class="form-control count-chars" value="{{$student_info->number}}" maxlength="11" data-max-chars="11" id="number" placeholder="Number.." name="s_number" required >
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('s_number')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="pass" class="form-label">Password : <sup>*</sup></label>
										<input type="text" class="form-control count-chars" value="" id="pass" maxlength="8" data-max-chars="8" placeholder="Password.." name="s_pass">
										<div class="input-msg"></div>
										<x-input-error :messages="$errors->get('s_pass')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="email" class="form-label">Email Here :  <span>(Optional)</span></label>
										<input type="email" class="form-control" value="{{$student_info->email}}" id="email" placeholder="Emial here.." name="s_email">
										<x-input-error :messages="$errors->get('s_email')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="gender" class="form-label">Gender : <sup>*</sup></label>
										<div class="form-group-2">
											<select class="form-select" id="gender" name="s_gender" required>
											  <option value="male" {{$student_info->gender == 'male' ? 'selected' : ''}}>Male</option>
											  <option value="female" {{$student_info->gender == 'female' ? 'selected' : ''}}>Female</option>
											</select>
										</div>
										<x-input-error :messages="$errors->get('s_gender')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="date" class="form-label">Registration Date : <sup>*</sup></label>
										<input type="date" class="form-control" value="{{$student_info->reg_date}}" id="date" name="reg_date" required>
										<x-input-error :messages="$errors->get('reg_date')" class="mt-2" />
									</div>
								</div><br>
								<div class="row">
									<div class="col-4 form-group" style="padding-right:20px;">
										<label for="blood" class="form-label">Blood Group : <span>(Optional)</span></label>
										<div class="form-group-2">
											<select class="form-select" id="blood" name="s_blood">
											  <option value="o-" {{$student_info->blo_grp == 'o-' ? 'selected' : ''}}>O-</option>
											  <option value="o+" {{$student_info->blo_grp == 'o+' ? 'selected' : ''}}>O+</option>
											  <option value="a-" {{$student_info->blo_grp == 'a-' ? 'selected' : ''}}>A-</option>
											  <option value="a+" {{$student_info->blo_grp == 'a+' ? 'selected' : ''}}>A+</option>
											  <option value="b-" {{$student_info->blo_grp == 'b-' ? 'selected' : ''}}>B-</option>
											  <option value="b+" {{$student_info->blo_grp == 'b+' ? 'selected' : ''}}>B+</option>
											  <option value="ab-" {{$student_info->blo_grp == 'ab-' ? 'selected' : ''}}>AB-</option>
											  <option value="ab+" {{$student_info->blo_grp == 'ab+' ? 'selected' : ''}}>AB+</option>
											</select>
										</div>
										<x-input-error :messages="$errors->get('s_blood')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding:0px 20px;">
										<label for="picture" class="form-label" style="display:block">Picture : <sup>*</sup></label>
										<input type="file" id="picture" value="" name="s_picture" style="padding:0px;">
										<x-input-error :messages="$errors->get('s_picture')" class="mt-2" />
									</div>
									<div class="col-4 form-group" style="padding-left:20px;">
										<label for="birth" class="form-label">Date of Birth : <sup>*</sup></label>
										<input type="date" value="{{$student_info->birth_date}}" class="form-control" id="birth" name="s_birth" required >
										<x-input-error :messages="$errors->get('s_birth')" class="mt-2" />
									</div>
								</div> <br>
						</div>
					</div>
					<div class="row st_p_row">
						<div class="col-6" style="padding-right:10px;">
							<div class="row">
								<div class="col-12"><p class="address">Present Address</p></div>
								<div class="col-6 pe-2 form-group">
									<label for="s_care" class="form-label">Care of : <sup>*</sup></label>
									<input type="text" class="form-control" value="{{$student_info->pre_care}}" id="s_present_care" placeholder="Care of.." name="s_present_care" required >
									<x-input-error :messages="$errors->get('s_present_care')" class="mt-2" />
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" value="{{$student_info->pre_vill}}" id="s_present_village" placeholder="Village.." name="s_present_village" required >
									<x-input-error :messages="$errors->get('s_present_village')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									<div class="form-group-2">
										<select class="form-select" id="s_present_upzila" name="s_present_upzila" required >
                                            @if($upzilas->count() > 0)
                                                 @foreach($upzilas as $upzila)
                                                    <option value="{{$upzila->id}}" {{$student_info->pre_upzi == $upzila->id ? 'selected' : ''}}>{{$upzila->name}}</option>
                                                @endforeach
                                             @endif
										</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_present_upzila')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_district" class="form-label">District : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_present_district" name="s_present_district" required >
												@if($districts->count() > 0)
													@foreach($districts as $district)
														<option value="{{$district->id}}" {{$student_info->pre_dist == $district->id ? 'selected' : ''}}>{{$district->d_name}}</option>
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
                                                @if($post_offices->count() > 0)
                                                    @foreach($post_offices as $post_office)
                                                        <option value="{{$post_office->id}}" {{$student_info->pre_p_offi == $post_office->id ? 'selected' : ''}}>{{$post_office->p_name}}</option>
                                                    @endforeach
                                                @endif
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_present_p_office')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									<div class="form-group-2">
											<select class="form-select" id="s_present_p_cod" name="s_present_p_cod" required >
                                                @if($post_codes->count() > 0)
                                                    @foreach($post_codes as $post_code)
                                                        <option value="{{$post_code->id}}" {{$student_info->pre_p_cod == $post_office->id ? 'selected' : ''}}>{{$post_code->p_code}}</option>
                                                    @endforeach
                                                @endif
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
									<input type="text" class="form-control" value="{{$student_info->per_care}}" id="s_permanent_care" placeholder="Care of.." name="s_permanent_care" required >
									<x-input-error :messages="$errors->get('s_permanent_care')" class="mt-2" />
								</div>
								<div class="col-6 ps-2 form-group">
									<label for="s_village" class="form-label">Village : <sup>*</sup></label>
									<input type="text" class="form-control" value="{{$student_info->per_vill}}" id="s_permanent_village" placeholder="Village.." name="s_permanent_village" required >
									<x-input-error :messages="$errors->get('s_permanent_village')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 pe-2 form-group">
									<label for="upzila" class="form-label">Upazila/P.S. : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_upzila" name="s_permanent_upzila" required >
                                                @if($upzilas->count() > 0)
                                                    @foreach($upzilas as $upzila)
                                                         <option value="{{$upzila->id}}" {{$student_info->pre_upzi == $upzila->id ? 'selected' : ''}}>{{$upzila->name}}</option>
                                                     @endforeach
                                                @endif
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_permanent_upzila')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_district" class="form-label">District : <sup>*</sup></label>
									 <div class="form-group-2">
											<select class="form-select" id="s_permanent_district" name="s_permanent_district" required >
											  @if($districts->count() > 0)
													@foreach($districts as $district)
														<option value="{{$district->id}}" {{$student_info->per_dist == $district->id ? 'selected' : ''}}>{{$district->d_name}}</option>
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
                                                @if($post_offices->count() > 0)
                                                    @foreach($post_offices as $post_office)
                                                        <option value="{{$post_office->id}}" {{$student_info->pre_p_offi == $post_office->id ? 'selected' : ''}}>{{$post_office->p_name}}</option>
                                                    @endforeach
                                                @endif
											</select>
									 </div>
									 <x-input-error :messages="$errors->get('s_permanent_p_office')" class="mt-2" />
								</div>
								<div class="col-6 mt-2 ps-2 form-group">
									<label for="s_p_cod" class="form-label">Post Office Code : <sup>*</sup></label>
									  <div class="form-group-2">
											<select class="form-select" id="s_permanent_p_cod" name="s_permanent_p_cod" required >
                                                @if($post_offices->count() > 0)
                                                    @foreach($post_offices as $post_office)
                                                        <option value="{{$post_office->id}}" {{$student_info->pre_p_offi == $post_office->id ? 'selected' : ''}}>{{$post_office->p_name}}</option>
                                                    @endforeach
                                                @endif
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
