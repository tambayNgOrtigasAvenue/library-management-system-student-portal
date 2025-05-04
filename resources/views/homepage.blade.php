<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Home Page - QCU LMS</title>
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    @include('layouts.header')
</head>

    <body>
    @include('layouts.nav')

        <div class="sec" id="sec">
        <section class="text-center position-relative vh-100 w-100 p-0 m-0" style="overflow: hidden;">
        <img src="{{ asset('img/qcu_library.png') }}" id="homepage" alt="QCU Library" style="width: 100vw; height: 100vh; object-fit: cover; filter: brightness(50%);">
        <div class="position-absolute w-100 text-center" style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;">
            <h2 class="text-white" style="font-size: 7rem; font-weight: bold;">
                QCU Library Management System
            </h2>
            <a href="https://maps.app.goo.gl/2vzsFHxe95cbiea18"  class="btn btn-primary mt-3 rounded-pill font-weight-bold">
                Navigate QCU Libraries
            </a>
        </div>
    </section>

            <h2 class="text-center mt-5 text-white">OUR LIBRARY SERVICES</h2>
            <div class="container mb-5">
                <div class="box bi bi-journals">
                    <h3>Book Collection</h3>
                </div>

                <div class="box bi bi-journal-arrow-down">
                    <h3>E-Books</h3>
                </div>

                <div class="box bi bi-file-earmark-ruled">
                    <h3>Research Assistance</h3>
                </div>

                <div class="box bi bi-person-workspace" >
                    <h3>Study Spaces</h3>
                </div>

                <div class="box bi bi-pc-display-horizontal" >
                    <h3>Computer Access</h3>
                </div>

                <div class="box bi bi-printer" >
                    <h3>Printing Services</h3>
                </div>

                <div class="box bi bi-people" >
                    <h3>Group Study Rooms</h3>
                </div>

                <div class="box bi bi-folder-symlink">
                    <h3>Reference Materials</h3>
                </div>

                <div class="box bi bi-archive">
                    <h3>Archives</h3>
                </div>
            </div>
        </div>

        @include('partials.footer')
        
        <script src="{{ asset('js/homepage.js') }}"></script>
    </body>
</html>