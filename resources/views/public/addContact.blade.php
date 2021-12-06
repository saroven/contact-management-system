@extends('public.layout.master')
@section('content')
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New Contact</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('insertContact') }}" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    class="form-control @error('name') is-invalid @enderror"
                    id="name"
                    name="name"
                    placeholder="Name"
                    value="{{ old('name') }}"
                    required
                  />
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="phone">Phone <span class="text-danger">*</span></label>
                  <input
                    type="tel"
                    name="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    id="phone"
                    placeholder="Phone"
                    value="{{ old('phone') }}"
                    required
                  />
                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
                  <div class="form-group">
                  <label for="about">About <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    name="about"
                    class="form-control @error('about') is-invalid @enderror"
                    id="about"
                    placeholder="About"
                    value="{{ old('about') }}"
                    required
                  />
                      @error('about')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control @error('email') is-invalid @enderror"
                    id="email"
                    name="email"
                    placeholder="Email"
                    value="{{ old('email') }}"
                  />
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input
                    type="text"
                    class="form-control @error('address') is-invalid @enderror"
                    id="address"
                    name="address"
                    placeholder="Address"
                    value="{{ old('address') }}"
                  />
                    @error('address')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="facebook">Facebook</label>
                      <input
                        type="text"
                        class="form-control @error('facebook') is-invalid @enderror"
                        name="facebook"
                        placeholder="https://facebook.com"
                        value="{{ old('facebook') ?? 'https://facebook.com/' }}"
                      />
                        @error('facebook')
                          <span class="invalid-feedback" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="twitter">Twitter</label>
                      <input
                        type="text"
                        class="form-control @error('twitter') is-invalid @enderror"
                        name="twitter"
                        placeholder="https://twitter.com"
                        value="{{ old('twitter') ?? 'https://twitter.com/'}}"
                      />
                        @error('twitter')
                          <span class="invalid-feedback" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="linkedIn">LinkedIn</label>
                      <input
                        type="text"
                        class="form-control @error('linkedIn') is-invalid @enderror"
                        name="linkedIn"
                        placeholder="https://linkedin.com"
                        value="{{ old('linkedIn') ?? 'https://linkedin/in/'}}"
                      />
                        @error('linkedIn')
                          <span class="invalid-feedback" role="alert">
                            {{ $message }}
                          </span>
                        @enderror
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                      <label for="picture">Profile Picture</label>
                      <div class="custom-file">
                        <input type="file" name="picture" class="custom-file-input @error('picture') is-invalid @enderror" id="file">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      @error('picture')
                          <span class="invalid-feedback" role="alert">
                            {{ $message }}
                          </span>
                      @enderror
                  </div>
                <div class="form-group">
                  <label for="group">Group</label>
                  <select name="group" id="group" class="form-control @error('group') is-invalid @enderror">
                    <option value="Uncategorized" @if(old('group') == "Uncategorized") selected @endif >Select Group</option>
                    <option value="Family" @if(old('group') == "Family") selected @endif >Family</option>
                    <option value="Friends" @if(old('group') == "Friends") selected @endif >Friends</option>
                    <option value="Clients" @if(old('group') == "Clients") selected @endif >Clients</option>
                  </select>
                    @error('group')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                  @enderror
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
    <script src="{{ asset('assets/js/bs-custom-file/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
        navActivator('addContact')
    </script>
@endsection
