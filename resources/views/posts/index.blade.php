<h1>Post</h1>

<h2>All</h2>

<table>
  <tr>
    <th>id</th>
    <th>title</th>
    <th>image</th>
  </tr>
  @foreach($posts as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->title }}</td>
      <td>{{ $post->image }}</td>
    </tr>
  @endforeach
</table>

<h2>Create new post</h2>
  @if ($errors->any())
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

<form action="/posts" method="POST">
  {{ csrf_field() }}
  <div>
    <label>Title</label><br>
    <input type="text" name="title" />
  </div>

  <div>
    <label>画像</label><br>
    <input type="text" name="image" />
  </div>

  <div>
    <input type="submit" value="Create" />
  </div>
</form>


