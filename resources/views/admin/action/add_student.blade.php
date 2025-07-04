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

		<!-- start: page -->
					<div class="row">
						<h2 class="panel-title"><a href="{{url('new')}}"><button class="btn btn-success">Back</button></a></h2>

							<form method="post" action="{{url('insert_stu')}}" enctype="multipart/form-data" class="form-horizontal">
								@csrf
								<section class="panel">

									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
										

									</header>

									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Student Name<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="name" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Mobile No<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="mobile_no" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Email<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="email" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Address<span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="address" class="form-control" required/>
											</div>
										</div>
										
									</div>

									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-3">
												<input type="submit" class="btn btn-success" value="Submit">
											</div>
										</div>

									</footer>

								</section>

							</form>
					</div>
					
					<!-- end: page -->

@endsection