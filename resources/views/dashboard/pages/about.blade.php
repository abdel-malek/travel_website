@extends('dashboard.master')

        @section('content')
        <style>
        .about_active{
          display:block;
        }
        .about{
          display:none;
        }
        </style>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 20%;">
                            Title
                          </th>
                          <th>
                            Content
                          </th>
                          <td style="width:15%;">
                            
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($about as $get_about)
                        <tr>
                          <td>{{$get_about->name}}</td>
                          <td>{{$get_about->content}}</td>
                          <td><a href="/abouts/edit/{{$get_about->id}}"><img src="{{url('img/icon/edit.svg')}}" style="height: 1.1rem;width:auto;border-radius: 0px;cursor: pointer;" /></a></td>
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