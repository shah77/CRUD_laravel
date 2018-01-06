<!DOCTYPE html>
<html>
<head> 
  <title>Laravel crud</title>
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/nav.css') }}">
  <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
</head>
<body>

  <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="{{ url('/') }}">Laravel</a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a style="background: #b8bdc4;" href="{{ url('/') }}">Home</a>
        </li>
        <li>
          <a href="{{ url('/create') }}">Create</a>
        </li>
        
      </ul>
    </nav>
  </div>
</section>

	<div class="container">
		<br>
		<div class="row">

		
			@if(session('info'))

			     <div class="alert alert-success">
			     	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                     {{session('info')}}
		         </div>

			@endif

 <div class="row col-md-12 custyle">
    <table class="table table-striped custab">
    <thead>
   
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    @if(count($articles) > 0)
  	   @foreach($articles->all() as $article)
            <tr>
                  <td>{{ $article->id }}</td>
			      <td>{{ $article->title }}</td>
			      <td>{{ $article->description }}</td>
			     
                <td class="text-center">
                	<a class='btn btn-success btn-s' href='{{ url("/read/{$article->id}") }}'><span class="glyphicon glyphicon-list-alt"></span> Read</a>
                	<a class='btn btn-info btn-s' href='{{ url("/update/{$article->id}") }}'><span class="glyphicon glyphicon-edit"></span> Edit</a>
                	<a href='{{ url("/delete/{$article->id}") }}' class="btn btn-danger btn-s"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
            </tr>
        @endforeach
    @endif

    </table>
    </div>


</div>
</div>


		
</body>
</html>