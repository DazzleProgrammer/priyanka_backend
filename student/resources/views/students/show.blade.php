@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Student_Name : {{ $students->Student_Name }}</h5>
        <p class="card-text">Class : {{ $students->Class }}</p>
        <p class="card-text">Section : {{ $students->Section }}</p>
        <p class="card-text">Subject_1_Marks : {{ $students->Subject_1_Marks }}</p>
        <p class="card-text">Subject_2_Marks : {{ $students->Subject_2_Marks }}</p>
        <p class="card-text">Subject_3_Marks : {{ $students->Subject_3_Marks }}</p>
        <p class="card-text">Subject_4_Marks : {{ $students->Subject_4_Marks }}</p>
        <p class="card-text">Subject_5_Marks : {{ $students->Subject_5_Marks }}</p>
        <p class="card-text">Status : {{ $students->Status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>