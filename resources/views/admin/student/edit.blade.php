@extends('layouts.app')

@section('content')
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Student</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">First Name</label>
												<input type="text" name="name" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Last Name</label>
												<input type="text" name="last_name" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" name="email" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">admission No.</label>
												<input type="text" name="admission_number" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Country</label>
												<input type="text" name="country" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control" required name="gender">
													<option value="">Select Gender</option>
													<option {{ (old('gender') == 'Male') ?  'selected' : '' }} value="Male">Male</option>
													<option {{ (old('gender') == 'Female') ?  'selected' : '' }} value="Female">Female</option>
													<option {{ (old('gender') == 'Other') ?  'selected' : '' }} value="Other">Other</option>
												</select>
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label>Blood Group<span style="color: red;">*</span></label>
                                            <select class="form-control" required name="blood_group">
                                                <option value="">Blood Group</option>
                                                <option {{ (old('blood_group') == 'A') ?  'selected' : '' }} value="A">A+</option>
                                                <option {{ (old('blood_group') == 'B') ?  'selected' : '' }} value="B">B</option>
                                                <option {{ (old('blood_group') == 'O') ?  'selected' : '' }} value="O">O</option>
                                            </select>
                                        </div>
                
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" name="mobile_number" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">height </label>
												<input type="text" name="height" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">qualification</label>
												<input type="text" name="qualification" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input type="date" name="date_of_birth" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<label>Status<span style="color: red;">*</span></label>
											<select class="form-control" required name="status">
												<option value="">Select Status</option>
												<option {{ (old('status') == 0) ?  'selected' : '' }} value="0">Active</option>
												<option {{ (old('status') == 1) ?  'selected' : '' }} value="1">Inactive</option>
											</select>
											<div style="color: red">{{ $errors->first('status') }}</div>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control" name="address" rows="5"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
                                                <label>Profile Picture<span style="color: red;"></span></label>
												<input type="file" name="profile_pic" class="dropify" data-default-file="">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">Cencel</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>
                
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection