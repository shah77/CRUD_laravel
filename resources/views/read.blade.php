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
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li>
          <a style="background: #b8bdc4;" href="{{ url('/create') }}">Create</a>
        </li>
        
      </ul>
    </nav>
  </div>
</section>


	<div class="container">
		<br>
	
			<center><h2>Read Article</h2></center>

			<h3 class="lead"><b>Title:</b> {{ $articles->title }} </h3>
		
			<p class="lead"><b>Description:</b> {{ $articles->description }}</p>
	
	

	

   </div>
		
</body>
</html>