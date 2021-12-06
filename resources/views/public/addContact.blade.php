@extends('public.layout.master')
@section('content')
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Contact</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('insertContact') }}">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Name"
                    value="{{ old('name') }}"
                    required
                  />
                  @error('name')
                    <div>
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    </div>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="phone">Phone <span class="text-danger">*</span></label>
                  <input
                    type="tel"
                    name="phone"
                    class="form-control"
                    id="phone"
                    placeholder="Phone"
                    value="{{ old('phone') }}"
                    required
                  />
                </div>
                  <div class="form-group">
                  <label for="about">About <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    name="about"
                    class="form-control"
                    id="about"
                    placeholder="About"
                    value="{{ old('about') }}"
                    required
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
                    value="{{ old('email') }}"
                  />
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    name="address"
                    placeholder="Address"
                    value="{{ old('address') }}"
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
                        value="{{ old('facebook') }}"
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
                        value="{{ old('twitter') }}"
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
                        value="{{ old('linkedIn') }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="group">Group</label>
                  <select name="group" id="group" class="form-control">
                    <option value="Uncategorized" @if(old('group') == "Uncategorized") selected @endif >Select Group</option>
                    <option value="Family" @if(old('group') == "Family") selected @endif >Family</option>
                    <option value="Friends" @if(old('group') == "Friends") selected @endif >Friends</option>
                    <option value="Clients" @if(old('group') == "Clients") selected @endif >Clients</option>
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
