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
                        Menu
                    </h2>
                </div>
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Header</th>
                            <th>Description</th>
                            <th>Text</th>
                            <th>Active</th>
                            <th style="width:75px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $menu)
                                <tr>
                                    <td>{{$menu->id}}</td>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$menu->header}}</td>
                                    <td>{{$menu->description}}</td>
                                    <td>{{$menu->text}}</td>
                                    <td>
                                        @if($menu->active == 1)
                                            <i class="material-icons">done</i>
                                        @else
                                            <i class="material-icons">clear</i>
                                        @endif
                                    </td>
                                    <td class="pull-right">
                                        <a href="{{url('admin/menu/edit/'.$menu->id)}}" class="btn bg-blue waves-effect waves-light">Edit</a>
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

@endsection
