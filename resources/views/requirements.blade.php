<!DOCTYPE html>
<html lang="en">
    @include('layouts.head', ['title' => 'Library Policies and Requirements'])
    <body>
        @include('layouts.nav')
        
        <div class="container">
            <h1 class="mt-5 text-center">Library Policies and Requirements</h1>
            
            <div id="requirements" class="mt-5 requirements-container">
                <h2 class="text-center">Library Membership Requirements</h2>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Basic Membership:</p>
                    <ul>
                        <li>Valid QCU ID (for students, faculty, and staff)</li>
                        <li>Completed membership application form</li>
                        <li>Recent 1x1 ID picture</li>
                        <li>Proof of current enrollment/employment</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Alumni/Community Members:</p>
                    <ul>
                        <li>Valid government-issued ID</li>
                        <li>Proof of QCU alumni status (for alumni)</li>
                        <li>Barangay clearance (for community members)</li>
                        <li>Membership fee payment receipt</li>
                    </ul>
                </div>
                
                <h2 class="text-center mt-4">Library Policies</h2>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">General Rules:</p>
                    <ul>
                        <li>Silence must be observed in designated quiet areas</li>
                        <li>Food and drinks are prohibited</li>
                        <li>Mobile phones must be on silent mode</li>
                        <li>Library materials must be handled with care</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Borrowing Privileges:</p>
                    <ul>
                        <li>Undergraduates: 3 books for 1 week</li>
                        <li>Graduate students: 5 books for 2 weeks</li>
                        <li>Faculty: 10 books for 1 month</li>
                        <li>Renewals allowed if no reservations exist</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Computer Use:</p>
                    <ul>
                        <li>Priority given to academic research</li>
                        <li>1-hour limit during peak hours</li>
                        <li>No downloading of unauthorized software</li>
                        <li>Personal files must be saved to cloud storage</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Study Rooms:</p>
                    <ul>
                        <li>Reservations required 24 hours in advance</li>
                        <li>Maximum 3-hour use per group</li>
                        <li>Groups must have 2+ members</li>
                        <li>Rooms must be left clean and orderly</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Fines and Penalties:</p>
                    <ul>
                        <li>Overdue books: ₱10 per day</li>
                        <li>Lost books: Replacement cost + processing fee</li>
                        <li>Damaged books: Repair/replacement cost</li>
                        <li>Repeated violations may result in suspension</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Before Your Visit:</p>
                    <ul>
                        <li>Check library hours and special closures</li>
                        <li>Bring your library card/QCU ID</li>
                        <li>Prepare list of needed materials</li>
                        <li>Review available online resources</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">During Your Visit:</p>
                    <ul>
                        <li>Present ID at entrance</li>
                        <li>Follow all posted guidelines</li>
                        <li>Ask librarians for research assistance</li>
                        <li>Return materials to proper locations</li>
                    </ul>
                </div>
                
                <div class="requirements-section">
                    <p class="text-center requirements-title">Online Resources:</p>
                    <ul>
                        <li>E-book access requires valid credentials</li>
                        <li>Database usage limited to academic purposes</li>
                        <li>Download limits may apply</li>
                        <li>Proper citation required for all materials</li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-4 mb-5">
                <a href="{{ route('appointment.form') }}" class="btn btn-primary">Book Library Appointment</a>
            </div>
        </div>
        
        @include('partials.footer')
        
        <!-- Bootstrap JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>