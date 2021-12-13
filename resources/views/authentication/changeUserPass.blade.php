@extends('public.layout.master')
@section('content')
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Change Password</h3>
            </div>
            <!-- /.card-header -->
              @if(Session::has('error'))
                  <x-Message type="error" :message="Session::get('error')"></x-Message>
              @elseif(Session::has('success'))
                  <x-Message type="success" :message="Session::get('success')"></x-Message>
              @endif
            <!-- form start -->
            <form role="form" method="post" action="{{ route('updatePassword') }}" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                  <div class="form-group">
                  <label for="currentPassword">Current Password</label>
                  <input
                    type="password"
                    class="form-control @error('currentPassword') is-invalid @enderror"
                    id="currentPassword"
                    name="currentPassword"
                    placeholder="Current Password"
                    required
                  />
                    @error('currentPassword')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="newPassword">New Password</label>
                  <input
                    type="password"
                    class="form-control @error('newPassword') is-invalid @enderror"
                    name="newPassword"
                    placeholder="New Password"
                    required
                  />
                    @error('newPassword')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="confirmPassword">Confirm Password</label>
                  <input
                    type="password"
                    class="form-control @error('confirmPassword') is-invalid @enderror"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirm Password"
                    required
                  />
                    @error('confirmPassword')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Password</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

@endsection
@section('extra-script')
    <script>
        navActivator('changePassword')
    </script>
@endsection
