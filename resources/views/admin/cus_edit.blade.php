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
                                Edit {{$slug}}
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{url('admin/cus/save')}}" method="post">
                                {{ csrf_field() }}
                                <?php
                                 $field = \App\Util\Util::getFieldBySlug($slug);
                                ?>
                                <div class="row clearfix">
                                    <input type="hidden" name="id" value="{{$result->id}}">
                                    @if($field['icon'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Icon</h2>
                                                    <input type="text" class="form-control" name="edit_icon" placeholder="Icon" value="{{$result->icon}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['header'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Header</h2>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Header" name="edit_header">{{$result->header}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['content'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Content</h2>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Content" name="edit_content">{{$result->content}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['sub_content'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Sub Content</h2>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Sub Content" name="edit_sub_content">{{$result->sub_content}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['img'] === true)
                                      <div class="col-sm-12">
                                          <div class="form-group ">
                                              <div class="form-line">
                                                  <h2 class="card-inside-title">URL IMG</h2>
                                                  <textarea rows="4" class="form-control no-resize" placeholder="URL IMG" name="edit_img">{{$result->img}}</textarea>
                                              </div>
                                          </div>
                                      </div>
                                    @endif

                                    @if($field['id_tag'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Id tag</h2>
                                                    <input type="text" class="form-control" name="edit_id_tag" placeholder="Id tag" value="{{$result->id_tag}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['id_tag2'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Id tag2</h2>
                                                    <input type="text" class="form-control" name="edit_id_tag2" placeholder="Id tag2" value="{{$result->id_tag2}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['description'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Description</h2>
                                                    <textarea rows="4" class="form-control no-resize" placeholder="Description" name="edit_description">{{$result->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($field['percent_data'] === true)
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <h2 class="card-inside-title">Percent Data</h2>
                                                    <input type="text" class="form-control" name="edit_percent_data" placeholder="Percent Data" value="{{$result->percent_data}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

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
