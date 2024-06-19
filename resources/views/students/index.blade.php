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
                              <h1>Student</h1>
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
                                                    <th>Class</th>
                                                    <th>Subject</th>
													<th>Total Mark in all semster</th>
                                                    
                                                    
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
	
	
	
			
			<!-- footer-->
			
			@include('layout.footer')
			@include('students.script')