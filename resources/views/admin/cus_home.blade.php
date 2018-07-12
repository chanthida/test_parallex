@extends('layouts.app_backend')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <h2>
                        Edit Home
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Header</th>
                            <th>Content</th>
                            <th>Img</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($resultContents as $resultContent)
                                <tr>
                                    <td>{{$resultContent->id}}</td>
                                    <td>{{$resultContent->header}}</td>
                                    <td>{{$resultContent->content}}</td>
                                    <td>{{$resultContent->img}}</td>
                                    <td><a href="{{url('admin/home/edit/'.$resultContent->id)}}" class="btn bg-blue waves-effect waves-light pull-right">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
