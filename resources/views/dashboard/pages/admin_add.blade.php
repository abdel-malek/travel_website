@extends('dashboard.master')

        @section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Add About</h4>
                      <p class="card-description">
                        Add Admin
                      </p>
                      <form class="forms-sample" action="{{action('AdminController@store')}}"  method="post">
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control"  id="username" name="username" style="border: 1px solid #bfbfbf;" />
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" rows="4" cols="50">Password</label>
                          <input type="password" class="form-control"  id="password" name="password" style="border: 1px solid #bfbfbf;" />
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