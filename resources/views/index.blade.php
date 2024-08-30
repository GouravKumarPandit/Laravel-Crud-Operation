@extends('layout')

@section('title', 'Students List')

@section('content')
<section class="p-3 my-3" style="min-height:calc(100vh - 112px)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title m-0 float-left">Students List</h3>
                        <a href="students/create" title="Add Student" class="btn btn-info float-right"><i class="bi bi-plus-circle"></i> Add New</a>
                    </div>
                    <div class="card-body">
                    @if(Session::has('status'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
                    @endif
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center"># ID</th>
                                    <th class="text-center">Student Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Class</th>
                                    <th class="text-center">Age</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Actions</th>
                                    {{-- <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td class="text-center">{{$student->id}}</td>
                                    <td class="text-center">
                                        @if($student->student_gender == 'm')
                                            <img src="{{asset('images/ceo.png')}}" style="width: 25px; height: 25px;" alt="Boy Image">
                                        @else
                                            <img src="{{asset('images/woman.png')}}" style="width: 25px; height: 25px;" alt="Girl Image">
                                        @endif
                                        <b>{{$student->first_name}} {{$student->last_name}}</b>
                                    </td>
                                    <td class="text-center">@if($student->email){{$student->email}}@else -- @endif</td>
                                    <td class="text-center">
                                        <img src="{{asset('images/online-learning.png')}}" style="width: 25px; height: 25px;" alt="Course Image">
                                        {{$student->class_name}}
                                    </td>
                                    <td class="text-center">{{$student->student_age}}</td>
                                    <td class="text-center">
                                        @if($student->student_gender == 'm')
                                            <i class="bi bi-gender-male"></i> {{ 'Male' }}
                                        @else
                                            <i class="bi bi-gender-female"></i> {{ 'Female' }}
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{url('students/'.$student->id.'/edit')}}" title="View Student Detail" class="btn btn-sm btn-outline-info mx-1"><i class="bi bi-eye-fill"></i> View</a>
                                        <a href="{{url('students/'.$student->id.'/edit')}}" title="Edit Student" class="btn btn-sm btn-outline-primary mx-1"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <form action="/students/{{$student->id}}" method="POST" class="mx-1">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete Student" onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                    {{-- <td class="text-center"><a href="{{url('students/'.$student->id.'/edit')}}" title="Edit Student" class="btn btn-outline-info"><i class="bi bi-pencil-square"></i> Edit</a></td>
                                    <td class="text-center">
                                        <form action="/students/{{$student->id}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-outline-danger" title="Delete Student" onclick="return confirm('Are you sure?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $students->links('pagination::bootstrap-4'); }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection