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
                                
                                <div class="card-body p-4">
                                <div class="row">
                                <div class="col-lg-3"><div class="mb-3 mt-3"></div></div>
                                <div class="col-lg-6"><div class="mb-3 mt-3"></div></div>
										<div class="col-lg-3"><div class="mb-3 mt-3 pullright">
										<!--<button type="button" id="btn-create" class="btn btn-info">Filters</button>-->
										<a href="{{ route('navigation.manage') }}"   class="btn btn-success">+ Manage Navigation</a>
										</div>
										</div>
                                </div>
											<form id="updatenavigation" name="updatenavigation" class="form-horizontal" novalidate="">

                                            <form action="javascript:void(0);">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">  Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$navigations->name}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                       <div class="mb-3">
                                                            <label for="icon" class="form-label">  Icon</label>
                                                            <input type="text" class="form-control" id="icon" placeholder="Icon" name="icon" value="{{$navigations->icon}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="parent" class="form-label">Parent </label>
                                                        
															<select class="parent form-control" name="parent" id="parent">
																<option value="0">Parent</option>
																@if ($parents)
																	@foreach ($parents as $parent)
																		<option value="{{$parent->id}}" @if($parent->id == $navigations->parent) selected="selected" @endif >{{$parent->name}}</option>
																	@endforeach
																@endif
															</select>
														
														</div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="order" class="form-label"> Order</label>
                                                            <input type="number" class="form-control" id="order"   name="order" placeholder="Order" value="{{$navigations->order}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="href" class="form-label"> Href</label>
                                                            <input type="text" class="form-control" id="href" placeholder="Href" name="href" value="{{$navigations->href}}">
                                                        </div>
                                                    </div>
                                                    
													
													
													
													<div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="status_1" class="form-label">status</label>
                                                            
															
															<select class="form-control" data-choices="" data-choices-search-false="" name="status" id="status_1">
                                                                   <option value="0" >Select status</option>
                                                                   <option value="1" @if(1 == $navigations->status) selected="selected" @endif>Active</option>
                                                                   <option value="2" @if(2 == $navigations->status) selected="selected" @endif>Inactive</option>
															</select>
															
															
                                                        </div>
                                                    </div>
                                                    
                                                    
													<input type="hidden"  name="id" value="{{$navigations->id}}">

													
                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" id="btn-update" class="btn btn-primary">Update</button>
                                                            <a href="{{ route('navigation.manage') }}" type="button" class="btn btn-danger">Cancel</a>
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
			@include('navigation.script')