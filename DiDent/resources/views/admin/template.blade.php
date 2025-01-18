<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DiDent @yield('title','Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/sass.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/layets.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Merienda:wght@500;700;800&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
    

    @yield('styles')
    

</head>
  <body>
    <div class="main-wrapper">
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm expand-header">
                <div class="header-left d-flex">
                    <div class="logo">
                        DiDent
                    </div>
                    <a href="#" class="sidebarCollapse" id="toogleSidebar" data-placement="bottom">
                        <span class="fas fa-bars"></span>
                    </a>
                </div>
                <ul class="navbar-item flex-row ml-auto">
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notify" data-bs-toggle="dropdown">
                            <img src="{{asset('assets/img/bell.png')}}" alt="" class="icon">
                            <p class="count purple-gradient">5</p>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="" class="dropdown-item message-item">
                                    <img src="{{asset('assets//img/server-icon.svg')}}" alt="" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Server Rebooted</p>
                                            <p class="note-time">20min ago</p>

                                        </div>
                                        <p class="status-link"><span class="fas fa-times purple-gradient"></span></p>
                                    </div>
                                </a>
                                <a href="" class="dropdown-item message-item">
                                    <img src="assets//img/server-icon.svg" alt="" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Server Rebooted</p>
                                            <p class="note-time">20min ago</p>

                                        </div>
                                        <p class="status-link"><span class="fas fa-times purple-gradient"></span></p>
                                    </div>
                                </a>
                                <a href="" class="dropdown-item message-item">
                                    <img src="assets//img/server-icon.svg" alt="" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Server Rebooted</p>
                                            <p class="note-time">20min ago</p>

                                        </div>
                                        <p class="status-link"><span class="fas fa-times purple-gradient"></span></p>
                                    </div>
                                </a>
                                <a href="" class="dropdown-item message-item">
                                    <img src="assets//img/server-icon.svg" alt="" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Server Rebooted</p>
                                            <p class="note-time">20min ago</p>

                                        </div>
                                        <p class="status-link"><span class="fas fa-times purple-gradient"></span></p>
                                    </div>
                                </a>
                                <a href="" class="dropdown-item message-item">
                                    <img src="assets//img/server-icon.svg" alt="" class="user-note">
                                    <div class="note-info-desmis">
                                        <div class="user-notify-info">
                                            <p class="note-name">Server Rebooted</p>
                                            <p class="note-time">20min ago</p>

                                        </div>
                                        <p class="status-link"><span class="fas fa-times purple-gradient"></span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                   
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notify" data-bs-toggle="dropdown">
                            <img src="{{asset('assets/img/email.png')}}" alt="" class="icon">
                            <p class="count bg-clc">5</p>
                        </a>
                        <div class="dropdown-menu">
                        <div class="dp-main-menu">
                            <a href="" class="dropdown-item message-item">
                                <img src="assets/img/user1.jpg" class="sms-user">
                                    <div class="user-message-info">
                                        <p class="m-user-name">message Rebooted</p>
                                        <p class="user-role">Super admin</p>
                                    </div>
                            </a>
                            <a href="" class="dropdown-item message-item">
                                <img src="assets/img/user2.jpg" class="sms-user">
                                    <div class="user-message-info">
                                        <p class="m-user-name">message Rebooted</p>
                                        <p class="user-role">Super admin</p>
                                    </div>
                            </a>
                            <a href="" class="dropdown-item message-item">
                                <img src="assets/img/user1.jpg" class="sms-user">
                                    <div class="user-message-info">
                                        <p class="m-user-name">message Rebooted</p>
                                        <p class="user-role">Super admin</p>
                                    </div>
                            </a>
                        </div>    
                        </div>

                    </li>
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notify" data-bs-toggle="dropdown">
                            <img src="{{asset('assets/img/profile.png')}}" alt="" class="icon">
                            
                        </a>
                        <div class="dropdown-menu">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="{{asset('assets/image/profile.png')}}" alt="" class="img-fluid mr-2">
                                    <div class="media-body">
                                        <h5>{{Auth::user()->name}}</h5>
                                        <p>super admin</p>
                                    </div>
                                </div>
                                <div class="dp-main-menu">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item"><span class="fas fa-user"></span>Profile</a>
                                    <a href="" class="dropdown-item"><span class="fas fa-inbox"></span>Inbox</a>
                                    <a href="" class="dropdown-item"><span class="fas fa-lock-open"></span>Look</a>
                                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('logout') }}" class="mt-0">
                        @csrf
                        <button type="submit" class="dropdown-item"><span class="fas fa-outdent"></span>Logout</button>
                    </form>


                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="{{route('admin.setting')}}" class="nav-link user" id="Notify">
                            <img src="{{asset('assets/img/settings.png')}}" alt="" class="icon">
                            
                        </a>
                    
                    </li>
                </ul>
            </header>
        </div>

        <!-- navbar end -->

        <!-- sider start -->

        <div class="left-menu">
            <div class="menubar-content">
                <nav class="animated bounceInDown">
                    <ul id="sidebar">
                        <li class="active">
                            <a href="{{route('dashboard')}}" class="fs-4"><i class="fas fa-home px-2"></i>Dashboard</a>
                        </li>
                        <li class="sub-menu">
                            <a onclick="show_hide('contact-list1', 'contact-caret')" href="#">
                                About
                                <div id="contact-caret" class="fa fa-caret-down right px-2"></div>
                            </a>
                            <ul class="left-menu-dp1" id="contact-list1" style="display: none;">
                                <li><a href="{{route('about.right.image')}}">About Right Image</a></li>
                                <li><a href="{{route('about.problem')}}">Problem</a></li>
                                <li><a href="{{route('dentail.cli')}}">Dentail Clinic</a></li>
                                <li><a href="{{route('about.experience')}}">Experience</a></li>
                                <li><a href="{{route('about.video')}}">Video</a></li>
                                <li><a href="{{route('about.best')}}">Our Best</a></li>
                                <li><a href="{{route('about.gallery.description')}}">Gallery Description</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="{{route('opening.time')}}">Opening Time</a>
                        </li>
                        <li class="sub-menu">
                            <a onclick="show_hide('testimonial-list', 'testimonial-caret')" href="#">
                                Testimonial
                                <div id="testimonial-caret" class="fa fa-caret-down right px-2"></div>
                            </a>
                            <ul class="left-menu-dp" id="testimonial-list" style="display: none;">
                                <li><a href="{{route('admin.testimonial')}}">Reviews</a></li>
                                <li><a href="{{route('admin.media.review')}}">Media Reviews</a></li>
                                <li><a href="{{route('reviews.add')}}">Add Reviews</a></li>
                                <li><a href="{{route('admin.make.better')}}">Make Better</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('recent.news')}}">Recent News</a>
                        </li>
                       <li class="sub-menu">
                        <a onclick="show_hide('service-list', 'service-caret')" href="#">
                            Service
                            <div id="service-caret" class="fa fa-caret-down right px-2"></div>
                        </a>
                        <ul class="left-menu-dp" id="service-list" style="display: none;">
                            <li><a href="{{route('admin.service')}}">Service</a></li>
                            <li><a href="{{route('admin.service.list')}}">Service List</a></li>
                            <li><a href="{{route('admin.service.offer')}}">Offer</a></li>
                            <li><a href="{{route('admin.service.specialist')}}">Specialists</a></li>
                            <li><a href="{{route('admin.service.offer.list')}}">Specialist Offer</a></li>
                        </ul>
                    </li>
                        
                        <li>
                            <a href="{{route('admin.social.media')}}"></i>Socail Media</a>
                        </li>
                        <li>
                            <a href="{{route('admin.certificate.association')}}"></i>Certificates & Associations</a>
                        </li>
                        <li class="sub-menu">
                            <a onclick="show_hide('settings-list', 'settings-caret')" href="#">
                               Settings
                                <div id="settings-caret" class="fa fa-caret-down right px-2"></div>
                            </a>
                            <ul class="left-menu-dp" id="settings-list" style="display: none;">
                                <li><a href=""><i class="fas fa-user-circle"></i>Account</a></li>
                                <li><a href="{{ route('profile.edit') }}"><i class="fas fa-id-card"></i>Profile</a></li>
                                <li><a href=""><i class="fas fa-fingerprint"></i>Security & Privacy</a></li>
                                <li><a href=""><i class="fas fa-key"></i>Password</a></li>
                                <li><a href=""><i class="fas fa-bill"></i>Notification</a></li>
                                <li>
                                <form method="POST" action="{{ route('logout') }}" class="mt-0">
                        @csrf
                        <button type="submit" class="dropdown-item"><span class="fas fa-outdent"></span>Logout</button>
                    </form>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sub-menu">
                            <a onclick="show_hide('contact-list', 'contact-caret')" href="#">
                                Contact
                                <div id="contact-caret" class="fa fa-caret-down right px-2"></div>
                            </a>
                            <ul class="left-menu-dp" id="contact-list" style="display: none;">
                                <li><a href="{{route('user.contact')}}"></i>User Contact</a></li>
                                <li><a href="{{route('opening.hour')}}">Opening Day</a></li>
                                <li><a href="{{route('i.frame.index')}}"><i class="bi bi-pin-map-fill"></i>Google Map</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('admin.gallery')}}"></i>Gallery</a>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="content-wrapper">

        <!-- side bar end -->
       @yield('content')
    </div>
    </div>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     @yield('scripts')
</body>
</html>
