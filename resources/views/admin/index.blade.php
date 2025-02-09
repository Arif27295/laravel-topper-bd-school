@extends('layouts.admin_panel')
@section('title')
	Dashboard
@endsection
@section('main')
<div class="row mt-5">
					<div class="col-3 all-progress-bar" style="padding-right:5px;">
						<div class="ellipsis-hover">
							<i class="fa-solid fa-ellipsis"></i>
							 <ul class="nav three-dot-ul flex-column">
							  <li class="nav-item"><a class="nav-link" href="#">Per Year</a></li>
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
							  <li class="nav-item"><a class="nav-link" href="#">Per Weak</a></li>
							  <li class="nav-item"><a class="nav-link" href="#">Per Month</a></li>
							  <li class="nav-item"><a class="nav-link" href="#">Per Year</a></li>
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
							  <li class="nav-item"><a class="nav-link" href="#">Per Year</a></li>
							</ul>
						</div>
						<div class="row">
							<div class="col-3" style="text-align:center;align-content:center">
								<i class="ri-team-fill"></i>
							</div>
							<div class="col-9">
								<p>Total Teachers</p>
								<p>200</p>
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
							  <li class="nav-item"><a class="nav-link" href="#">Per Weak</a></li>
							  <li class="nav-item"><a class="nav-link" href="#">Per Month</a></li>
							  <li class="nav-item"><a class="nav-link" href="#">Per Year</a></li>
							</ul>
						</div>
						<div class="row">
							<div class="col-3" style="text-align:center;align-content:center">
								<i class="ri-money-dollar-circle-line"></i>
							</div>
							<div class="col-9">
								<p>Fees Collection</p>
								<p>53405</p>
								<div class="progress">
								  <div class="progress-bar" style="width:10%;"></div>
								</div>
								<p style="font-weight:400;">10% Increase in 20 days</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="p-6 bg-white border-b border-gray-200">
					@foreach(auth()->user()->notifications as $notification)
						<div class="bg-blue-300 p-3 m-2">
							<b>{{$notification->data['name']}}</b> started following you !!!
							<a href="{{route('marksred', $notification->id)}}" class="p-2 bg-danger text-white rounded-lg">
								Mark as read</a>
						</div>
					@endforeach
				</div>

				@endsection
