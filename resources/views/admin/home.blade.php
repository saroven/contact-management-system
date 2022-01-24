@extends('public.layout.master')
@section('content')
    @if(Session::has('error'))
          <x-Message type="error" :message="Session::get('error')"></x-Message>
      @elseif(Session::has('success'))
          <x-Message type="success" :message="Session::get('success')"></x-Message>
      @endif
    <div class="card card-primary card-outline">
        <div class="card-body">
          Dashboard
        </div>
        <!-- /.card -->
      </div>
@endsection
