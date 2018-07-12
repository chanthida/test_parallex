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
                                Edit Home
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{url('admin/home/save')}}" method="post">
                                {{ csrf_field() }}
                                <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Header</h2>
                                                    <input type="hidden" name="id" value="{{$result->id}}">
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Header" name="edit_header">{{$result->header}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Content</h2>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Content" name="edit_content">{{$result->content}}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                      <div class="col-sm-12">
                                          <div class="form-group ">
                                              <div class="form-line">
                                                  <h2 class="card-inside-title">URL IMG</h2>
                                                  <textarea rows="4" class="form-control no-resize" placeholder="URL IMG" name="edit_img">{{$result->img}}</textarea>
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
