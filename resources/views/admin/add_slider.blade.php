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
                      <h2 class="mb-0">ADD SLIDER</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="mt-0 header-title">ADD SLIDER Form</h4>
            <hr style="margin-bottom: 50px;background-color: darkgrey;">
            <div class="container mt-5">
                    <form action="{{route('add_slider')}}" method="post" enctype="multipart/form-data">
                              @csrf
                        <div class="row mt-5">
                            <div class="form-group col-md-12">
                                <label for="name">Name <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                            </div>
                            </div>
                            <div class="row mt-5">
                            <div class="form-group col-md-6">
                                <label for="phone">nav 1 <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="nav_1" name="nav_1"value="{{old('nav_1')}}"  required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="phone">nav 1 link <span style="color:red;">*</span></label>
                              <input type="text" class="form-control" id="nav_1" name="nav_1_link" value="{{old('nav_1_link')}}"  required>
                          </div>
                        </div>
                
                        <div class="row mt-5">
                            <div class="form-group col-md-6">
                                <label for="dep_address">nav 2 </label>
                                <input type="text" class="form-control" id="nav_2" name="nav_2" value="{{old('nav_2')}}"required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="dep_address">nav 2 link</label>
                              <input type="text" class="form-control" id="nav_2" name="nav_2_link" value="{{old('nav_2_link')}}" required>
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