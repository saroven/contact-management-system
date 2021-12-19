@extends('public.layout.master')
@section('content')
    <div class="card">
  <div class="card-header">
    <h3 class="card-title">Import / Export Contacts</h3>

    <div class="card-tools">
        <form action="{{ route('export') }}" method="post" target="_blank">
            @csrf
            <button type="submit" class="btn btn-info">Export Contacts</button>
        </form>
    </div>
  </div>
        @if(Session::has('error'))
          <x-Message type="error" :message="Session::get('error')"></x-Message>
      @elseif(Session::has('success'))
          <x-Message type="success" :message="Session::get('success')"></x-Message>
      @endif
  <!-- /.card-header -->
    <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
          <div class="form-group">
              <label for="fileUpload">File Upload</label>
              <div class="custom-file">
                <input type="file" name="file" class="custom-file-input @error('file') is-invalid @enderror" id="file">
                <label class="custom-file-label" for="fileUpload">Choose file</label>
              @error('file')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
              @enderror
              </div>
          </div>
      </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </form>
  <!-- /.card-body -->
</div>
@endsection
    @section('extra-script')
        <script src="{{ asset('assets/js/bs-custom-file/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(document).ready(function () {
          bsCustomFileInput.init();
        });
        navActivator('importExport')
    </script>
@endsection
