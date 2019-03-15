<html>
<head>
    <style>

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
        <a href="" class="btn btn-success d-block mx-auto">Create Post</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col"># Pagination Bonus</th>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted by</th>
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Posts as $Post) <!--this passing Posts from controller-->
    <tr>
      <th scope="row">{{$Post->id}}</th> 
      <td>{{$Post->title}}</td>
      <td>{{$Post->User->id}}</td>
      <td>{{$Post->Created_at}}</td>
      <td>
        <form method="POST">
          @csrf
          @method
          <input href="" class="btn btn-info" value="View">
          <input href="" class="btn btn-primary" value="Edit">
          <input href="" class="btn btn-danger" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>