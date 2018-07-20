@extends('layouts.app_backend')

@section('content')
    <section class="content">
        <div class="container-fluid">
        @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
        @endif
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit {{$result->name}}
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{url('admin/menu/save')}}" method="post">
                                {{ csrf_field() }}

                                <div class="row clearfix">
                                    <input type="hidden" name="id" value="{{$result->id}}">

                                        <div class="col-sm-12">
                                            <input type="checkbox" id="edit_active" name="edit_active" class="filled-in"
                                                @if($result->active == 1)
                                                    checked=""
                                                @endif
                                                >
                                            <label for="edit_active">Active</label>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Name</h2>
                                                    <input type="text" class="form-control" name="edit_name" placeholder="Icon" value="{{$result->name}}"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Header</h2>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Header" name="edit_header">{{$result->header}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <h2 class="card-inside-title">Description</h2>
                                                <textarea rows="4" class="form-control no-resize" placeholder="Description" name="edit_description">{{$result->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <h2 class="card-inside-title">Text</h2>
                                                <textarea rows="4" class="form-control no-resize" placeholder="Text" name="edit_text">{{$result->text}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <h2 class="card-inside-title">Slug</h2>
                                                <input disabled="disabled" type="text" class="form-control" value="{{$result->slug}}"/>
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
            <!-- #END# Input -->

            </div>
        </div>
    </section>
@endsection
