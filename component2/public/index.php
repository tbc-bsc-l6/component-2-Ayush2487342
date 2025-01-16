
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Laravel Navbar</title>
       <!-- Include Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
           <div class="container-fluid">
               <a class="navbar-brand" href="{{ url('/') }}">MyApp</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                   <ul class="navbar-nav ms-auto">
                       <li class="nav-item">
                           <a class="nav-link" href="{{ url('/') }}">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ url('/about') }}">About</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                       </li>
                       @guest
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}">Login</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('register') }}">Register</a>
                           </li>
                       @else
                           <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   {{ Auth::user()->name }}
                               </a>
                               <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                                   <li>
                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           @csrf
                                       </form>
                                   </li>
                               </ul>
                           </li>
                       @endguest
                   </ul>
               </div>
           </div>
       </nav>
   
       <!-- Include Bootstrap JS -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   </body>
   </html>
   <?php
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

?>
 