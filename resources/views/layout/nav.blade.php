

        <div class="sidebar">
            <nav class="navbar navbar-light navigation-vertical">
                <div class="navbar-nav w-100">
                 <a href="{{ route('dashboard') }}" style="text-align:center;color:#fff;font-weight:bold" class="navbar-brand mb-3">
                    SCHOOLS
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fas fa-times"></i>
                </a>
                <button class="btn primary-btn"><i class="fas fa-plus"></i> Create</button>
				
				
				
				
					@if (getParentnav())
						@foreach (getParentnav() as $navigation)
							@if (childNavCount($navigation->id) >= 1)
							<div class="nav-item dropdown">	
								
								
								<a href="#" class="nav-item nav-link dropdown-toggle @if (childNavshow(Route::currentRouteName(),$navigation->id) == 1)active @endif" data-bs-toggle="dropdown">{!! $navigation->icon !!} {{$navigation->name}}</a>
								
								
								<div class="dropdown-menu bg-transparent border-0 @if(showNav(Route::currentRouteName(),$navigation->id) == 1 ) show @endif">
									@if (getchildnav($navigation->id))
										@foreach (getchildnav($navigation->id) as $navigation)
									
											@if(Route::has($navigation->href))
												<a href="{{ route($navigation->href) }}" class="dropdown-item @if(showNavName(Route::currentRouteName()) == $navigation->href ) active @endif">{!! $navigation->icon !!} {{$navigation->name}}</a>
											@else
												<a href="#" class="dropdown-item ">{!! $navigation->icon !!} {{$navigation->name}}</a>

										    @endif
										@endforeach
									@endif
								</div>
							</div>
							@else
								@if(Route::has($navigation->href))
									<a href="{{ route($navigation->href) }}" class="nav-item nav-link @if ($navigation->href == Route::currentRouteName()) active @endif">{!! $navigation->icon !!} {{$navigation->name}}</a>
								@else
									<a href="#" class="nav-item nav-link ">{!! $navigation->icon !!} {{$navigation->name}}</a>

								@endif
							@endif
						@endforeach
					@endif
					</div>
					 <div class="navbar-nav w-100 bottom-nav">
						
						<div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-menu bg-transparent border-0">
							<a href="{{ route('navigation.manage') }}" class="dropdown-item"><i class="fas fa-bars"></i> Navigation</a>
                           
                            
                            
                        </div>
                    </div>
					
					
						
						
							<a href="{{ route('logout', base64_encode(Auth::user()->id)) }}" class="nav-item nav-link "><i class="fas fa-sign-out-alt"></i> Logout</a>
						
					
					</div>
			</nav>
        </div>

