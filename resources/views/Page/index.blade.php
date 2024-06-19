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
                              <h1>Pages</h1>
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
                                <div class="col-lg-3"><div class="mb-3 mt-3"></div></div>
                                <div class="col-lg-6"><div class="mb-3 mt-3"></div></div>
										<div class="col-lg-3"><div class="mb-3 mt-3 pullright">
										<!--<button type="button" id="btn-create" class="btn btn-info">Filters</button>-->
										
										</div>
										</div>
                                </div>
											<form id="updatenavigation" name="updatenavigation" class="form-horizontal" novalidate="">

                                            <form action="javascript:void(0);">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">  Title</label>
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$pages->name}}">
                                                        </div>
                                                    </div>
													
													<div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">  Description</label>
                                                        
														<textarea class="form-control" rows="5" id="description" name="description">{{$pages->description}}</textarea>
														
														</div>
                                                    </div>
                                                    
                                                    
													<input type="hidden"  name="id" value="{{$pages->id}}">

													
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" id="btn-update" class="btn btn-primary">Update</button>
                                                            <a href="{{ route('Pages.manage') }}" type="button" class="btn btn-danger">Cancel</a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
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
			@include('Page.script')
			