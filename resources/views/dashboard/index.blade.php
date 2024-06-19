<!-- header-->
@include('layout.header')

<!-- nav-->
@include('layout.nav')

<div class="content dashboard-right-col">

<!-- top nav-->
@include('layout.top-nav')


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4 content-box">
                            <div class="d-flex align-items-center justify-content-between mb-4 top-headings border-bottom">
                                <h6 class="mb-0">Profit & Loss</h6>
                                <div class="top-headings-right">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">menu</a>
                                        <a href="#" class="dropdown-item">menu</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <h6 class="text-start">Net Income: $100,458.11</h6>
                            <canvas id="profile-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4 content-box">
                            <div class="d-flex align-items-center justify-content-between mb-4 top-headings border-bottom">
                                <h6 class="mb-0">Recent Payments Received</h6>
                                <div class="top-headings-right">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">menu</a>
                                        <a href="#" class="dropdown-item">menu</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2 recent-payments">
                                <i class="fas fa-hand-holding-usd"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <p>Maria Burman <span>2 Days | 15 Man Streer - 6A</span></p>
                                        <span class="green-txt">+ $1,500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2 recent-payments">
                                <i class="fas fa-hand-holding-usd"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <p>Maria Burman <span>2 Days | 15 Man Streer - 6A</span></p>
                                        <span class="green-txt">+ $1,500.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2 recent-payments">
                                <i class="fas fa-hand-holding-usd"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <p>Maria Burman <span>2 Days | 15 Man Streer - 6A</span></p>
                                        <span class="green-txt">+ $1,500.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="container-fluid pt-4 pb-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4 content-box">
                            <div class="d-flex align-items-center justify-content-between mb-4 top-headings border-bottom">
                                <h6 class="mb-0">Recent Tenant Requests</h6>
                                <div class="top-headings-right">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">menu</a>
                                        <a href="#" class="dropdown-item">menu</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2 recent-payments">
                                <i class="fas fa-tasks"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <p>Maria Burman <span>2 Days | 15 Man Streer - 6A</span></p>
                                        <span class="warning-sign"><i class="fas fa-exclamation-circle"></i> Overdue</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2 recent-payments">
                                <i class="fas fa-tasks"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <p>Maria Burman <span>2 Days | 15 Man Streer - 6A</span></p>
                                        <span class="warning-sign"><i class="fas fa-times-circle"></i> Not Started</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2 recent-payments">
                                <i class="fas fa-tasks"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <p>Maria Burman <span>2 Days | 15 Man Streer - 6A</span></p>
                                        <span class="warning-sign"><i class="fas fa-clock"></i> In Progress</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4 content-box">
                            <div class="d-flex align-items-center justify-content-between mb-4 top-headings border-bottom">
                                <h6 class="mb-0">Unpaid Rent</h6>
                                <div class="top-headings-right">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">menu</a>
                                        <a href="#" class="dropdown-item">menu</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <h6 class="text-start">Total: $30,458.11</h6>
                            <canvas id="rent"></canvas>
                        </div>
                    </div>
                </div>
            </div>
			
			 <div class="container-fluid pt-4 pb-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4 content-box">
                            <div class="d-flex align-items-center justify-content-between mb-4 top-headings border-bottom">
                                <h6 class="mb-0">Rental Applications</h6>
                                <div class="top-headings-right">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">menu</a>
                                        <a href="#" class="dropdown-item">menu</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <h6 class="text-start">Total: 1,112</h6>
                            <canvas id="pie-chart"></canvas>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4 content-box">
                            <div class="d-flex align-items-center justify-content-between mb-4 top-headings border-bottom">
                                <h6 class="mb-0">Occupacy Rate</h6>
                                <div class="top-headings-right">
                                <a href=""><i class="fas fa-sync-alt"></i></a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-h"></i>            
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                        <a href="#" class="dropdown-item">menu</a>
                                        <a href="#" class="dropdown-item">menu</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <canvas id="doughnut-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
			
			</div>
			
			<!-- footer-->
			
			@include('layout.footer')
