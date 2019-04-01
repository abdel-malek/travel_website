@extends('dashboard.master')

        @section('content')
        <div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title" >Edit Gallery</h4>
                      <form class="forms-sample" action="{{action('GalleryController@update', $gallery->id)}}"  method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control "  id="title_gallery" value="{{$gallery->title}}" name="title" style="border: 1px solid #bfbfbf;" />
                        </div>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                          <div class="form-group" >
                              <div class="file-loading">
                                  <input id="image_edit_gallery" type="file"  name="image" class="file" data-overwrite-initial="false" data-min-file-count="2">
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