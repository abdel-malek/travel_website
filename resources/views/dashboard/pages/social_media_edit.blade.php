@extends('dashboard.master')

        @section('content')
        <div class="content-wrapper">
          <div class="row">

            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title" >Edit Social Media</h4>
                      <form class="forms-sample" action="{{action('SocialMediaController@update', $social_media->id)}}"  method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Link</label>
                          <input type="text" class="form-control "  id="link_social_media" value="{{$social_media->link}}" name="link" style="border: 1px solid #bfbfbf;" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" rows="4" cols="50">Type</label>
                          <select class="form-control" name="type">
                              @if($social_media->type == "facebook")
                              <option selected="selected" value="facebook">Facebook</option>
                               <option  value="instagram">Instagram</option>
                              @elseif($social_media->type == "instagram")
                              <option  value="facebook">Facebook</option>
                              <option selected="selected" value="instagram">Instagram</option>
                              @endif
                          </select>
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