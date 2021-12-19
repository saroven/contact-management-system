<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Contact</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin-lte/adminlte.min.css') }}" /></head>
<body>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Contacts</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
                <table class="table">
                  <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>About</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Facebook</th>
                          <th>Twitter</th>
                          <th>LinkedIn</th>
                          <th>Group</th>
                          <th>Picture</th>
                        </tr>
                  </thead>
                  <tbody>
                  @foreach($contacts as $contact)
                    <tr>
                      <td>1.</td>
                      <td>{{ $contact->name }}</td>
                      <td>{{ $contact->phone }}</td>
                      <td>{{ $contact->about }}</td>
                      <td>{{ $contact->email }}</td>
                      <td>{{  $contact->address }}</td>
                      <td>{{ $contact->facebook }}</td>
                      <td>{{ $contact->twitter }}</td>
                      <td>{{ $contact->linkedin }}</td>
                      <td>{{ $contact->group }}</td>
                      <td><img src="{{ asset($contact->picture) }}" height="80px" width="80px" alt="{{ $contact->name }}"></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
        <!-- /.card-body -->
</div>
    <script>
        window.print();
    </script>
</body>
</html>
