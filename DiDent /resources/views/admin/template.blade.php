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
            <div class="logo">DiDent</div>
            <a href="#" class="sidebarCollapse" id="toogleSidebar" data-placement="bottom">
              <span class="fas fa-bars"></span>
            </a>
          </div>
          <ul class="navbar-item flex-row ml-auto">
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
                <a href="{{route('dashboard')}}" class="fs-4">
                  <i class="fas fa-home px-2"></i>Dashboard
                </a>
              </li>
              <li><a href="{{route('about.right.image')}}"><i class="fas fa-image px-2"></i>About Right Image</a></li>
              <li><a href="{{route('about.problem')}}"><i class="fas fa-exclamation-circle px-2"></i>Problem</a></li>
              <li><a href="{{route('dentail.cli')}}"><i class="fas fa-clinic-medical px-2"></i>Dental Clinic</a></li>
              <li><a href="{{route('about.video')}}"><i class="fas fa-video px-2"></i>Video</a></li>
              <li><a href="{{route('about.best')}}"><i class="fas fa-star px-2"></i>Our Best</a></li>
              <li><a href="{{route('about.gallery.description')}}"><i class="fas fa-images px-2"></i>Gallery Description</a></li>
              <li><a href="{{route('opening.time')}}"><i class="fas fa-clock px-2"></i>Opening Time</a></li>
              <li><a href="{{route('recent.news')}}"><i class="fas fa-newspaper px-2"></i>Recent News</a></li>
              <li><a href="{{route('admin.social.media')}}"><i class="fas fa-share-alt px-2"></i>Social Media</a></li>
              <li><a href="{{route('admin.certificate.association')}}"><i class="fas fa-certificate px-2"></i>Certificates & Associations</a></li>
              <li><a href="{{route('user.contact')}}"><i class="fas fa-envelope px-2"></i>User Contact</a></li>
              <li><a href="{{route('opening.hour')}}"><i class="fas fa-calendar px-2"></i>Opening Day</a></li>
              <li><a href="{{route('i.frame.index')}}"><i class="bi bi-pin-map-fill px-2"></i>Google Map</a></li>
              <li><a href="{{ route('profile.edit') }}" class="dropdown-item">
                <i class="fas fa-user px-2"></i>Profile</a>
              </li>
              <li>
                <form method="POST" action="{{ route('logout') }}" class="mt-0">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="fas fa-outdent px-2"></i>Logout
                  </button>
                </form>
              </li>
              <li><a href="#"><i class="fas fa-border-style px-2"></i>Margin</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- side bar end -->

      <div class="content-wrapper">
        @yield('content')
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
  </body>
</html>
