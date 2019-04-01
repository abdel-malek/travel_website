@extends('dashboard.master')

        @section('content')
        <div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title" >Edit Day</h4>
                      <form class="forms-sample" action="{{action('DayController@update', $day->id)}}"  method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control "  id="title_day" value="{{$day->title}}" name="title" style="border: 1px solid #bfbfbf;" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" >Package</label>
                          <select class="form-control" name="package_id">
                              @foreach($package as $get_package)
                                @if($get_package->id == $day->package_id)
                                    <option selected="selected" value={{$get_package->id}} >{{$get_package->title}}</option>
                                @else
                                    <option  value={{$get_package->id}} >{{$get_package->title}}</option>
                                @endif
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" >Description</label>
                          <textarea class="col-md-12" id="description_day" name="description"  rows="8" style="border-radius: 2px;">{{$day->description}}</textarea>
                        </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                            <div class="form-group" >
                                <div class="file-loading">
                                    <input id="image_edit_one_day" type="file"  name="image" class="file" data-overwrite-initial="false" data-min-file-count="2">
                                </div>
                            </div>
                        </div>
                        <input type="submit"  class="btn btn-success mr-2" value="Save" />
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection