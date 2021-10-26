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
														<h3 class="card-title">Manage News</h3><a href="{{ route('news.create') }}"><button class="p-2 rounded btn-primary">Add News</button></a>
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
																	<th>News Title</th>
																	<th>News Text</th>
																	<th>Date</th>
																	<th>Time</th>
																	<th>Location</th>
																	<th>News Details</th>
																	<th>Image</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
															@foreach ($news as $newses)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																<td>
                                                                    	<a href="{{ route('news.edit', $newses->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
                                                                        <form action="{{ route('news.destroy', $newses->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>




																	</td>
																		<td>{{ $newses->title }}</td>
																		<td>{{ $newses->text }}</td>
																		<td>{{ $newses->date }}</td>
																		<td>{{ $newses->time }}</td>
																		<td>{{ $newses->location }}</td>
																		<td>{{ $newses->details }}</td>
                                                                        <td>{{ $newses->imglink}}</td>
																		<td>{{ $newses->status }}</td>


																	</tr>
                                                                     @endforeach

																</tfoot>
														</table>
														<div class="row">
															<div class="col-md-12">
																<div class="text-center">
																	{{$news->links()}}
																</div>
															</div>
														</div>
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
