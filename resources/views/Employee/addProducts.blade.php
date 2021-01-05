<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">DashBoard</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="{{route('employee.index')}}" class="btn btn-primary">Dashboard</a>
			<a href="{{route('employee.create')}}" class="btn btn-success">Add Products</a>
			<a href="{{route('logout.index')}}" class="btn btn-danger">Logout</a>		
        </div>
        
        <div class="center">
            <form class="form-horizontal form-material" method="POST" action="{{route('employee.store')}}">
                {{csrf_field() }}
                <div class="form-group">
                    <h4 class="text">Product Name:</h4> 
                    <input type="text" class="form-control" name = "name">
                </div>
                <div class="form-group">
                    <h4 class="text">Quantity</h4> 
                    <input type="text" class="form-control" name = "quantity">
                </div>
                <div class="form-group">
                    <h4 class="text">Price</h4> 
                    <input type="text" class="form-control" name = "price">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-success" name = "add_product" value="Add Product" class="form-control">
                </div>
            </form>
        </div>
        
<footer class="footer">
            <h4>Final Lab Exam</h4>
        </footer>
        
    </body>
</html>