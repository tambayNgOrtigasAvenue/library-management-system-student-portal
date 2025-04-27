<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body>
        @include('layouts.nav')
        
        <section>
            <img src="{{ asset('images/qcu_library.jpg') }}" id="homepage" alt="QCU Library">
            <h2 id="text">QCU Library Management System</h2>
            <a href="https://maps.app.goo.gl/fyNVyDJ2AmVwYjGm8" id="btn" class="btn">Navigate QCU Libraries</a>
        </section> 
        
        <div class="sec" id="sec">
            <h2>OUR LIBRARY SERVICES</h2>
            <div class="container">
                <div class="box">
                    <img src="{{ asset('images/books.png') }}" alt="Book Collection">
                    <h3>Book Collection</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/ebooks.png') }}" alt="E-Books">
                    <h3>E-Books</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/research.png') }}" alt="Research Assistance">
                    <h3>Research Assistance</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/study-space.png') }}" alt="Study Spaces">
                    <h3>Study Spaces</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/computers.png') }}" alt="Computer Access">
                    <h3>Computer Access</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/printing.png') }}" alt="Printing Services">
                    <h3>Printing Services</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/group-study.png') }}" alt="Group Study Rooms">
                    <h3>Group Study Rooms</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/reference.png') }}" alt="Reference Materials">
                    <h3>Reference Materials</h3>
                </div>

                <div class="box">
                    <img src="{{ asset('images/archives.png') }}" alt="Archives">
                    <h3>Archives</h3>
                </div>
            </div>
        </div>

        @include('partials.footer')
        
        <script src="{{ asset('js/homepage.js') }}"></script>
    </body>
</html>