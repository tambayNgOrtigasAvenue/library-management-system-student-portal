<?php

namespace App\Http\Controllers;

class RegistrationController extends Controller
{
    public function registerStudent(){
        $validatedData = request()->validate([
           'student_id' => 'required',
           'last_name' => 'required',
           'first_name' => 'required',
           'middle_name' => 'required',
           'sex' => 'required',
           'address' => 'required',
           'contact_number' => 'required',
           'email' => 'required',
           'student_status' => 'required',
           'campus_id' => 'required',
           'graduation_year' => 'required',
           'program' => 'required',
        ]);
  
        try{
           $connection = oci_connect(env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_TNS'));
  
              if (!$connection) {
                 $e = oci_error();
                 throw new \Exception("Database connection failed: " . $e['message']);
           }
  
           $sql = "INSERT INTO tbl_student (student_id, last_name, first_name, middle_name, sex, address, contact_number, email, student_status, campus_id, graduation_year, program) 
           VALUES (:student_id, :last_name, :first_name, :middle_name, :sex, :address, :contact_number, :email, :student_status, :campus_id, :graduation_year, :program)";
  
           $statement = oci_parse($connection, $sql);
  
           oci_bind_by_name($statement, ":student_id", $validatedData['student_id']);
           oci_bind_by_name($statement, ":last_name", $validatedData['last_name']);
           oci_bind_by_name($statement, ":first_name", $validatedData['first_name']);
           oci_bind_by_name($statement, ":middle_name", $validatedData['middle_name']);
           oci_bind_by_name($statement, ":sex", $validatedData['sex']);
           oci_bind_by_name($statement, ":address", $validatedData['address']);
            oci_bind_by_name($statement, ":contact_number", $validatedData['contact_number']);
            oci_bind_by_name($statement, ":email", $validatedData['email']);
            oci_bind_by_name($statement, ":student_status", $validatedData['student_status']);
            oci_bind_by_name($statement, ":campus_id", $validatedData['campus_id']);
            oci_bind_by_name($statement, ":graduation_year", $validatedData['graduation_year']);
            oci_bind_by_name($statement, ":program", $validatedData['program']);


  
           oci_execute($statement);
           oci_close($connection);
  
           return redirect()->back()->with('success', 'Student information saved successfully');
        }
        catch(\Exception $e){
           return redirect()->back()
           ->withInput()
           ->with('error', 'Error saving student information: ' . $e->getMessage());
        }
        
     }
}
