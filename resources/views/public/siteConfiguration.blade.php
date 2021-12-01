@extends('public.layout.master')
@section('content')
    <div class="card card-primary">
            <div class="card-header bg-info">
              <h3 class="card-title">
                <i class="fa fa-cog"></i> General Settings
              </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Application Name</label>

                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Application Name"
                  />
                </div>
                <div class="form-group">
                  <label for="description">App Description</label>
                  <input
                    type="text"
                    class="form-control"
                    id="description"
                    name="description"
                    placeholder="App description"
                  />
                </div>
                <div class="form-group">
                  <label for="keyword">App Keyword</label>
                  <input
                    type="text"
                    class="form-control"
                    id="keyword"
                    name="keyword"
                    placeholder="App keyword"
                  />
                </div>
                <div class="form-group">
                  <label for="language">App Language</label>
                  <select name="language" id="language" class="form-control">
                    <option value="en">English</option>
                    <option value="bn">Bangla</option>
                  </select>
                </div>
                <div class="custom-control custom-checkbox">
                  <input
                    class="custom-control-input"
                    type="checkbox"
                    id="registerStatus"
                    checked=""
                  />
                  <label for="registerStatus" class="custom-control-label"
                    >Enable user registration</label
                  >
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
@endsection
