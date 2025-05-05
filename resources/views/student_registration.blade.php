<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Entry Form - QCU LMS</title>
    <link rel="stylesheet" href="{{ asset('css/studentform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    @include('layouts.header')
</head>

<body>

    @include('layouts.nav')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="text-center">Library Entry Form</h2>
                <form id="entryForm" action="{{ route('student.register') }}" method="POST" autocomplete="off">
                    @csrf

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    
                    <!-- Student Information Section -->
                    <div class="form-group">
                        <label for="student_id">Student ID Number</label>
                        <input type="text" class="form-control" id="student_id" name="student_id" 
                        placeholder="Enter your student ID (e.g., 21-2345)" value="{{ old('student_id') }}" required>
                            @error('student_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        <small class="form-text text-muted">6-digit student ID number</small>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" 
                                   placeholder="Enter last name" value="{{ old('last_name') }}" required>
                                   @error('last_name')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" 
                                   placeholder="Enter first name" value="{{ old('first_name') }}" required>
                            <div class="invalid-feedback">Please enter your first name.</div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="middle_name">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" 
                                   placeholder="Enter middle name" value="{{ old('middle_name') }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="sex">Sex</label>
                            <input type="text" class="form-control" id="sex" name="sex" 
                                placeholder="Enter your gender (e.g. Male)" value="{{ old('sex') }}" required>
                            <div class="invalid-feedback">Please enter your sex.</div>
                        </div>
                    </div>

                    <!--Address-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" 
                                placeholder="Enter your home address" value="{{ old('address') }}" required>
                            <div class="invalid-feedback">Please enter your address.</div>
                        </div>
                    </div>

                    <!--Contact Number-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contact_no">Contact Number</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no" 
                                placeholder="(e.g 09xxxxxxxxx)" value="{{ old('contact_no') }}" required>
                            <div class="invalid-feedback">Please enter your address.</div>
                        </div>
                    </div>

                    <!--Email Address-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" id="email" name="email" 
                                placeholder="(e.g joe@example.com)" value="{{ old('email') }}" required>
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                    </div>

                    <!--Student Status-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="status">Student Status</label>
                            <select class="form-control" id="student_status" name="student_status" required>
                                <option value="">Select your campus...</option>
                                <option value="regular" {{ old('student_status') == 'regular' ? 'selected' : '' }}>Regular</option>
                                <option value="irregular" {{ old('student_status') == 'irregular' ? 'selected' : '' }}>Irregular</option>
                            </select>
                            <div class="invalid-feedback">Please enter your status.</div>
                        </div>
                    </div>

                    <!--Campus-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="campus_id">Campus</label>
                            <select class="form-control" id="campus_id" name="campus" required>
                                <option value="">Select your campus...</option>
                                <option value="QCU-SB-1117" {{ old('campus_id') == 'QCU-SB-1117' ? 'selected' : '' }}>San Bartolome</option>
                                <option value="QCU-SF-1117" {{ old('campus_id') == 'QCU-SF-1117' ? 'selected' : '' }}>San Francisco</option>
                                <option value="QCU-BA-1117" {{ old('campus_id') == 'QCU-BA-1117' ? 'selected' : '' }}>Batasan</option>
                            </select>
                            <div class="invalid-feedback">Please enter your campus</div>
                        </div>
                    </div>

                    <!-- Academic Information Section -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="program">Program/Course</label>
                            <select class="form-control" id="program" name="program" required>
                                <option value="">Select your program...</option>
                                <option value="BSIT" {{ old('program') == 'BSIT' ? 'selected' : '' }}>Bachelor of Science in Information Technology</option>
                                <option value="BSCS" {{ old('program') == 'BSCS' ? 'selected' : '' }}>Bachelor of Science in Computer Science (BSCS)</option>
                                <option value="BSIS" {{ old('program') == 'BSIS' ? 'selected' : '' }}>Bachelor of Science in Information Systems (BSIS)</option>
                                <option value="BSE" {{ old('program') == 'BSE' ? 'selected' : '' }}>Bachelor of Science in Education (BSE)</option>
                                <option value="BSA" {{ old('program') == 'BSA' ? 'selected' : '' }}>Bachelor of Science in Accountancy (BSA)</option>
                                <option value="BSBA" {{ old('program') == 'BSBA' ? 'selected' : '' }}>Bachelor of Science in Business Administration (BSBA)</option>
                                <option value="BSCE" {{ old('program') == 'BSCE' ? 'selected' : '' }}>Bachelor of Science in Civil Engineering (BSCE)</option>
                                <option value="BSME" {{ old('program') == 'BSME' ? 'selected' : '' }}>Bachelor of Science in Mechanical Engineering (BSME)</option>
                            </select>
                            <div class="invalid-feedback">Please select your program.</div>
                        </div>
                    </div>

                    <!--Year Graduation-->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="graduation_year">Graduation Year</label>
                            <input type="text" class="form-control" id="graduation_year" name="graduation_year" 
                                placeholder="Enter your graduation year (e.g. 2027)" value="{{ old('graduation_year') }}" required>
                            <div class="invalid-feedback">Please enter your status.</div>
                        </div>
                    </div>

                    <div class="form-group text-center mt-4">
                        <button type="submit" class="btn btn-primary rounded-pill px-3">Submit Entry</button>
                    </div>
                </form>

                <div id="successMessage" class="alert alert-success mt-3 text-center" style="display:none;">
                    Entry recorded successfully!
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
   

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/form.js') }}"></script>
</body>
</html>