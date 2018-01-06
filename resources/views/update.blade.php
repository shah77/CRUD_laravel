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
	

			

	<form class="form-horizontal" method="post" action=" {{ url('/edit', array($articles->id)) }} ">
		{{csrf_field()}}
		<fieldset>

		    <center><h2><b>Update Form</b></h2></center>
		    @if(count($errors)>0)
		      @foreach($errors->all() as $error)

		      <div class="alert alert-danger">
                {{$error}}
		      </div>

		      @endforeach
		    @endif
		    <div class="form-group">
		      <label for="exampleInputEmail1">Title</label>
		      <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" value="<?php echo $articles->title; ?>" placeholder="Enter title">
		     
		    </div>
		    <div class="form-group">
		      <label for="exampleInputEmail1">Description</label>
		      <textarea type="text" name="description" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter discription"><?php echo $articles->description; ?></textarea>
		    
		    </div>
            <center><button type="submit" class="btn btn-primary">Update</button>
		    <a href="{{ url('/') }}" class="btn btn-primary">Back</a></center>
		    


		</fieldset>
	</form>
		  
</div>
</div>
</body>
</html>