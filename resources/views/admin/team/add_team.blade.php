@extends('admin.base_admin')
@section('mains')
<div class="pc-container">
          <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            @if (session('succes'))
            <div style="color: green;">
                {{ session('succes') }}
            </div>
        @endif
        @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <div class="page-header">
              <div class="page-block">
                <div class="row align-items-center">
                  <div class="col-md-12">       
                  </div>
                  <div class="col-md-12">
                    <div class="page-header-title">
                      <h2 class="mb-0">ADD Team</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="mt-0 header-title">ADD Team Form</h4>
            <hr style="margin-bottom: 50px;background-color: darkgrey;">
            <div class="container mt-5">
                    <form action="{{route('add_team_process')}}" method="post" enctype="multipart/form-data">
                              @csrf
                      
                            <div class="row mt-5">
                            <div class="form-group col-md-6">
                                <label for="username">Username <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="username" name="username"value="{{old('username')}}"  required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="password">Password <span style="color:red;">*</span></label>
                              <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}"  required>
                          </div>
                        </div>
                        <div class="row mt-5">
                          <div class="form-group col-md-6">
                              <label for="password_confirmation">Confirm Password <span style="color:red;">*</span></label>
                              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"value="{{old('username')}}"  required>
                          </div>
                          
                      </div>
                
                       
                
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                        </div>
                    </form>
                </div>
          </div>
        </div>

@endsection
