@if($type == 'error')
    @php
        $msgtype = "Error!";
        $class = "alert-danger";
    @endphp
@elseif($type == 'success')
    @php
        $msgtype = "Success!";
        $class = "alert-success";
    @endphp
@endif
<div class="alert {{ $class }} alert-dismissible fade show" role="alert">
  <strong>
      {{ $msgtype }}
  </strong> {{ $message }}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
