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
														<h3 class="card-title">Manage slider</h3><a href="{{ route('slider.create') }}"><button class="p-2 rounded btn-primary">Add slider</button></a>
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
																	<th>slider Name</th>
																	<th>slider Header</th>
                                                                    <th>slider Sub_heading</th>
                                                                    <th>slider Text</th>
                                                                    <th>slider Img_link</th>
																	<th>slider btn</th>
                                                                    <th>slider btnlink</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
														@foreach ($slider as $sliders)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
                                                                            <a href="{{ route('slider.edit', $sliders->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																		<form action="{{ route('slider.destroy', $sliders->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $sliders->name }}</td>
																		<td>{{ $sliders->header }}</td>
																		<td>{{ $sliders->sub_heading }}</td>
                                                                        <td>{{ $sliders->text}}</td>
                                                                        <td>{{ $sliders->img_link }}</td>
                                                                        <td>{{ $sliders->btn}}</td>
                                                                        <td>{{ $sliders->btnlink}}</td>
																		<td>{{ $sliders->status }}</td>

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
