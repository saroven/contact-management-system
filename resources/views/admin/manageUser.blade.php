@extends('public.layout.master')
@section('extra-css')
    <!-- data table -->
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/dataTables.bootstrap4.css') }}" />
@endsection
@section('content')
    @if(Session::has('error'))
          <x-Message type="error" :message="Session::get('error')"></x-Message>
      @elseif(Session::has('success'))
          <x-Message type="success" :message="Session::get('success')"></x-Message>
      @endif
    <div id="addUser">
          <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">
                <a data-toggle="collapse" data-parent="#addUser" href="#addUserCollapse" class="collapsed btn btn-info" aria-expanded="false">
                  Add New User
                </a>
              </h4>
            </div>
            <div id="addUserCollapse" class="panel-collapse in collapse @if(count($errors) != 0) {{ 'show' }} @endif)" style=""> {{--- show for displaying ---}}
                <form role="form" method="post" action="{{ route('addUser') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Name"
                          />
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input
                            type="tel"
                            name="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            id="phone"
                            value="{{ old('phone') }}"
                            placeholder="Phone"
                          />
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Email"
                          />
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="role">Role</label>
                          <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                            <option value="user" @if(old('role') == 'user') {{ 'selected' }} @endif>User</option>
                            <option value="admin" @if(old('role') == 'admin') {{ 'selected' }} @endif>Admin</option>
                          </select>
                            @error('role')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            placeholder="Password"
                          />
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th style="width: 15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <a href="#" class="btn btn-primary mr-4"
                        ><i class="fas fa-edit"></i></a
                      ><a href="#" class="btn btn-danger"
                        ><i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  @empty
                      {{ 'No User found!' }}
                  @endforelse
                </tbody>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
@endsection
@section('extra-script')
    <script src="{{ asset('assets/js/data-table/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/data-table/dataTables.bootstrap4.js') }}"></script>
    <script>
      $(function () {
        $("#dataTable").DataTable();
      });
      navActivator('manageUser')
    </script>
@endsection

