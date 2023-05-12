@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">students</div>
                    <div class="card-body">
                        <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="Add New students">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Student_Name</th>
                                        <th>Class</th>
                                        <th>Section</th>
                                        <th>Subject_1_Marks</th>
                                        <th>Subject_2_Marks</th>
                                        <th>Subject_3_Marks</th>
                                        <th>Subject_4_Marks</th>
                                        <th>Subject_5_Marks</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td >STU- {{ $loop->iteration }}</td>
                                        <td>{{ $item->Student_Name }}</td>
                                        <td>{{ $item->Class }}</td>
                                        <td>{{ $item->Section }}</td>
                                        <td>{{ $item->Subject_1_Marks }}</td>
                                        <td>{{ $item->Subject_2_Marks }}</td>
                                        <td>{{ $item->Subject_3_Marks }}</td>
                                        <td>{{ $item->Subject_4_Marks }}</td>
                                        <td>{{ $item->Subject_5_Marks }}</td>
                                        <td>{{ $item->Status }}</td>
 
                                        <td>
                                            <a href="{{ url('/students/' . $item->id) }}" title="View students"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students/' . $item->id . '/edit') }}" title="Edit students"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection