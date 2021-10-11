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
														<h3 class="card-title">Manage notice</h3><a href="{{ route('notice.create') }}"><button class="p-2 rounded btn-primary">Add notice</button></a>
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
																	<th>Notice Heading</th>
																	<th>Notice Date</th>
                                                                    <th>Notice Detail</th>
                                                                    <th>Notice Started</th>
																	<th>Notice Ended</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
														@foreach ($notice as $notices)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
                                                                            <a href="{{ route('notice.edit', $notices->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																		<form action="{{ route('notice.destroy', $notices->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $notices->heading }}</td>
																		<td>{{ $notices->date }}</td>
																		<td>{{ $notices->detail }}</td>
                                                                        <td>{{ $notices->started }}</td>
                                                                        <td>{{ $notices->ended }}</td>
																		<td>{{ $notices->status }}</td>

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
