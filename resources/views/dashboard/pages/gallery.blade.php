@extends('dashboard.master')

        @section('content')
        <style>
        .gallery_active{
          display:block;
        }
        .gallery{
          display:none;
        }
        </style>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="display:inline;">Gallery</h4>
                  <a href="/gallery/add">
                      <img src="{{url('img/icon/plus.svg')}}" style="height:3vw;width:auto;float:right;margin-top:-0.1vw;margin-bottom:1vw;cursor: pointer;" />
                  </a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 20%;">
                            Title
                          </th>
                          <th>Image</th>   
                          <td style="width:15%;">
                            
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($gallery as $get_gallery)
                        <tr>
                          <td>{{$get_gallery->title}}</td>
                          <td><img src="{{url('images/'.$get_gallery->image)}}" style="width: 15rem;height: auto;border-radius: 0rem;" /></td>
                          <td>
                              <a href="/gallery/edit/{{$get_gallery->id}}">
                                  <img src="{{url('img/icon/edit.svg')}}" style="height: 1.1rem;width:auto;border-radius: 0px;cursor: pointer;" />
                              </a>
                            <img src="{{url('img/icon/delete.svg')}}" style="height:1.1rem;width:auto;border-radius: 0px;cursor: pointer;float: right;margin-top: -2rem;margin-right: 2rem;" onclick="delete_row(this,{{$get_gallery->id}},'gallery/remove')" />
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection