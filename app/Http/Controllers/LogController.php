<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogController extends Controller
{
   public function logStudent(){
      $validatedData = request()->validate([
         'student_id' => 'required',
         'last_name' => 'required',
         'first_name' => 'required',
         'middle_name' => 'required',
         'program' => 'required',
         'section' => 'required',
         'entry_date' => 'required|date',
         'entry_time' => 'required|date_format:H:i',
      ]);

      try{
         $connection = oci_connect(env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_TNS'));

            if (!$connection) {
               $e = oci_error();
               throw new \Exception("Database connection failed: " . $e['message']);
         }

         $sql = "INSERT INTO tbl_logs (student_id, last_name, first_name, middle_name, program, section, entry_date, entry_time) 
         VALUES (:student_id, :last_name, :first_name, :middle_name, :program, :section, :entry_date, :entry_time)";

         $statement = oci_parse($connection, $sql);

         oci_bind_by_name($statement, ":student_id", $validatedData['student_id']);
         oci_bind_by_name($statement, ":last_name", $validatedData['last_name']);
         oci_bind_by_name($statement, ":first_name", $validatedData['first_name']);
         oci_bind_by_name($statement, ":middle_name", $validatedData['middle_name']);
         oci_bind_by_name($statement, ":program", $validatedData['program']);
         oci_bind_by_name($statement, ":section", $validatedData['section']);
         oci_bind_by_name($statement, ":entry_date", $validatedData['entry_date']);
         oci_bind_by_name($statement, ":entry_time", $validatedData['entry_time']);

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
