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
														<h3 class="card-title">Manage Siteconfig</h3><a href="{{ route('siteconfig.create') }}"><button class="p-2 rounded btn-primary">Add siteconfig</button></a>
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
																	<th>siteconfig name</th>
																	<th>siteconfig key</th>
																	<th>siteconfig value</th>
                                                                    <th>siteconfig imglink</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
															@foreach ($siteconfig as $siteconfiges)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																<td>
                                                                    	<a href="{{ route('siteconfig.edit', $siteconfiges->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
                                                                        <form action="{{ route('siteconfig.destroy', $siteconfiges->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>




																	</td>
                                                                    <td>{{ $siteconfiges->site_name}}</td>
																		<td>{{ $siteconfiges->site_key }}</td>
																		<td>{{ $siteconfiges->site_value }}</td>
                                                                        <td>{{ $siteconfiges->imglink}}</td>
																		<td>{{ $siteconfiges->status }}</td>


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
