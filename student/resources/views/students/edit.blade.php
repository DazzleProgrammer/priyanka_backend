@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Student_Name</label></br>
        <input type="text" name="Student_Name" id="Student_Name" value="{{$students->Student_Name}}" class="form-control"></br>
        <label>Class</label></br>
        <input type="text" name="Class" id="Class" value="{{$students->Class}}" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="Section" id="Section" value="{{$students->Section}}" class="form-control"></br>
        <label>Subject_1_Marks</label></br>
        <input type="text" name="Subject_1_Marks" id="Subject_1_Marks" value="{{$students->Subject_1_Marks}}" class="form-control"></br>
        <label>Subject_2_Marks</label></br>
        <input type="text" name="Subject_2_Marks" id="Subject_2_Marks" value="{{$students->Subject_2_Marks}}" class="form-control"></br>
        <label>Subject_3_Marks</label></br>
        <input type="text" name="Subject_3_Marks" id="Subject_3_Marks" value="{{$students->Subject_3_Marks}}" class="form-control"></br>
        <label>Subject_4_Marks</label></br>
        <input type="text" name="Subject_4_Marks" id="Subject_4_Marks" value="{{$students->Subject_4_Marks}}" class="form-control"></br>
        <label>Subject_5_Marks</label></br>
        <input type="text" name="Subject_5_Marks" id="Subject_5_Marks" value="{{$students->Subject_5_Marks}}" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="Status" id="Status" value="{{$students->Status}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop