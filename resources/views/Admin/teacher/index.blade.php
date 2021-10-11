@extends('admin.layout.app')

@section('content')
	<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Card-->
							<div class="card card-custom">
								<!--begin::Body-->

								<section class="content">
									<div class="container-fluid">
										<div class="row">
											<!-- left column -->
											<div class="col-md-12">
												<div class="card card-primary">
													<div class="card-header">
														<h3 class="card-title">Manage Teacher</h3><a href="{{ route('teacher.create') }}"><button class="p-2 rounded btn-primary">Add Teacher</button></a>
													</div>
													                                                                                            @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

													<!-- /.card-header -->
													<div class="card-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th>S.N.</th>
																	<th>Action</th>
																	<th>Teacher Name</th>

																	<th>Teacher Post</th>
																	<th>Teacher Image link</th>
																	<th>Teacher Details</th>
																	<th>Teacher Experience</th>
																	<th>Teacher Address</th>
																	<th>Teacher Contact</th>

																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
															@foreach ($teacher as $teachers)

																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
																			<a href="{{ route('teacher.edit',$teachers->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																		<form action="{{ route('teacher.destroy',$teachers->id) }}" method="post">
                                                                        @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                    </form>

																		</td>
																		<td>{{ $teachers->name }}</td>
																		<td>{{ $teachers->post }}</td>
																		<td>{{ $teachers->img_link}}</td>
																		<td>{{ $teachers->details }}</td>
																		<td>{{ $teachers->experience }}</td>
																		<td>{{ $teachers->address }}</td>
																		<td>{{ $teachers->contact }}</td>
																		<td>{{ $teachers->status }}</td>

																	</tr>
    @endforeach
																</tfoot>
														</table>
													</div>
													<!-- /.card-body -->
												</div>
											</div>
											<!--/.col (left) -->
										</div>
										<!-- /.row -->
									</div><!-- /.container-fluid -->
								</section>
								<!--end::Body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
@endsection
