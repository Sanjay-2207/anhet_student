@extends('layouts.dashboard')

@section('content')

	<section role="main" class="content-body">
		<header class="page-header">
			<h2>Student Reports</h2>
					
			<div class="right-wrapper pull-right">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="fa fa-home"></i>
						</a>
					</li>
					<li><span>Layouts</span></li>
					<li><span>Default</span></li>
				</ol>
					
				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
			</div>
		</header>
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Students Report</h2>
							</header>
							<div class="panel-body"><a href="{{url('add_student')}}" class="btn btn-success">Add Student</a>
								<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
									<thead>
										<tr>
											<th>S no</th>
											<th>Name</th>
											<th>Mobile no</th>
											<th>Email</th>
											<th>Address</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data['students'] as $stu)
										<tr>
											<td>{{$loop->iteration}}</td>
											<td>{{$stu->name}}</td>
											<td>{{$stu->mobile_no}}</td>
											<td>{{$stu->email}}</td>
											<td>{{$stu->Address}}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</section>




@endsection