@extends('public.layout.master')
@section('content')
    <div class="card card-primary">
                    @if(Session::has('error'))
              <x-Message type="error" :message="Session::get('error')"></x-Message>
            @elseif(Session::has('success'))
              <x-Message type="success" :message="Session::get('success')"></x-Message>
            @endif
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
                    class="form-control @error('appName') is-invalid @enderror"
                    id="name"
                    name="appName"
                    value="{{ $settings->appName ?? old('appName') }}"
                    placeholder="Application Name"
                  />
                    @error('appName')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="description">App Description</label>
                  <input
                    type="text"
                    class="form-control @error('appDescription') is-invalid @enderror"
                    id="appDescription"
                    name="appDescription"
                    value="{{ $settings->appDescription ?? old('appDescription') }}"
                    placeholder="App description"
                  />
                    @error('appDescription')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="keyword">App Keyword</label>
                  <input
                    type="text"
                    class="form-control @error('appKeyword') is-invalid @enderror"
                    id="keyword"
                    name="appKeyword"
                    value="{{ $settings->appKeyword ?? old('appKeyword') }}"
                    placeholder="App keyword"
                  />
                    @error('appKeyword')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="language">App Language</label>
                  <select
                      name="appLanguage"
                      id="language"
                      class="form-control @error('appLanguage') is-invalid @enderror">
                    <option value="">Select Language</option>
                    <option value="en" @if($settings->appLanguage ?? '' && $settings->appLanguage == 'en' || old('appLanguage') == 'en') selected @endif>English</option>
                    <option value="bn" @if($settings->appLanguage ?? '' && $settings->appLanguage == 'bn' || old('appLanguage') == 'bn') selected @endif>Bangla</option>
                  </select>
                    @error('appLanguage')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
                <div class="custom-control custom-checkbox">
                  <input
                    class="custom-control-input @error('userRegistration') is-invalid @enderror"
                    type="checkbox"
                    id="registerStatus"
                    @if($settings->userRegistration ?? '' && $settings->userRegistration != 'off' ||  old('userRegistration')) checked="" @endif
                    name="userRegistration"
                  />
                  <label for="registerStatus" class="custom-control-label"
                    >Enable user registration</label
                  >
                    @error('userRegistration')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
@endsection
