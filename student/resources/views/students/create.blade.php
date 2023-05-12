@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">student Page</div>
  <div class="card-body">
      
      <form action="{{ url('/') }}" method="post">
        {!! csrf_field() !!}
        <label>Student_Name</label></br>
        <input type="text" name="Student_Name" id="Student_Name" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="Class" id="Class" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="Section" id="Section" class="form-control"></br>
        <label>Subject_1_Marks</label></br>
        <input type="text" name="Subject_1_Marks" id="Subject_1_Marks" class="form-control"></br>
        <label>Subject_2_Marks</label></br>
        <input type="text" name="Subject_2_Marks" id="Subject_2_Marks" class="form-control"></br>
        <label>Subject_3_Marks</label></br>
        <input type="text" name="Subject_3_Marks" id="Subject_3_Marks" class="form-control"></br>
        <label>Subject_4_Marks</label></br>
        <input type="text" name="Subject_4_Marks" id="Subject_4_Marks" class="form-control"></br>
        <label>Subject_5_Marks</label></br>
        <input type="text" name="Subject_5_Marks" id="Subject_5_Marks" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="Status" id="Status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop