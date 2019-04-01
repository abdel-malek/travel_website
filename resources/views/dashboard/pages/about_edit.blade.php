@extends('dashboard.master')

        @section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Default form</h4>
                      <p class="card-description">
                        Basic form layout
                      </p>
                      <form class="forms-sample" action="{{action('AboutsController@update', $about->id)}}"  method="post">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control" value="{{$about->name}}" id="name" name="name" style="border: 1px solid #bfbfbf;" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" rows="4" cols="50">Content</label>
                          <textarea class="col-md-12" id="content" name="content"  rows="8" style="border-radius: 2px;">{{$about->content}}</textarea>
                        </div>
                        <input type="submit" class="btn btn-success mr-2" value="Save" />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        @endsection