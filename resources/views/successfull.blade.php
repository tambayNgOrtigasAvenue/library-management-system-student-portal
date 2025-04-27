<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Entry Successful - QCU LMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/successful.css') }}">
</head>
<body>
    @include('layouts.nav')

    <div class="container success-container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="success-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h1 class="mt-4">Library Entry Recorded Successfully!</h1>
                
                <div class="success-message mt-4">
                    <h3>Thank you for using the QCU Library</h3>
                    <p class="lead">Your library entry has been recorded in our system.</p>
                    <p>You may now proceed to use the library facilities.</p>
                    
                    <div class="library-info mt-5">
                        <h4>Library Location</h4>
                        <div class="map-container mt-3">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.234396704722!2d121.0184143153026!3d14.583843781894054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9a3a7d7a3a9%3A0x8a7a5a7a5a7a5a7a!2sQuezon%20City%20University%20Library!5e0!3m2!1sen!2sph!4v1620000000000!5m2!1sen!2sph" 
                                width="100%" 
                                height="400" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy"
                                class="library-map">
                            </iframe>   
                        </div>
                    </div>
                    
                    <div class="actions mt-5">
                        <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-home"></i> Return to Homepage
                        </a>
                        <a href="{{ route('appointment.form') }}" class="btn btn-outline-primary btn-lg ml-3">
                            <i class="fas fa-plus"></i> Create Another Entry
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>