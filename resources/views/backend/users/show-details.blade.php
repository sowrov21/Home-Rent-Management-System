<x-backend.layouts.master>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
     <div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl"><div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Customer Details</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">eCommerce</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Customers</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Customer Details</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--begin::Layout-->
								<div class="d-flex flex-column flex-xl-row">
									<!--begin::Sidebar-->
									<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
										<!--begin::Card-->
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card body-->
											<div class="card-body pt-15">
												<!--begin::Summary-->
												<div class="d-flex flex-center flex-column mb-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-150px symbol-circle mb-7">
														<img src="{{asset('backend/dist')}}/assets/media/avatars/300-1.jpg" alt="image">
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{$user->name}}</a>
													<!--end::Name-->
													<!--begin::Email-->
													<a href="#" class="fs-5 fw-bold text-muted text-hover-primary mb-6">{{$user->email}}</a>
													<!--end::Email-->
												</div>
												<!--end::Summary-->
												<!--begin::Details toggle-->
												<div class="d-flex flex-stack fs-4 py-3">
													<div class="fw-bolder">Details</div>
													<!--begin::Badge-->
													<div class="badge badge-light-info d-inline">Premium user</div>
													<!--begin::Badge-->
												</div>
												<!--end::Details toggle-->
												<div class="separator separator-dashed my-3"></div>
												<!--begin::Details content-->
												<div class="pb-5 fs-6">
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Account ID</div>
													<div class="text-gray-600">ID-{{$user->id}}</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Billing Email</div>
													<div class="text-gray-600">
														<a href="#" class="text-gray-600 text-hover-primary">{{$user->email}}</a>
													</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Delivery Address</div>
													<div class="text-gray-600">101 Collin Street,
													<br>Melbourne 3000 VIC
													<br>Australia</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Language</div>
													<div class="text-gray-600">English</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Latest Transaction</div>
													<div class="text-gray-600">
														<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary">#14534</a>
													</div>
													<!--begin::Details item-->
												</div>
												<!--end::Details content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Sidebar-->
									<!--begin::Content-->
									<div class="flex-lg-row-fluid ms-lg-15">
										<!--begin:::Tabs-->
										<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_overview">Overview</a>
											</li>
											<!--end:::Tab item-->
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_general">General Settings</a>
											</li>
											<!--end:::Tab item-->
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_advanced">Advanced Settings</a>
											</li>
											<!--end:::Tab item-->
										</ul>
										<!--end:::Tabs-->
										<!--begin:::Tab content-->
										<div class="tab-content" id="myTabContent">
											<!--begin:::Tab pane-->
											<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
												<div class="row row-cols-1 row-cols-md-2 mb-6 mb-xl-9">
													<div class="col">
														<!--begin::Card-->
														<div class="card pt-4 h-md-100 mb-6 mb-md-0">
															<!--begin::Card header-->
															<div class="card-header border-0">
																<!--begin::Card title-->
																<div class="card-title">
																	<h2 class="fw-bolder">Reward Points</h2>
																</div>
																<!--end::Card title-->
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<div class="fw-bolder fs-2">
																	<div class="d-flex">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
																		<span class="svg-icon svg-icon-info svg-icon-2x">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																		<div class="ms-2">4,571
																		<span class="text-muted fs-4 fw-bold">Points earned</span></div>
																	</div>
																	<div class="fs-7 fw-normal text-muted">Earn reward points with every purchase.</div>
																</div>
															</div>
															<!--end::Card body-->
														</div>
														<!--end::Card-->
													</div>
													<div class="col">
														<!--begin::Reward Tier-->
														<a href="#" class="card bg-info hoverable h-md-100">
															<!--begin::Body-->
															<div class="card-body">
																<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
																<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor"></path>
																		<path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="currentColor"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<div class="text-white fw-bolder fs-2 mt-5">Premium Member</div>
																<div class="fw-bold text-white">Tier Milestone Reached</div>
															</div>
															<!--end::Body-->
														</a>
														<!--end::Reward Tier-->
													</div>
												</div>
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Transaction History</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table-->
														<div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed gy-5 dataTable no-footer" id="kt_table_customers_payment">
															<!--begin::Table head-->
															<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																<!--begin::Table row-->
																<tr class="text-start text-muted text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="order No.: activate to sort column ascending" style="width: 133.675px;">order No.</th><th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 111.688px;">Status</th><th class="sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 108.912px;">Amount</th><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_customers_payment" rowspan="1" colspan="1" aria-label="Rewards: activate to sort column ascending" style="width: 136.962px;">Rewards</th><th class="min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Date" style="width: 206.712px;">Date</th></tr>
																<!--end::Table row-->
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody class="fs-6 fw-bold text-gray-600">
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
																<!--begin::Table row-->
																
																<!--end::Table row-->
															<tr class="odd">
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14670</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$1,200.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td data-order="0000-01-12T00:00:00+06:01">120</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>14 Dec 2020, 8:43 pm</td>
																	<!--end::Date=-->
																</tr><tr class="even">
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#14750</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$79.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td data-order="2022-05-07T00:00:00+06:00">7</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>01 Dec 2020, 10:12 am</td>
																	<!--end::Date=-->
																</tr><tr class="odd">
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15932</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$5,500.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td data-order="Invalid date">550</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>12 Nov 2020, 2:01 pm</td>
																	<!--end::Date=-->
																</tr><tr class="even">
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15196</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-warning">Pending</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$880.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td data-order="Invalid date">88</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>21 Oct 2020, 5:54 pm</td>
																	<!--end::Date=-->
																</tr><tr class="odd">
																	<!--begin::order=-->
																	<td>
																		<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary mb-1">#15010</a>
																	</td>
																	<!--end::order=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-success">Successful</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$7,650.00</td>
																	<!--end::Amount=-->
																	<!--begin::Amount=-->
																	<td data-order="Invalid date">765</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>19 Oct 2020, 7:32 am</td>
																	<!--end::Date=-->
																</tr></tbody>
															<!--end::Table body-->
														</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_table_customers_payment_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_table_customers_payment_previous"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="kt_table_customers_payment_next"><a href="#" aria-controls="kt_table_customers_payment" data-dt-idx="3" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
														<!--end::Table-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</div>
											<!--end:::Tab pane-->
											<!--begin:::Tab pane-->
											<div class="tab-pane fade" id="kt_ecommerce_customer_general" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Profile</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Form-->
														<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_ecommerce_customer_profile">
															<!--begin::Input group-->
															<div class="mb-7">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">
																	<span>Update Avatar</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allowed file types: png, jpg, jpeg." aria-label="Allowed file types: png, jpg, jpeg."></i>
																</label>
																<!--end::Label-->
																<!--begin::Image input wrapper-->
																<div class="mt-1">
																	<!--begin::Image input-->
																	<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
																		<!--begin::Preview existing avatar-->
																		<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
																		<!--end::Preview existing avatar-->
																		<!--begin::Edit-->
																		<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
																			<i class="bi bi-pencil-fill fs-7"></i>
																			<!--begin::Inputs-->
																			<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
																			<input type="hidden" name="avatar_remove">
																			<!--end::Inputs-->
																		</label>
																		<!--end::Edit-->
																		<!--begin::Cancel-->
																		<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
																			<i class="bi bi-x fs-2"></i>
																		</span>
																		<!--end::Cancel-->
																		<!--begin::Remove-->
																		<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
																			<i class="bi bi-x fs-2"></i>
																		</span>
																		<!--end::Remove-->
																	</div>
																	<!--end::Image input-->
																</div>
																<!--end::Image input wrapper-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7 fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Max Smith">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Row-->
															<div class="row row-cols-1 row-cols-md-2">
																<!--begin::Col-->
																<div class="col">
																	<!--begin::Input group-->
																	<div class="fv-row mb-7 fv-plugins-icon-container">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold mb-2">
																			<span class="required">General Email</span>
																			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Email address must be active" aria-label="Email address must be active"></i>
																		</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="email" class="form-control form-control-solid" placeholder="" name="gen_email" value="max@kt.com">
																		<!--end::Input-->
																	<div class="fv-plugins-message-container invalid-feedback"></div></div>
																	<!--end::Input group-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col">
																	<!--begin::Input group-->
																	<div class="fv-row mb-7">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold mb-2">
																			<span>Billing Email</span>
																			<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Email address must be active" aria-label="Email address must be active"></i>
																		</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="email" class="form-control form-control-solid" placeholder="" name="bill_email" value="info@keenthemes.com">
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
															<div class="d-flex justify-content-end">
																<!--begin::Button-->
																<button type="submit" id="kt_ecommerce_customer_profile_submit" class="btn btn-light-primary">
																	<span class="indicator-label">Save</span>
																	<span class="indicator-progress">Please wait...
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
																<!--end::Button-->
															</div>
														<div></div></form>
														<!--end::Form-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Address Book</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_address">
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add new address</a>
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div id="kt_ecommerce_customer_addresses" class="card-body pt-0 pb-5">
														<!--begin::Addresses-->
														<!--begin::Address-->
														<div class="py-0">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
																	<!--begin::Arrow-->
																	<div class="me-3 rotate-90">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Arrow-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center">
																			<div class="fs-4 fw-bolder">Home</div>
																			<div class="badge badge-light-primary ms-5">Default Address</div>
																		</div>
																		<div class="text-muted">101 Collin Street</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Toolbar-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Edit-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
																		<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Edit-->
																	<!--begin::Delete-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="" data-kt-customer-payment-method="delete" data-bs-original-title="Delete">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--end::Delete-->
																	<!--begin::More-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-original-title="More Options">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_default">Set as default address</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																	<!--end::More-->
																</div>
																<!--end::Toolbar-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_ecommerce_customer_addresses_1" class="collapse fs-6 ps-9" data-bs-parent="#kt_ecommerce_customer_addresses">
																<!--begin::Details-->
																<div class="d-flex flex-column pb-5">
																	<div class="fw-bolder text-gray-600">Max Smith</div>
																	<div class="text-muted">101 Collin Street,
																	<br>Melbourne, VIC 3000,
																	<br>Australia</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Address-->
														<!--begin::Address-->
														<div class="py-0">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
																	<!--begin::Arrow-->
																	<div class="me-3 rotate-90">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Arrow-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center">
																			<div class="fs-4 fw-bolder">Work</div>
																		</div>
																		<div class="text-muted">54 Spring Street</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Toolbar-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Edit-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
																		<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Edit-->
																	<!--begin::Delete-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="" data-kt-customer-payment-method="delete" data-bs-original-title="Delete">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--end::Delete-->
																	<!--begin::More-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-original-title="More Options">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_default">Set as default address</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																	<!--end::More-->
																</div>
																<!--end::Toolbar-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_ecommerce_customer_addresses_2" class="collapse fs-6 ps-9" data-bs-parent="#kt_ecommerce_customer_addresses">
																<!--begin::Details-->
																<div class="d-flex flex-column pb-5">
																	<div class="fw-bolder text-gray-600">Max Smith</div>
																	<div class="text-muted">54 Spring Street,
																	<br>Melbourne, VIC 3000,
																	<br>Australia</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Address-->
														<!--begin::Address-->
														<div class="py-0">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
																	<!--begin::Arrow-->
																	<div class="me-3 rotate-90">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Arrow-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center">
																			<div class="fs-4 fw-bolder">Family</div>
																		</div>
																		<div class="text-muted">1521 Broadway</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Toolbar-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Edit-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
																		<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Edit-->
																	<!--begin::Delete-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="" data-kt-customer-payment-method="delete" data-bs-original-title="Delete">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--end::Delete-->
																	<!--begin::More-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-original-title="More Options">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_default">Set as default address</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																	<!--end::More-->
																</div>
																<!--end::Toolbar-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_ecommerce_customer_addresses_3" class="collapse fs-6 ps-9" data-bs-parent="#kt_ecommerce_customer_addresses">
																<!--begin::Details-->
																<div class="d-flex flex-column pb-5">
																	<div class="fw-bolder text-gray-600">Francis Mitcham</div>
																	<div class="text-muted">1521 Broadway,
																	<br>New York,
																	<br>Melbourne, NY 10036,
																	<br>United States</div>
																</div>
																<!--end::Details-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Address-->
														<!--end::Addresses-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</div>
											<!--end:::Tab pane-->
											<!--begin:::Tab pane-->
											<div class="tab-pane fade" id="kt_ecommerce_customer_advanced" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2>Security Details</h2>
														</div>
														<!--end::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0 pb-5">
														<!--begin::Table wrapper-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
																<!--begin::Table body-->
																<tbody class="fs-6 fw-bold text-gray-600">
																	<tr>
																		<td>Phone</td>
																		<td>+6141 234 567</td>
																		<td class="text-end">
																			<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_phone">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																						<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>Password</td>
																		<td>******</td>
																		<td class="text-end">
																			<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
																				<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																				<span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																						<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table wrapper-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title flex-column">
															<h2 class="mb-1">Two Step Authentication</h2>
															<div class="fs-6 fw-bold text-muted">Keep your account extra secure with a second authentication step.</div>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<!--begin::Add-->
															<button type="button" class="btn btn-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="currentColor"></path>
																	<path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Authentication Step</button>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-6 w-200px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_auth_app">Use authenticator app</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">Enable one-time password</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
															<!--end::Add-->
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pb-5">
														<!--begin::Item-->
														<div class="d-flex flex-stack">
															<!--begin::Content-->
															<div class="d-flex flex-column">
																<span>SMS</span>
																<span class="text-muted fs-6">+6141 234 567</span>
															</div>
															<!--end::Content-->
															<!--begin::Action-->
															<div class="d-flex justify-content-end align-items-center">
																<!--begin::Button-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto me-5" data-bs-toggle="modal" data-bs-target="#kt_modal_add_one_time_password">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																			<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Button-->
																<!--begin::Button-->
																<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" id="kt_users_delete_two_step">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																			<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																			<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Button-->
															</div>
															<!--end::Action-->
														</div>
														<!--end::Item-->
														<!--begin:Separator-->
														<div class="separator separator-dashed my-5"></div>
														<!--end:Separator-->
														<!--begin::Disclaimer-->
														<div class="text-gray-600">If you lose your mobile device or security key, you can
														<a href="#" class="me-1">generate a backup code</a>to sign in to your account.</div>
														<!--end::Disclaimer-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<!--begin::Card title-->
														<div class="card-title">
															<h2 class="fw-bolder mb-0">Payment Methods</h2>
														</div>
														<!--end::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<a href="#" class="btn btn-sm btn-flex btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
															<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																	<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																	<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add new method</a>
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div id="kt_customer_view_payment_method" class="card-body pt-0">
														<!--begin::Option-->
														<div class="py-0" data-kt-customer-payment-method="row">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_1" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
																	<!--begin::Arrow-->
																	<div class="me-3 rotate-90">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Arrow-->
																	<!--begin::Logo-->
																	<img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="">
																	<!--end::Logo-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center">
																			<div class="text-gray-800 fw-bolder">Mastercard</div>
																			<div class="badge badge-light-primary ms-5">Primary</div>
																		</div>
																		<div class="text-muted">Expires Dec 2024</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Toolbar-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Edit-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																		<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Edit-->
																	<!--begin::Delete-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="" data-kt-customer-payment-method="delete" data-bs-original-title="Delete">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--end::Delete-->
																	<!--begin::More-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-original-title="More Options">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																	<!--end::More-->
																</div>
																<!--end::Toolbar-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_customer_view_payment_method_1" class="collapse show fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
																<!--begin::Details-->
																<div class="d-flex flex-wrap py-5">
																	<!--begin::Col-->
																	<div class="flex-equal me-5">
																		<table class="table table-flush fw-bold gy-1">
																			<tbody><tr>
																				<td class="text-muted min-w-125px w-125px">Name</td>
																				<td class="text-gray-800">Emma Smith</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Number</td>
																				<td class="text-gray-800">**** 3769</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Expires</td>
																				<td class="text-gray-800">12/2024</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Type</td>
																				<td class="text-gray-800">Mastercard credit card</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Issuer</td>
																				<td class="text-gray-800">VICBANK</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">ID</td>
																				<td class="text-gray-800">id_4325df90sdf8</td>
																			</tr>
																		</tbody></table>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="flex-equal">
																		<table class="table table-flush fw-bold gy-1">
																			<tbody><tr>
																				<td class="text-muted min-w-125px w-125px">Billing address</td>
																				<td class="text-gray-800">AU</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Phone</td>
																				<td class="text-gray-800">No phone provided</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Email</td>
																				<td class="text-gray-800">
																					<a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
																				</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Origin</td>
																				<td class="text-gray-800">Australia
																				<div class="symbol symbol-20px symbol-circle ms-2">
																					<img src="assets/media/flags/australia.svg">
																				</div></td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">CVC check</td>
																				<td class="text-gray-800">Passed
																				<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
																				<span class="svg-icon svg-icon-2 svg-icon-success">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																						<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon--></td>
																			</tr>
																		</tbody></table>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Details-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Option-->
														<div class="separator separator-dashed"></div>
														<!--begin::Option-->
														<div class="py-0" data-kt-customer-payment-method="row">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_2" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_2">
																	<!--begin::Arrow-->
																	<div class="me-3 rotate-90">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Arrow-->
																	<!--begin::Logo-->
																	<img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="">
																	<!--end::Logo-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center">
																			<div class="text-gray-800 fw-bolder">Visa</div>
																		</div>
																		<div class="text-muted">Expires Feb 2022</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Toolbar-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Edit-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																		<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Edit-->
																	<!--begin::Delete-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="" data-kt-customer-payment-method="delete" data-bs-original-title="Delete">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--end::Delete-->
																	<!--begin::More-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-original-title="More Options">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																	<!--end::More-->
																</div>
																<!--end::Toolbar-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_customer_view_payment_method_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
																<!--begin::Details-->
																<div class="d-flex flex-wrap py-5">
																	<!--begin::Col-->
																	<div class="flex-equal me-5">
																		<table class="table table-flush fw-bold gy-1">
																			<tbody><tr>
																				<td class="text-muted min-w-125px w-125px">Name</td>
																				<td class="text-gray-800">Melody Macy</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Number</td>
																				<td class="text-gray-800">**** 5235</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Expires</td>
																				<td class="text-gray-800">02/2022</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Type</td>
																				<td class="text-gray-800">Visa credit card</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Issuer</td>
																				<td class="text-gray-800">ENBANK</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">ID</td>
																				<td class="text-gray-800">id_w2r84jdy723</td>
																			</tr>
																		</tbody></table>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="flex-equal">
																		<table class="table table-flush fw-bold gy-1">
																			<tbody><tr>
																				<td class="text-muted min-w-125px w-125px">Billing address</td>
																				<td class="text-gray-800">UK</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Phone</td>
																				<td class="text-gray-800">No phone provided</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Email</td>
																				<td class="text-gray-800">
																					<a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
																				</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Origin</td>
																				<td class="text-gray-800">United Kingdom
																				<div class="symbol symbol-20px symbol-circle ms-2">
																					<img src="assets/media/flags/united-kingdom.svg">
																				</div></td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">CVC check</td>
																				<td class="text-gray-800">Passed
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
																				<span class="svg-icon svg-icon-2 svg-icon-success">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
																						<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
																					</svg>
																				</span>
																				<!--end::Svg Icon--></td>
																			</tr>
																		</tbody></table>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Details-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Option-->
														<div class="separator separator-dashed"></div>
														<!--begin::Option-->
														<div class="py-0" data-kt-customer-payment-method="row">
															<!--begin::Header-->
															<div class="py-3 d-flex flex-stack flex-wrap">
																<!--begin::Toggle-->
																<div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_customer_view_payment_method_3" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_3">
																	<!--begin::Arrow-->
																	<div class="me-3 rotate-90">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Arrow-->
																	<!--begin::Logo-->
																	<img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="">
																	<!--end::Logo-->
																	<!--begin::Summary-->
																	<div class="me-3">
																		<div class="d-flex align-items-center">
																			<div class="text-gray-800 fw-bolder">American Express</div>
																			<div class="badge badge-light-danger ms-5">Expired</div>
																		</div>
																		<div class="text-muted">Expires Aug 2021</div>
																	</div>
																	<!--end::Summary-->
																</div>
																<!--end::Toggle-->
																<!--begin::Toolbar-->
																<div class="d-flex my-3 ms-9">
																	<!--begin::Edit-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
																		<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit">
																			<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																			<span class="svg-icon svg-icon-3">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																					<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</a>
																	<!--end::Edit-->
																	<!--begin::Delete-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="" data-kt-customer-payment-method="delete" data-bs-original-title="Delete">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--end::Delete-->
																	<!--begin::More-->
																	<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-bs-toggle="tooltip" title="" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-original-title="More Options">
																		<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor"></path>
																				<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</a>
																	<!--begin::Menu-->
																	<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-150px py-3" data-kt-menu="true">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-kt-payment-mehtod-action="set_as_primary">Set as Primary</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu-->
																	<!--end::More-->
																</div>
																<!--end::Toolbar-->
															</div>
															<!--end::Header-->
															<!--begin::Body-->
															<div id="kt_customer_view_payment_method_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_customer_view_payment_method">
																<!--begin::Details-->
																<div class="d-flex flex-wrap py-5">
																	<!--begin::Col-->
																	<div class="flex-equal me-5">
																		<table class="table table-flush fw-bold gy-1">
																			<tbody><tr>
																				<td class="text-muted min-w-125px w-125px">Name</td>
																				<td class="text-gray-800">Max Smith</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Number</td>
																				<td class="text-gray-800">**** 5197</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Expires</td>
																				<td class="text-gray-800">08/2021</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Type</td>
																				<td class="text-gray-800">American express credit card</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Issuer</td>
																				<td class="text-gray-800">USABANK</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">ID</td>
																				<td class="text-gray-800">id_89457jcje63</td>
																			</tr>
																		</tbody></table>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="flex-equal">
																		<table class="table table-flush fw-bold gy-1">
																			<tbody><tr>
																				<td class="text-muted min-w-125px w-125px">Billing address</td>
																				<td class="text-gray-800">US</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Phone</td>
																				<td class="text-gray-800">No phone provided</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Email</td>
																				<td class="text-gray-800">
																					<a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
																				</td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">Origin</td>
																				<td class="text-gray-800">United States of America
																				<div class="symbol symbol-20px symbol-circle ms-2">
																					<img src="assets/media/flags/united-states.svg">
																				</div></td>
																			</tr>
																			<tr>
																				<td class="text-muted min-w-125px w-125px">CVC check</td>
																				<td class="text-gray-800">Failed
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																				<span class="svg-icon svg-icon-2 svg-icon-danger">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																						<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
																					</svg>
																				</span>
																				<!--end::Svg Icon--></td>
																			</tr>
																		</tbody></table>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Details-->
															</div>
															<!--end::Body-->
														</div>
														<!--end::Option-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</div>
											<!--end:::Tab pane-->
										</div>
										<!--end:::Tab content-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Layout-->
								<!--begin::Modals-->
								<!--begin::Modal - New Address-->
								<div class="modal fade" id="kt_modal_update_address" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_modal_update_address_form">
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_update_address_header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder">Update Address</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_update_address_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_address_header" data-kt-scroll-wrappers="#kt_modal_update_address_scroll" data-kt-scroll-offset="300px" style="">
														<!--begin::Billing toggle-->
														<div class="fw-bolder fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_update_address_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_address_billing_info">Shipping Information
														<span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span></div>
														<!--end::Billing toggle-->
														<!--begin::Billing form-->
														<div id="kt_modal_update_address_billing_info" class="collapse show">
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Address Line 1</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Address Line 2</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address2">
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">City / Town</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="row g-9 mb-7">
																<!--begin::Col-->
																<div class="col-md-6 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold mb-2 required">State / Province</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold mb-2 required">Post Code</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">
																	<span class="required">Country</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Country of origination" aria-label="Country of origination"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_update_address" class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-select2-id="select2-data-10-hjsh" tabindex="-1" aria-hidden="true">
																	<option value="">Select a Country...</option>
																	<option value="AF">Afghanistan</option>
																	<option value="AX">Aland Islands</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AG">Antigua and Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU" selected="selected" data-select2-id="select2-data-12-u3ao">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia, Plurinational State of</option>
																	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																	<option value="BA">Bosnia and Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BR">Brazil</option>
																	<option value="IO">British Indian Ocean Territory</option>
																	<option value="BN">Brunei Darussalam</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="CF">Central African Republic</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CX">Christmas Island</option>
																	<option value="CC">Cocos (Keeling) Islands</option>
																	<option value="CO">Colombia</option>
																	<option value="KM">Comoros</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="CI">Côte d'Ivoire</option>
																	<option value="HR">Croatia</option>
																	<option value="CU">Cuba</option>
																	<option value="CW">Curaçao</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FK">Falkland Islands (Malvinas)</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="PF">French Polynesia</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GG">Guernsey</option>
																	<option value="GN">Guinea</option>
																	<option value="GW">Guinea-Bissau</option>
																	<option value="HT">Haiti</option>
																	<option value="VA">Holy See (Vatican City State)</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IR">Iran, Islamic Republic of</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IM">Isle of Man</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JE">Jersey</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KI">Kiribati</option>
																	<option value="KP">Korea, Democratic People's Republic of</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Lao People's Democratic Republic</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macao</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia, Federated States of</option>
																	<option value="MD">Moldova, Republic of</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="MM">Myanmar</option>
																	<option value="NA">Namibia</option>
																	<option value="NR">Nauru</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NU">Niue</option>
																	<option value="NF">Norfolk Island</option>
																	<option value="MP">Northern Mariana Islands</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK">Pakistan</option>
																	<option value="PW">Palau</option>
																	<option value="PS">Palestinian Territory, Occupied</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russian Federation</option>
																	<option value="RW">Rwanda</option>
																	<option value="BL">Saint Barthélemy</option>
																	<option value="KN">Saint Kitts and Nevis</option>
																	<option value="LC">Saint Lucia</option>
																	<option value="MF">Saint Martin (French part)</option>
																	<option value="VC">Saint Vincent and the Grenadines</option>
																	<option value="WS">Samoa</option>
																	<option value="SM">San Marino</option>
																	<option value="ST">Sao Tome and Principe</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SL">Sierra Leone</option>
																	<option value="SG">Singapore</option>
																	<option value="SX">Sint Maarten (Dutch part)</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="SB">Solomon Islands</option>
																	<option value="SO">Somalia</option>
																	<option value="ZA">South Africa</option>
																	<option value="KR">South Korea</option>
																	<option value="SS">South Sudan</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="SD">Sudan</option>
																	<option value="SR">Suriname</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syrian Arab Republic</option>
																	<option value="TW">Taiwan, Province of China</option>
																	<option value="TJ">Tajikistan</option>
																	<option value="TZ">Tanzania, United Republic of</option>
																	<option value="TH">Thailand</option>
																	<option value="TG">Togo</option>
																	<option value="TK">Tokelau</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad and Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks and Caicos Islands</option>
																	<option value="TV">Tuvalu</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom</option>
																	<option value="US">United States</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VE">Venezuela, Bolivarian Republic of</option>
																	<option value="VN">Vietnam</option>
																	<option value="VI">Virgin Islands</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-yert" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bolder" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-nh-container" aria-controls="select2-country-nh-container"><span class="select2-selection__rendered" id="select2-country-nh-container" role="textbox" aria-readonly="true" title="Australia">Australia</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack">
																	<!--begin::Label-->
																	<div class="me-5">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold">Use as a billing address?</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_update_address_billing" checked="checked">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<span class="form-check-label fw-bold text-muted" for="kt_modal_update_address_billing">Yes</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
																<!--begin::Wrapper-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Billing form-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_update_address_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" id="kt_modal_update_address_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											<div></div></form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Address-->
								<!--begin::Modal - Update password-->
								<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update Password</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_update_password_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
													<!--begin::Input group=-->
													<div class="fv-row mb-10 fv-plugins-icon-container">
														<label class="required form-label fs-6 mb-2">Current Password</label>
														<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group=-->
													<!--begin::Input group-->
													<div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
														<!--begin::Wrapper-->
														<div class="mb-1">
															<!--begin::Label-->
															<label class="form-label fw-bold fs-6 mb-2">New Password</label>
															<!--end::Label-->
															<!--begin::Input wrapper-->
															<div class="position-relative mb-3">
																<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off">
																<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																	<i class="bi bi-eye-slash fs-2"></i>
																	<i class="bi bi-eye fs-2 d-none"></i>
																</span>
															</div>
															<!--end::Input wrapper-->
															<!--begin::Meter-->
															<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
																<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
																<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
															</div>
															<!--end::Meter-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Hint-->
														<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
														<!--end::Hint-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group=-->
													<!--begin::Input group=-->
													<div class="fv-row mb-10 fv-plugins-icon-container">
														<label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
														<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group=-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												<div></div></form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Update password-->
								<!--begin::Modal - Update email-->
								<div class="modal fade" id="kt_modal_update_phone" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update Phone Number</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form id="kt_modal_update_phone_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
													<!--begin::Notice-->
													<!--begin::Notice-->
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
														<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1">
															<!--begin::Content-->
															<div class="fw-bold">
																<div class="fs-6 text-gray-700">Please note that a valid phone number may be required for order or shipping rescheduling.</div>
															</div>
															<!--end::Content-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Notice-->
													<!--end::Notice-->
													<!--begin::Input group-->
													<div class="fv-row mb-7 fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Phone</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input class="form-control form-control-solid" placeholder="" name="profile_phone" value="+6141 234 567">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												<div></div></form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Update email-->
								<!--begin::Modal - New Address-->
								<div class="modal fade" id="kt_modal_add_address" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											<form class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#" id="kt_modal_add_address_form">
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_add_address_header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder">Add New Address</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_modal_add_address_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_address_header" data-kt-scroll-wrappers="#kt_modal_add_address_scroll" data-kt-scroll-offset="300px" style="">
														<!--begin::Billing toggle-->
														<div class="fw-bolder fs-3 rotate collapsible collapsed mb-7" data-bs-toggle="collapse" href="#kt_modal_add_address_billing_info" role="button" aria-expanded="false" aria-controls="kt_modal_add_address_billing_info">Shipping Information
														<span class="ms-2 rotate-180">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span></div>
														<!--end::Billing toggle-->
														<!--begin::Billing form-->
														<div id="kt_modal_add_address_billing_info" class="collapse show">
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Address Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="name" value="">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Address Line 1</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address1" value="">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Address Line 2</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address2">
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">City / Town</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="city" value="">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="row g-9 mb-7">
																<!--begin::Col-->
																<div class="col-md-6 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold mb-2 required">State / Province</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="state" value="">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row fv-plugins-icon-container">
																	<!--begin::Label-->
																	<label class="fs-6 fw-bold mb-2 required">Post Code</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="postcode" value="">
																	<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div></div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">
																	<span class="required">Country</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Country of origination" aria-label="Country of origination"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_add_address" class="form-select form-select-solid fw-bolder select2-hidden-accessible" data-select2-id="select2-data-13-szrl" tabindex="-1" aria-hidden="true">
																	<option value="" data-select2-id="select2-data-15-bs8l">Select a Country...</option>
																	<option value="AF">Afghanistan</option>
																	<option value="AX">Aland Islands</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AG">Antigua and Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia, Plurinational State of</option>
																	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																	<option value="BA">Bosnia and Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BR">Brazil</option>
																	<option value="IO">British Indian Ocean Territory</option>
																	<option value="BN">Brunei Darussalam</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="CF">Central African Republic</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CX">Christmas Island</option>
																	<option value="CC">Cocos (Keeling) Islands</option>
																	<option value="CO">Colombia</option>
																	<option value="KM">Comoros</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="CI">Côte d'Ivoire</option>
																	<option value="HR">Croatia</option>
																	<option value="CU">Cuba</option>
																	<option value="CW">Curaçao</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FK">Falkland Islands (Malvinas)</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="PF">French Polynesia</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GG">Guernsey</option>
																	<option value="GN">Guinea</option>
																	<option value="GW">Guinea-Bissau</option>
																	<option value="HT">Haiti</option>
																	<option value="VA">Holy See (Vatican City State)</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IR">Iran, Islamic Republic of</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IM">Isle of Man</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JE">Jersey</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KI">Kiribati</option>
																	<option value="KP">Korea, Democratic People's Republic of</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Lao People's Democratic Republic</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macao</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia, Federated States of</option>
																	<option value="MD">Moldova, Republic of</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="MM">Myanmar</option>
																	<option value="NA">Namibia</option>
																	<option value="NR">Nauru</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NU">Niue</option>
																	<option value="NF">Norfolk Island</option>
																	<option value="MP">Northern Mariana Islands</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK">Pakistan</option>
																	<option value="PW">Palau</option>
																	<option value="PS">Palestinian Territory, Occupied</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russian Federation</option>
																	<option value="RW">Rwanda</option>
																	<option value="BL">Saint Barthélemy</option>
																	<option value="KN">Saint Kitts and Nevis</option>
																	<option value="LC">Saint Lucia</option>
																	<option value="MF">Saint Martin (French part)</option>
																	<option value="VC">Saint Vincent and the Grenadines</option>
																	<option value="WS">Samoa</option>
																	<option value="SM">San Marino</option>
																	<option value="ST">Sao Tome and Principe</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SL">Sierra Leone</option>
																	<option value="SG">Singapore</option>
																	<option value="SX">Sint Maarten (Dutch part)</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="SB">Solomon Islands</option>
																	<option value="SO">Somalia</option>
																	<option value="ZA">South Africa</option>
																	<option value="KR">South Korea</option>
																	<option value="SS">South Sudan</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="SD">Sudan</option>
																	<option value="SR">Suriname</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syrian Arab Republic</option>
																	<option value="TW">Taiwan, Province of China</option>
																	<option value="TJ">Tajikistan</option>
																	<option value="TZ">Tanzania, United Republic of</option>
																	<option value="TH">Thailand</option>
																	<option value="TG">Togo</option>
																	<option value="TK">Tokelau</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad and Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks and Caicos Islands</option>
																	<option value="TV">Tuvalu</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom</option>
																	<option value="US">United States</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VE">Venezuela, Bolivarian Republic of</option>
																	<option value="VN">Vietnam</option>
																	<option value="VI">Virgin Islands</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-mvp1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid fw-bolder" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-qf-container" aria-controls="select2-country-qf-container"><span class="select2-selection__rendered" id="select2-country-qf-container" role="textbox" aria-readonly="true" title="Select a Country..."><span class="select2-selection__placeholder">Select a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="fv-row mb-7">
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack">
																	<!--begin::Label-->
																	<div class="me-5">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold">Use as a billing address?</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_address_billing" checked="checked">
																		<!--end::Input-->
																		<!--begin::Label-->
																		<span class="form-check-label fw-bold text-muted" for="kt_modal_add_address_billing">Yes</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
																<!--begin::Wrapper-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Billing form-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_address_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" id="kt_modal_add_address_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											<div></div></form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Address-->
								<!--begin::Modal - Add task-->
								<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Add Authenticator App</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Content-->
												<div class="fw-bolder d-flex flex-column justify-content-center mb-5">
													<!--begin::Label-->
													<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the
													<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
													<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the
													<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
													<!--end::Label-->
													<!--begin::QR code-->
													<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
														<img src="assets/media/misc/qr.png" alt="Scan this QR code">
													</div>
													<!--end::QR code-->
													<!--begin::Text code-->
													<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
														<div class="fs-1">gi2kdnb54is709j</div>
													</div>
													<!--end::Text code-->
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<div class="d-flex flex-center">
													<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
													<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Add task-->
								<!--begin::Modal - Add task-->
								<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Modal header-->
											<div class="modal-header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Enable One Time Password</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
												<!--begin::Form-->
												<form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="kt_modal_add_one_time_password_form">
													<!--begin::Label-->
													<div class="fw-bolder mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
													<!--end::Label-->
													<!--begin::Input group-->
													<div class="fv-row mb-7 fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Mobile number</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="A valid mobile number is required to receive the one-time password to validate your account login." aria-label="A valid mobile number is required to receive the one-time password to validate your account login."></i>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->
													<!--begin::Separator-->
													<div class="separator saperator-dashed my-5"></div>
													<!--end::Separator-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Email</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly">
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7 fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mb-2">
															<span class="required">Confirm password</span>
														</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="">
														<!--end::Input-->
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="text-center pt-15">
														<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
														<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
															<span class="indicator-label">Submit</span>
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
													</div>
													<!--end::Actions-->
												<div></div></form>
												<!--end::Form-->
											</div>
											<!--end::Modal body-->
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Add task-->
								<!--end::Modals-->
							</div>
							<!--end::Container-->
						</div>
        <!--end::Post-->
    </div>

    





@push('csses')

	<link href="{{asset('backend/dist')}}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
 
@endpush

@push('scripts')


		<script src="{{asset('backend/dist')}}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
  		<script src="{{asset('backend/dist')}}/assets/js/custom/apps/ecommerce/customers/listing/listing.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/apps/ecommerce/customers/listing/add.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/apps/ecommerce/customers/listing/export.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/widgets.bundle.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/widgets.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/apps/chat/chat.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="{{asset('backend/dist')}}/assets/js/custom/utilities/modals/users-search.js"></script
@endpush
</x-backend.layouts.master>

