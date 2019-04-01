@extends('dashboard.master')

        @section('content')
        <div class="content-wrapper">
          <div class="row">

            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title" >Edit Package</h4>
                      <form class="forms-sample"   method="post">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="text" class="form-control "  id="title_package" value="{{$package->title}}" name="title" style="border: 1px solid #bfbfbf;" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" rows="4" cols="50">Price</label>
                          <input type="number" class="form-control"  id="price_package" value="{{$package->price}}" name="price" style="border: 1px solid #bfbfbf;" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" rows="4" cols="50">Description</label>
                          <textarea class="col-md-12" id="description_package" name="description"  rows="8" style="border-radius: 2px;">{{$package->description}}</textarea>
                        </div>
                        <input type="button" onclick="add_packages('{{url("/package/update/".$package->id)}}');" class="btn btn-success mr-2" value="Save" />
                        <a href="/package" style="text-decoration: none;border-radius: 0.2rem;color: #fff;background-color: #2188a0;float: right;padding: 0.4rem 1.2rem;">
                            Back to List
                        </a>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body" id="block_add_day">
                      <h4 class="card-title" style="display:inline;margin-bottom:2rem;">Add Day</h4>
                      <a  style="float:right;" onclick="create_day();"><img src="{{url('img/icon/plus.svg')}}" style="height:3vw;width:auto;float:right;margin-top:-0.1vw;margin-bottom:1vw;cursor: pointer;" /></a>
                      
                      
                        {{ csrf_field() }}
                        @foreach($days as $get_days)
                        <form class="forms-sample form_add_day " action=""  method="post">
                            <input type="hidden" value="{{$get_days->id}}" class="id_package" name="id_package" id="id_package" />
                            <div class="form-group" style="margin-top:1rem;">
                              <label for="exampleInputEmail1">Title</label>
                              <input type="text" class="form-control title_package" value="{{$get_days->title}}"  id="title_update" name="title" style="border: 1px solid #bfbfbf;" />
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1" rows="4" cols="50">Description</label>
                              <textarea class="col-md-12 description_package" id="description_update" name="description"  rows="7" style="border-radius: 2px;">{{$get_days->description}}</textarea>
                            </div>
                            </form>
                        @endforeach
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        @endsection