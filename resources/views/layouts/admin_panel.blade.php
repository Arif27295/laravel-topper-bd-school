<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/dataTables_css/dataTables.bootstrap5.css')}}" rel="stylesheet">
	<link href="{{asset('css/dataTables_css/buttons.bootstrap5.css')}}" rel="stylesheet">
	<link rel="icon" href="{{asset('asset/img/icon.png')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<title>Topper BD School</title>

    <style>
		.scrollbox{
				overflow:auto;
				margin: 0px 12px;
				margin-bottom: 30px;
			}
			::-webkit-scrollbar{
				width:0px;
				height:6px;
			}
			::-webkit-scrollbar-thumb{
				background:#BA1654;
				border-radius:10px;
			}
	</style>
</head>
<body>
	<div class="wrapper">
		<!--reload-start-->
		<div class="center" id="center">
			<div class="ring"></div>
			<span class="lod-spain">loading...</span>
		</div>
		<!--reload-end-->
		<div class="row justify-content-end">
			<!--left-sidebar-start-->
			<div class="col-2 left-sidebar">
				<div class="row">
					<div class="col-12 sidebar-caption">
						<img src="../asset/img/icon-2.png">
						<h2>TBDS</h2>
					</div>
					<div class="col-12 sidebar-caption-nav">
						<ul class="nav flex-column">
							<li class="nav-item"><a href="dashboard.php" style="background:#ba1654;color:#fff" class="nav-link"><i class="ri-layout-line"></i> <span>Dashboard</span></a></li>
							<li class="nav-item"><a href="{{route('event_management')}}" class="nav-link"><i class="ri-calendar-line"></i> <span>Event Management</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link dropdown-chevron"><i class="ri-open-arm-line"></i> <span>Students</span> <i class="fa-solid fa-chevron-right "></i></a>
								<div class="sub-nav" style="display:none">
									<ul class="nav flex-column">
										<li class="link-item"><a href="{{route('student_list')}}" class="nav-link">Students List</a></li>
										<li class="link-item"><a href="{{route('add_student')}}" class="nav-link">Add Student</a></li>
										<li class="link-item"><a href="students_profile.php" class="nav-link">Students Profile</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item"><a href="#" class="nav-link dropdown-chevron"><i class="ri-team-fill"></i> <span>Teachers</span> <i class="fa-solid fa-chevron-right "></i></a>
								<div class="sub-nav" style="display:none">
									<ul class="nav flex-column">
										<li class="link-item"><a href="teacher_list.php" class="nav-link">Teachers List</a></li>
										<li class="link-item"><a href="{{route('add_teacher')}}" class="nav-link">Add Teacher</a></li>
										<li class="link-item"><a href="teachers_profile.php" class="nav-link">Teachers Profile</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item"><a href="#" class="nav-link dropdown-chevron"><i class="ri-user-line"></i> <span>Staff</span> <i class="fa-solid fa-chevron-right "></i></a>
								<div class="sub-nav" style="display:none">
									<ul class="nav flex-column">
										<li class="link-item"><a href="staff_list.php" class="nav-link">Staff List</a></li>
										<li class="link-item"><a href="add_staff.php" class="nav-link">Add Staff</a></li>
										<li class="link-item"><a href="staff_profile.php" class="nav-link">Staff Profile</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item"><a href="library.php" class="nav-link"><i class="ri-book-2-line"></i> <span>Library</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link dropdown-chevron"><i class="ri-money-dollar-box-line"></i> <span>Accounts</span> <i class="fa-solid fa-chevron-right "></i></a>
								<div class="sub-nav" style="display:none">
									<ul class="nav flex-column">
										<li class="link-item"><a href="fee_collection.php" class="nav-link">Fees Collection</a></li>
										<li class="link-item"><a href="expenses_list.php" class="nav-link">Expenses List</a></li>
										<li class="link-item"><a href="salary_list.php" class="nav-link">Salary List</a></li>
										<li class="link-item"><a href="add_fees.php" class="nav-link">Add Fees</a></li>
										<li class="link-item"><a href="add_expenses.php" class="nav-link">Add Expenses</a></li>
										<li class="link-item"><a href="add_salary.php" class="nav-link">Add Salary</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item"><a href="#" class="nav-link dropdown-chevron"><i class="ri-money-dollar-circle-line"></i> <span>Fees</span> <i class="fa-solid fa-chevron-right "></i></a>
								<div class="sub-nav" style="display:none">
									<ul class="nav flex-column">
										<li class="link-item"><a href="fees_list.php" class="nav-link">Fees List</a></li>
										<li class="link-item"><a href="fees_receipt.php" class="nav-link">Fees Receipt</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item"><a href="attendance.php" class="nav-link"><i class="ri-user-follow-line"></i> <span>Attendance</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link dropdown-chevron"><i class="ri-building-4-line"></i> <span>Department</span> <i class="fa-solid fa-chevron-right "></i></a>
								<div class="sub-nav" style="display:none">
									<ul class="nav flex-column">
										<li class="link-item"><a href="department_list.php" class="nav-link">Department List</a></li>
										<li class="link-item"><a href="add_department.php" class="nav-link">Add Department</a></li>
										<li class="link-item"><a href="edit_department.php" class="nav-link">Edit Department</a></li>
									</ul>
								</div>
							</li>
							<li class="nav-item"><a href="subject.php" class="nav-link"><i class="ri-user-line"></i> <span>Subject</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Courses</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Forms</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Tables</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Contact</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Setting</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Contuct Us</span></a></li>
							<li class="nav-item"><a href="#" class="nav-link"><i class="ri-user-line"></i> <span>Widget's</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--left-sidebar-end-->
			<div class="col-10 right-sidebar">
				<!--right-sidebar-start-->
				<div class="row top-header">
					<div class="col-10">
						<div class="row">
							<div class="col-6 menu-bar">
								<i class="ri-menu-line"></i>
								<span>@yield('title')</span>
							</div>
							<div class="col-3">
								<div class="input-group">
									<i class="ri-search-line"></i>
									<input type="text" class="" placeholder="Search...">
								</div>
							</div>
							<div class="col-3 admin-flex justify-content-center">
								<div class="setting-icon">
									 <i class="ri-settings-2-line"></i><sup>3</sup>
									  <i class="ri-chat-2-line"></i><sup>5</sup>
									  <i class="ri-notification-line"></i><sup>9</sup>
								</div>
								<div class="admin-pannel d-flex justify-content-center">
									<div>
										<img src="../asset/img/user.png" width="100%">
									</div>
									<div class="admin-logout">
										<p>MD Arif</p>
										<span class="dropdown-toggle header-dropdown-toggle" >Admin</span>
										<ul class="nav admin-setting">
										  <li class="nav-item"><a class="nav-link" href="#"><i class="ri-account-pin-circle-line"></i> <span>My Profile</span></a></li>
										  <li class="nav-item"><a class="nav-link" href="#"><i class="ri-settings-2-line"></i> <span>Setting</span></a></li>
										  <li class="nav-item"><a class="nav-link" href="#"><i class="ri-forbid-line"></i> <span>Reset Password</span></a></li>
										  <li class="nav-item" style="padding:0px 13px;text-align:center;">
										  <form method="POST" action="{{ route('logout') }}">
												@csrf
												<button type="submit" class="logout-button nav-link">Logout</button>
											</form>
										  </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--right-sidebar-end-->
				<!--dashboard-sidebar-start-->
				@yield('main')

				<!--dashboard-sidebar-end-->
			</div>
		</div>
	</div>
 <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('js/jquery.min.js')}}"></script>
 <script src="{{asset('js/jquery.js')}}"></script>
 <script src="{{asset('js/js.js')}}"></script>

 <script src="{{asset('js/dataTable_js/dataTables.js')}}"></script>
 <script src="{{asset('js/dataTable_js/dataTables.bootstrap5.js')}}"></script>
 <script src="{{asset('js/dataTable_js/dataTables.buttons.js')}}"></script>
 <script src="{{asset('js/dataTable_js/buttons.bootstrap5.js')}}"></script>
 <script src="{{asset('js/dataTable_js/jszip.min.js')}}"></script>
 <script src="{{asset('js/dataTable_js/pdfmake.min.js')}}"></script>
 <script src="{{asset('js/dataTable_js/vfs_fonts.js')}}"></script>
 <script src="{{asset('js/dataTable_js/buttons.html5.min.js')}}"></script>
 <script src="{{asset('js/dataTable_js/buttons.print.min.js')}}"></script>
 @stack("scripts")
</html>
