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
                              <h1>Navigation</h1>
							  <h4>{{$page_title}}</h4>
                              
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        
                        <!--end col-->
                        <div class="col-xxl-12">
                            <div class="card mt-xxl-n5">
                                <div class="card-header border-0">
									<div class="row">
									
										<div class="col-sm-3">
											<div class="search-box">
												<input type="text" class="form-control search" placeholder="Search for...">
												<i class="fas fa-search search-icon"></i>
											</div>
										</div>
										<div class="col-lg-6"><div class="mb-3 mt-3"></div></div>
										<div class="col-lg-3"><div class=" pullright">
										<!--<button type="button" id="btn-create" class="btn btn-info">Filters</button>-->
										<a href="{{ route('navigation.create') }}"   class="btn btn-success">+ Add Navigation</a>
										</div>
										</div>
									</div>
								</div>
                                <div class="card-body">
								
									
								
											
									
									<div>
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle" id="naviTable">
                                            <thead class="table-light">
                                                <tr>
                                                    
													
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Parent</th>
                                                    <th>Order</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                             
                                        </table>
                                        
                                    </div>
                                    
                                </div>
									
									
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
	
	
	<!-- Modal -->
              <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1"
                                    aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="btn-close"></button>
                                            </div>
                                            <div class="modal-body p-5 text-center">
                                                <i class="fas fa-trash-alt" style="font-size: 70px;"></i>
                                                <div class="mt-4 text-center">
                                                    <h4 class="fs-semibold">You are about to delete a Navigation ?</h4>
                                                    <p class="text-muted fs-14 mb-4 pt-1">Deleting your Navigation will remove
                                                        all of your information from our database.</p>
                                                    <div class="hstack gap-2 justify-content-center remove">
													<input type="hidden" name="delid" id="delid">
                                                        <button class="btn" id="deleteRecord-close"
                                                            data-bs-dismiss="modal"><i class="fas fa-times"></i>
                                                            Close</button>
                                                        <button class="btn" id="delete-record">Yes, Delete It!!</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
			
			<!-- footer-->
			
			@include('layout.footer')
			@include('navigation.script')