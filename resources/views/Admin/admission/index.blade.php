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
																	<th>Admission Name</th>
																	<th>Admission Email</th>
                                                                    <th>Admission Phone</th>
                                                                    <th>Admission Adress</th>
                                                                    <th>Admission Skill</th>
                                                                    <th>Admission Gender</th>
                                                                    <th>Admission Ward-No</th>
                                                                    <th>Admission Message</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
														@foreach ($admission as $admissions)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
																		<form action="{{ route('admission.destroy', $admissions->id) }}" method="post">


                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $admissions->name }}</td>
																		<td>{{ $admissions->email }}</td>
																		<td>{{ $admissions->phone }}</td>
                                                                        <td>{{ $admissions->address }}</td>
                                                                        <td>{{ $admissions->skill }}</td>
                                                                        <td>{{ $admissions->gender }}</td>
                                                                        <td>{{ $admissions->ward_no}}</td>
                                                                        <td>{{ $admissions->message }}</td>
																		<td>{{ $admissions->status }}</td>

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
