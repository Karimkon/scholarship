@extends('layouts.app')

@section('content')
		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Courses</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Courses</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					@foreach ($getRecord as $value)
						
					
					<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card">
                            
                                @if(!empty($value->getCoursePhoto()))
                                    <img class="img-fluid"  src="{{ $value->getCoursePhoto() }}">
                                @endif
                            
							<div class="card-body">
								<h4>{{ $value->name }}</h4>
								<ul class="list-group mb-3 list-group-flush">
									<li class="list-group-item px-0 border-top-0 d-flex justify-content-between"><span class="mb-0 text-muted">April 23</span>
										<a href="javascript:void(0);"><i class="la la-heart-o mr-1"></i><strong>230</strong></a></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Duration :</span><strong>{{ $value->duration }}</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span class="mb-0">Contact :</span><strong>{{ $value->contact }}</strong></li>
									<li class="list-group-item px-0 d-flex justify-content-between">
										<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Student</span><strong>+120</strong></li>
								</ul>
								<a href="{{ url('admin/course/edit/'.$value->id) }}" class="btn btn-primary">Edit Course</a>
							</div>
						</div>
					</div>
					
					@endforeach
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection