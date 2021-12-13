@extends('public.layout.master')
@section('content')
    <div class="card card-primary container">
        <div class="card-header">
            <div class="card-title">
                Profile
            </div>
        </div>
        <div class="card-body">
                @if(Session::has('error'))
                      <x-Message type="error" :message="Session::get('error')"></x-Message>
                  @elseif(Session::has('success'))
                      <x-Message type="success" :message="Session::get('success')"></x-Message>
                  @endif
                <h4 class="mb-2">Profile</h4>
                <form class="mt-2" method="POST" action="{{ route('profile.update') }}" accept-charset="UTF-8" id="regiForm" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Name<span class="text-danger"> *</span></label>
                            <input
                                value="{{ old('name') ?? $userInfo->name }}"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                type="text"
                                placeholder="Full Name"
                                required
                            />
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mobile Number (01XXXXXXXXX)<span class="text-danger"> *</span></label>
                            <input
                                value="{{ old('phone') ?? $userInfo->phone }}"
                                class="form-control is_number @error('phone') is-invalid @enderror"
                                name="phone"
                                required
                                type="text"
                                minlength="10"
                                maxlength="11"
                                min="0"
                                placeholder="Phone Number"/>
                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email<span class="text-danger"> *</span></label>
                            <input
                                value="{{ old('email') ?? $userInfo->email }}"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" type="email"
                                required
                                placeholder="Email"/>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">About<span class="text-danger"> *</span></label>
                            <input
                                value="{{ old('about') ?? $userInfo->about }}"
                                class="form-control @error('about') is-invalid @enderror"
                                name="about"
                                type="text"
                                placeholder="About"
                                required="required"
                            />
                            @error('about')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Gender <span class="text-danger"> *</span></label>
                            <select
                                name="gender"
                                class="form-control @error('gender') is-invalid @enderror"
                                required
                            >
                                <option value="">Select Gender</option>
                                <option value="Male" @if(old('gender') == 'Male' || $userInfo->gender == 'Male') selected @endif>Male</option>
                                <option value="Female" @if(old('gender') == 'Female' || $userInfo->gender == 'Female') selected @endif>Female</option>
                                <option value="Other" @if(old('Other') == 'Other' || $userInfo->gender == 'Other') selected @endif>Other</option>
                            </select>
                            @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                    </form>
            </div>
        </div>
@endsection
@section('extra-script')
    <script src="{{ asset('assets/js/bs-custom-file/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
        navActivator('profile')
    </script>
@endsection
