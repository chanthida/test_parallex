@extends('layouts.app_backend')

@section('content')

    <section class="content">
        <div class="container-fluid">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="header">
                    <h2>
                        {{$slug}}
                        <div class="pull-right"> <a href="{{url('admin/cus/'.$slug.'/add')}}" class="btn bg-green waves-effect waves-light pull-right">Add</a> </div>
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Header</th>
                            <th>Content</th>
                            <th style="width:150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($resultContents as $resultContent)
                                <tr>
                                    <td>{{$resultContent->id}}</td>
                                    <td>{{$resultContent->header}}</td>
                                    <td>{{$resultContent->content}}</td>
                                    <td class="pull-right">
                                        <a href="{{url('admin/cus/'.$slug.'/edit/'.$resultContent->id)}}" class="btn bg-blue waves-effect waves-light">Edit</a>
                                        <a {{--href="{{url('admin/delete_menu_content/'.$resultContent->id)}}" --}}onclick="alertConfirm({{$resultContent->id}})" class="btn btn-danger waves-effect">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        <?php
                            $url = url('admin/menu_content/delete');
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script>
        function alertConfirm(id) {
            var url = "<?php echo($url) ?>";
            swal('You will delete #'+id+', Are you sure?', {
                dangerMode: true,
                icon: 'warning',
                buttons: true,
                buttons: {
                    cancel: 'Cancel',
                    catch: {
                        text: 'Yes, Delete',
                        value: 'delete',
                    },
                },
            })
                .then((value) => {
                switch (value) {
                    case 'delete':

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: url,
                            data: {id:id},
                            type: "POST",
                            success: function(result) {
                                console.log(result);
                                swal({
                                    text: 'Deleted',
                                    icon: 'success',
                                    type: 'success'
                                    }).then(okay => {
                                    if (okay) {
                                        location.reload();
                                    }
                                });
                            },
                            error: function(result){
                                swal({
                                    text: 'Something wrong',
                                    icon: 'error'
                                });
                            }
                        });

                        break;
                    default:
                    }
            });
        }

    </script>
@endsection
