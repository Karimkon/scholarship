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
                            <h4>All Departments</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Departments</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Departments</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Universities List</h4>
								<a href="{{ url('admin/university/add') }}" class="btn btn-primary"> + Add Universities</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
                                    <table id="example5" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>University</th>
                                                <th>Head Of University</th>
                                                <th>Details</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($getRecord as $value)
                                                
                                            
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td><strong>{{ $value->name }}</strong></td>
                                                <td>{{ $value->head }}</td>
                                                <td>{{ $value->details }}</td>
                                                
                                                <td>
                                                    <a href="{{ url('admin/university/edit/'.$value->id) }}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                                    <a href="{{ url('admin/university/delete/'.$value->id) }}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>												
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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