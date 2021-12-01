@extends('public.layout.master')
@section('content')
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Contact</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
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
                  <label for="company">Company</label>
                  <input
                    type="text"
                    name="company"
                    class="form-control"
                    id="company"
                    placeholder="Company"
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
                    placeholder="Enter email"
                  />
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="facebook">Facebook</label>
                      <input
                        type="text"
                        class="form-control"
                        name="facebook"
                        placeholder="https://facebook.com"
                      />
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="twitter">Twitter</label>
                      <input
                        type="text"
                        class="form-control"
                        name="twitter"
                        placeholder="https://twitter.com"
                      />
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="linkedIn">LinkedIn</label>
                      <input
                        type="text"
                        class="form-control"
                        name="linkedIn"
                        placeholder="https://linkedin.com"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="group">Group</label>
                  <select name="group" id="group" class="form-control">
                    <option value="family">Family</option>
                    <option value="friends">Friends</option>
                    <option value="clients">Clients</option>
                  </select>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

@endsection
@section('extra-script')
    <script>
        navActivator('addContact')
    </script>
@endsection
