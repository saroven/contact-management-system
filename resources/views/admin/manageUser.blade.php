@extends('public.layout.master')
@section('extra-css')
    <!-- data table -->
    <link rel="stylesheet" href="{{ asset('assets/css/data-table/dataTables.bootstrap4.css') }}" />
@endsection
@section('content')
    <div id="addUser">
          <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">
                <a data-toggle="collapse" data-parent="#addUser" href="#addUserCollapse" class="collapsed" aria-expanded="false">
                  Add User
                </a>
              </h4>
            </div>
            <div id="addUserCollapse" class="panel-collapse in collapse show" style=""> {{--- show for displaying ---}}
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Name"
                          />
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input
                            type="tel"
                            name="phone"
                            class="form-control"
                            id="phone"
                            placeholder="Phone"
                          />
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Email"
                          />
                        </div>
                        <div class="form-group">
                          <label for="role">Role</label>
                          <select name="role" id="role" class="form-control">
                            <option value="User">User</option>
                            <option value="Clerk">Clerk</option>
                            <option value="Admin">Admin</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            placeholder="Password"
                          />
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
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

