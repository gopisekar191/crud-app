@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student App</h2>
            </div>           
        </div>

        <div>
        <!-- <div class="mx-auto pull-right">
            <div class="col-lg-6 margin-tb">
                <form action="{{ route('student.index') }}" method="GET" role="search">

                    <div class="input-group">
                        
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search student" id="term">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search student">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                        <a href="{{ route('student.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                 </form>
             </div>
            </div>
        </div>
    </div> -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Marks</th>
            <th>Created At</th>           
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->department }}</td>
                <td>{{ $student->marks }}</td>
                <td>{{ date_format($student->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('student.destroy', $student->id) }}" method="POST">

                        <a href="{{ route('student.show', $student->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('student.edit', $student->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    

@endsection
