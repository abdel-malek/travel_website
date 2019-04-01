@extends('dashboard.master')

        @section('content')
        <style>
        .package_active{
          display:block;
        }
        .package{
          display:none;
        }
        </style>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="display:inline;">Package</h4>
                  <a href="/package/add"><img src="{{url('img/icon/plus.svg')}}" style="height:3vw;width:auto;float:right;margin-top:-0.1vw;margin-bottom:1vw;cursor: pointer;" /></a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 20%;">
                            Title
                          </th>
                          <th>
                            Description
                          </th>
                          <th style="width:10%;">
                            Price
                          </th>
                          <td style="width:15%;">
                            
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($package as $get_package)
                        <tr>
                          <td>{{$get_package->title}}</td>
                          <td>{{$get_package->description}}</td>
                          <td> $ {{$get_package->price}}</td>
                          <td><a href="/package/edit/{{$get_package->id}}"><img src="{{url('img/icon/edit.svg')}}" style="height: 1.1rem;width:auto;border-radius: 0px;cursor: pointer;" /></a>
                            <img src="{{url('img/icon/delete.svg')}}" style="height:1.1rem;width:auto;border-radius: 0px;cursor: pointer;float: right;margin-top: -1.2rem;margin-right: 2rem;" onclick="delete_row(this,{{$get_package->id}},'package/remove')" />
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