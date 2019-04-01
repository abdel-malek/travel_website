@extends('dashboard.master')

        @section('content')
        <style>
        .admin_active{
          display:block;
        }
        .admin{
          display:none;
            cursor: pointer;
        }
        #icon_menu_admin{
            -moz-transform:rotate(90deg);
            -webkit-transform:rotate(90deg);
            -o-transform:rotate(90deg);
            -ms-transform:rotate(90deg);
            transform: rotate(90deg);
            }
        </style>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="display:inline;">Admin</h4>
                    <a href="/admin/add"><img src="{{url('img/icon/plus.svg')}}" style="height:3vw;width:auto;float:right;margin-top:-0.1vw;margin-bottom:1vw;cursor: pointer;" /></a>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th >
                            Username
                          </th>
                          <td style="width:15%;">
                            
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($admin as $get_admin)
                        <tr>
                          <td>{{$get_admin->username}}</td>
                          <td><a href="/admin/edit/{{$get_admin->id}}"><img src="{{url('img/icon/edit.svg')}}" style="height: 1.1rem;width:auto;border-radius: 0px;cursor: pointer;" /></a>
                            <img src="{{url('img/icon/delete.svg')}}" style="height:1.1rem;width:auto;border-radius: 0px;cursor: pointer;float: right;margin-top: -1.2rem;margin-right: 2rem;" onclick="delete_row(this,{{$get_admin->id}},'admin/remove')" />
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