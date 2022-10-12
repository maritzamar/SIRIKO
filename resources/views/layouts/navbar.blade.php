<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="/dashboards" class="header-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo">
                    <h5 class="logo-title ml-3">SIRIKO PDAM</h5>

                </a>
              
            </div>
            <div class="align-items-center justify-content-between">
                <h3> Sistem Inventaris Komputer </h3>
            </div>
           
            <div class="align-items-center justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-expand-sm navbar-list align-items-center">
                                
                                <li class="nav-item nav-icon  caption-content ">
                                    <a href="" class="search-toggle" id="dropdownMenuButton4"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/images/user/1.png') }}" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="p-card shadow-none m-0">
                                            <div class="p-card-body p-0 text-center">
                                                <div class="media-body profile-detail text-center">
                                                    <img src="{{ asset('assets/images/user/1.png') }}" alt="profile-img"
                                                        class="rounded profile-img img-fluid avatar-70">
                                                </div>
                                                <div class="p-3">
                                                    <h5 class="mb-1">{{ auth()->user()->name }}</h5>
                                                    <p class="mb-0">ADMIN</p>
                                                    <form action="/logout" method='post'>
                                                        @csrf
                                                        <div class="align-items-center justify-content-center mt-3">
                                                            <button type="submit" class="btn border">Logout</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </nav>
    </div>
</div>