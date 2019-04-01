@extends('dashboard.master')

        @section('content')
        <style>
        .message_active{
          display:block;
        }
        .message{
          display:none;
        }
        </style>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="display:inline;">Message</h4>

                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 20%;">
                            Name
                          </th>
                          <th style="width: 20%;">
                            Email
                          </th>
                          <th style="width:10%;">
                            Phone
                          </th>
                            <th style="width:50%;">
                            Message
                          </th>
                          <td style="width:10%;">
                            
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($message as $get_message)
                        <tr>
                          <td>{{$get_message->name}}</td>
                          <td>{{$get_message->email}}</td>
                          <td>  {{$get_message->phone}}</td>
                          <td>  {{$get_message->message}}</td>
                          <td>
                            <img src="{{url('img/icon/delete.svg')}}" style="height:1.1rem;width:auto;border-radius: 0px;cursor: pointer;float: right;margin-top: -0.5rem;margin-right: 2rem;" onclick="delete_row(this,{{$get_message->id}},'message/remove')" />
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