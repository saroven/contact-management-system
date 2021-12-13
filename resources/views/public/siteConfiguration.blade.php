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
            <form role="form" method="post" action="{{ route('siteConfiguration') }}">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Application Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="appName"
                    placeholder="Application Name"
                  />
                </div>
                <div class="form-group">
                  <label for="description">App Description</label>
                  <input
                    type="text"
                    class="form-control"
                    id="appDescription"
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
                    name="appKeyword"
                    placeholder="App keyword"
                  />
                </div>
                <div class="form-group">
                  <label for="language">App Language</label>
                  <select name="appLanguage" id="language" class="form-control">
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
                    name="userRegistration"
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
