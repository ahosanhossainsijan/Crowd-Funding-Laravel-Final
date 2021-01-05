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
            <h3 class="text">All products</h3>
            <table class="table table-striped">
                <thead>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th></th>
                    <th></th> 
                </thead>
                    @foreach($products as $product)
                        <tbody>
                            <td>{{$product['name']}}</td>
                            <td>{{$product['quantity']}}</td>
                            <td>{{$product['price']}}</td>
                            <td><a href="{{route('employee.show',$product['id'])}}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{route('employee.deleteProduct',$product['id'])}}" class='btn btn-danger'>Delete</td>
                        </tbody>
                    @endforeach
            </table>
        </div>
        
        
<footer class="footer">
            <h4>Final Lab Exam</h4>
        </footer>
        
    </body>
</html>