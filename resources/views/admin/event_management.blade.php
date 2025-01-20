@extends('layouts.admin_panel')
@section('main')
<div class="row">
					<div class="col-3 all-progress-bar" style="padding-right:5px;">
						<div class="ellipsis-hover">
							<i class="fa-solid fa-ellipsis"></i>
							 <ul class="nav three-dot-ul flex-column">
							  <li class="nav-item"><a class="nav-link" href="#">View More</a></li>
							</ul>
						</div>
						<div class="row">
							<div class="col-3" style="text-align:center;">
								<i class="ri-open-arm-line"></i>
							</div>
							<div class="col-9">
								<p>28</p>
								<p>Holidays</p>
								<div class="progress">
								  <div class="progress-bar" style="width:40%;"></div>
								</div>
								<p style="font-weight:400;">40% Complete</p>
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
							<div class="col-3" style="text-align:center;">
								<i class="ri-open-arm-line"></i>
							</div>
							<div class="col-9">
								<p>26</p>
								<p>Leaves</p>
								<div class="progress">
								  <div class="progress-bar" style="width:60%;"></div>
								</div>
								<p style="font-weight:400;">60% Complete</p>
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
							<div class="col-3" style="text-align:center;">
								<i class="ri-user-2-fill"></i>
							</div>
							<div class="col-9">
								<p>8</p>
								<p>Meetings</p>
								<div class="progress">
								  <div class="progress-bar" style="width:20%;"></div>
								</div>
								<p style="font-weight:400;">20% Complete</p>
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
							<div class="col-3" style="text-align:center;">
								<i class="ri-money-dollar-circle-line"></i>
							</div>
							<div class="col-9">
								<p>6</p>
								<p>Interviews</p>
								<div class="progress">
								  <div class="progress-bar" style="width:10%;"></div>
								</div>
								<p style="font-weight:400;">10% Complete</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-12 p-2" style="color: #b8bbc1;background: #1C1C1D;font-size: 14px;font-weight: 500;border-radius: 6px 6px 0px 0px;border: 1px solid #414144;border-bottom:none;">
						<p style="margin:0px;">Calendar</p>
					</div>
					<div class="col-12" style="margin-top:0px;border-radius: 0px 0px 6px 6px;border: 1px solid #414144;background:#181819;">
						<div class="pt-3 pb-3" id="page-container">
							<div class="row">
								<div class="col-md-9">
									<div id="calendar"></div>
								</div>
								<div class="col-md-3 p-0">
									<div class="cardt rounded-0 shadow">
										<div class="card-header bg-gradient bg-primary text-light">
											<h5 class="card-title">Schedule Form</h5>
										</div>
										<div class="card-body">
											<div class="container-fluid">
												<form action="save_schedule.php" method="post" id="schedule-form">
													<input type="hidden" name="id" value="">
													<div class="form-group mb-2">
														<label for="title" class="control-label">Title</label>
														<input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
													</div>
													<div class="form-group mb-2">
														<label for="description" class="control-label">Description</label>
														<textarea rows="3" class="form-control form-control-sm rounded-0" name="description" id="description" required></textarea>
													</div>
													<div class="form-group mb-2">
														<label for="start_datetime" class="control-label">Start</label>
														<input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
													</div>
													<div class="form-group mb-2">
														<label for="end_datetime" class="control-label">End</label>
														<input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
													</div>
												</form>
											</div>
										</div>
										<div class="card-footer">
											<div class="text-center">
												<button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
												<button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Event Details Modal -->
						<div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content rounded-0">
									<div class="modal-header rounded-0">
										<h5 class="modal-title">Schedule Details</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body rounded-0">
										<div class="container-fluid">
											<dl>
												<dt class="text-muted">Title</dt>
												<dd id="title" class="fw-bold fs-4"></dd>
												<dt class="text-muted">Description</dt>
												<dd id="description" class=""></dd>
												<dt class="text-muted">Start</dt>
												<dd id="start" class=""></dd>
												<dt class="text-muted">End</dt>
												<dd id="end" class=""></dd>
											</dl>
										</div>
									</div>
									<div class="modal-footer rounded-0">
										<div class="text-end">
											<button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
											<button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
											<button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Event Details Modal -->

                        <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
            <tr>
                <td>{{ $schedule['id'] }}</td>
                <td>{{ $schedule['title'] }}</td>
                <td>{{ $schedule['description'] }}</td>
                <td>{{ $schedule['sdate'] }}</td>
                <td>{{ $schedule['edate'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>    
					</div>
				</div>	
				<!--event-management-end-->
@endsection
@section('scripts')
 <script src="{{asset('js/calendar.js/main.min.js')}}"></script>
 <script src="{{asset('js/calendar.js/script.js')}}"></script>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
	 $(document).ready(function(){
		$(".fc-list-button").html('day'); 
		$(".fc-list-button").click(function(){
			$(this).empty();
			$(this).html("day");
		});
		$(".fc-dayGridWeek-button").click(function(){
			$(".fc-list-button").html("day");
		});
		$(".fc-dayGridMonth-button").click(function(){
			$(".fc-list-button").html("day");
		}); 
	 });
</script>
@endsection