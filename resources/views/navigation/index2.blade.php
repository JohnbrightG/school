<!-- header-->
@include('layout.header')

<!-- nav-->
@include('layout.nav')

<div class="content dashboard-right-col">

<!-- top nav-->
@include('layout.top-nav')


<div class="container-fluid pt-4 px-4">
                
              <div class="page-content">
                <div class="container-fluid">

                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="{{ asset('assets/img/profile-bg.jpg') }}" class="profile-wid-img" alt="">
							 <div class="headings-top">
                              <h1>Create</h1>
							  <h4>{{$page_title}}</h4>
                              
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        
                        <!--end col-->
                        <div class="col-xxl-12">
                            <div class="card mt-xxl-n5">
                                
                                <div class="card-body p-4">
								
									<div class="row">
									
										<div class="col-lg-3">
											<div class="mb-3 mt-3">
													<div class="input-group has_append">
														<input type="text" name="search" class="form-control" id="search" placeholder="Search..." value="{{ $search ?? '' }}">
														<div class="input-group-append">
															<button class="btn btn--primary btn_search" type="submit"><i class="fa fa-search"></i></button>
														</div>
													</div>
											</div>
										</div>
										<div class="col-lg-6"><div class="mb-3 mt-3"></div></div>
										<div class="col-lg-3"><div class="mb-3 mt-3">
										<!--<button type="button" id="btn-create" class="btn btn-info">Filters</button>-->
										<a href="{{ route('navigation.create') }}"   class="btn btn-success">+ Add Navigation</a>
										</div>
										</div>
									</div>
								
											<table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="order_by  active_order"  data-column_name="id" data-id="asc" style="cursor:pointer;">ID </th>
                                                <th class="order_by "  data-column_name="name" data-id="asc" style="cursor:pointer;">Name</th>
                                                <th class="order_by "  data-column_name="parent" data-id="asc" style="cursor:pointer;">Parent</th>
                                                <th class="order_by "  data-column_name="order" data-id="asc" style="cursor:pointer;">Order</th>
                                                <th class="order_by "  data-column_name="status" data-id="asc" style="cursor:pointer;">Status</th>
												<th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        
										
											
                                        
										
														<tbody id="user_table">
				 @include('navigation.data')
			</tbody>
										
                                    </table>
                                        </div>
                                        

                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div>  
                
            </div>

        </div>
			
	</div>
			
			<!-- footer-->
			
			@include('layout.footer')
			@include('navigation.script')