<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand font-weight-bold ml-5" href="{{ route('home') }}" style="color: #102E50; font-size: 1.5rem;">
    <img src="{{ asset('img/qcu-logo2.png') }}" alt="QCU Logo" class="img-fluid p-0" style="height: 4rem;"> QCU Library System
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
    <a class="nav-link font-weight-bold " style="font-size: 1.5rem;" href="{{ route('home') }}">Library Services</a>
</li>
<li class="nav-item">
    <a class="nav-link font-weight-bold" style="font-size: 1.5rem;" href="#requirements">Policies</a>
</li>
<li class="nav-item">
    <a class="nav-link font-weight-bold" style="font-size: 1.5rem;" href="{{ route('appointment.form') }}">Book Appointment</a>
</li>
        </ul>
    </div>
</nav>