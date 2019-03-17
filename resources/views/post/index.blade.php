<html>
<head>
    <style>

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
        <a href="{{route('posts.create')}}" class="btn btn-success d-block mx-auto">Create Post</a>
        <table class="table">
  <thead>
    <tr>
      {{-- <th scope="col"># Pagination Bonus</th> --}}
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      {{-- <th scope="col">Posted by</th> --}}
      <th scope="col">Created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($Posts as $Post) <!--this passing Posts from controller-->
    <tr>
      {{-- <th scope="row">{{$Post->id}}</th>  --}}
      <td>{{$Post->id}}</td>
      <td>{{$Post->title}}</td>
      {{-- <td>{{$Post->user->name}}</td> --}}
      <td>{{$Post->created_at}}</td>
      <td>
      <a href="{{route('posts.show',[$Post->id])}}" class="btn btn-info">View</a>
        <a href="{{route('posts.edit',[$Post->id])}}" class="btn btn-primary">Edit</a>
        <form method="POST" action="{{route('posts.destroy',$Post->id)}}">
          @csrf
          @method('DELETE')
          <!-- <button class="btn btn-info">View</button>
          <button class="btn btn-primary">Edit</button> -->
          <button type="submit" class="btn btn-danger"onclick="return confirm('Do you really want to delete this entry?');">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    <div>
    {{ $Posts->links() }}
    </div>
  </tbody>
</table>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>