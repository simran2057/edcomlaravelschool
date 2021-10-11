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
														<h3 class="card-title">Manage Gallery Category</h3><a href="{{ route('galleryCategory.create') }}"><button class="p-2 rounded btn-primary">Add Gallery Category</button></a>
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
																	<th>Category Name</th>

																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
																    @foreach ($category as $categories)
																	<tr>
																		<td>{{ $loop->index }}</td>
																		<td>
																			<a href="{{ route('galleryCategory.edit', $categories->g_id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																			<form action="{{ route('galleryCategory.destroy', $categories->g_id) }}" method="post">

                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $categories->g_name }}</td>

																		<td>{{ $categories->g_status}}</td>

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
