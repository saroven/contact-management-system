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
  <!-- /.card-header -->
    <form action="#">
      <div class="card-body">
          <div class="form-group">
              <label for="fileUpload">File Upload</label>
              <div class="custom-file">
                <input type="file" name="fileUpload" class="custom-file-input" id="file">
                <label class="custom-file-label" for="fileUpload">Choose file</label>
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
