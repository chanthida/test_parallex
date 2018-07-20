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
                        Profile
                    </h2>

                </div>
                <div class="body">
                    <form action="{{url('admin/profile/save')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <input type="hidden" name="id" value="{{$result->id}}">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h2 class="card-inside-title">Name</h2>
                                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$result->name}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h2 class="card-inside-title">Img</h2>
                                            <input type="text" class="form-control" name="img" placeholder="Img" value="{{$result->img}}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h2 class="card-inside-title">Description</h2>
                                            <input type="text" class="form-control" name="description" placeholder="Description" value="{{$result->description}}"/>
                                        </div>
                                    </div>
                                </div>

                            <button type="submit" class="btn bg-orange btn-circle waves-effect waves-circle waves-float pull-right">
                                <i class="material-icons">save</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
