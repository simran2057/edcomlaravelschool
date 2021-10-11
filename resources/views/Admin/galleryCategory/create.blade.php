@extends('admin.layout.app')
@section('content')
<!--begin::Entry-->
	<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Card-->
							<div class="card card-custom card-transparent">
								<div class="p-0 card-body">
									<!--begin::Wizard-->
									<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
										<!--begin::Wizard Nav-->
										<div class="wizard-nav">
											<div class="wizard-steps">
												<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
													<div class="wizard-wrapper">
														<div class="wizard-number"></div>
														<div class="wizard-label">
															<div class="wizard-title">Add Gallery Category</div><a href="{{ url('galleryCategory') }}"><button class="p-2 rounded btn-primary">Back</button></a>

														</div>
													</div>
												</div>

											</div>
										</div>
										<!--end::Wizard Nav-->
										<!--begin::Card-->
										<div class="card card-custom card-shadowless rounded-top-0">
											<!--begin::Body-->
											<div class="p-0 card-body">
												<div class="px-8 py-8 row justify-content-center py-lg-15 px-lg-10">
													<div class="col-xl-12 col-xxl-10">
														<!--begin::Wizard Form-->
                                                                                                                    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
														<form class="form" id="kt_form" action="{{ route('galleryCategory.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
															<div class="row justify-content-center">
																<div class="col-xl-9">
																	<!--begin::Wizard Step 1-->

																	<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
																		<h5 class="mb-10 text-dark font-weight-bold">Gallery Category Details:</h5>

																		<!--begin::Group-->
																		<div class="form-group row">
																			<label class="col-xl-3 col-lg-3 col-form-label"> Category Name</label>
																			<div class="col-lg-9 col-xl-9">
																				<input class="form-control form-control-solid form-control-lg" name="g_name" type="text"  />
																			</div>
																		</div>
																		<!--end::Group-->

																		<!--begin::Group-->
																		<div class="form-group row">
																			<label class="col-form-label col-lg-3 col-sm-12">Status</label>
																			<div class="col-lg-9 col-md-9 col-sm-12">
																				<select class="form-control" name="g_status">
																					<option >Select</option>
																					<option>Active</option>
																					<option>Deactive</option>

																				</select>
																				<span class="form-text text-muted">Please select a status.</span>
																			</div>
																		</div>
																		<!--end::Group-->


																	</div>
																	<!--end::Wizard Step 1-->

																	<!--begin::Wizard Actions-->
																	<div class="pt-10 d-flex justify-content-between border-top mt-15">

																		<div>

																			<button class="py-4 btn btn-primary font-weight-bolder px-9" type="submit" name="submit">Submit</button>
																		</div>
																	</div>
																	<!--end::Wizard Actions-->
																</div>
															</div>
														</form>
														<!--end::Wizard Form-->
													</div>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Wizard-->
								</div>
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
@endsection
