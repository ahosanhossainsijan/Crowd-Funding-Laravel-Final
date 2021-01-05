@extends('layouts.User_layout')
@section('title','Contact Admin')
@section('content')

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Contact Admin
            </h1>
			<div class="form-group">
					<span></span>
				</div>
            
        <form name="myForm" action="" onsubmit="return validateForm()"method="post" enctype="multipart/form-data">
            <input type="hidden" id="token" name="_token" value={{ csrf_token() }}>
            <div class="form-group">
                <label>Problem Statement:</label>
                <input type="text" class="form-control" id ="des" name="des" value="{{old('des')}}">
                <span id="err_des" style="color:red;">{{$errors->first('des')}}</span>
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="text" class="form-control" id ="udate" name="udate" value="{{old('udate')}}">
              </div>
              <div class="form-group"> 
                <input type="submit" class="btn btn-primary" id="create" name="create" value="Post">
            </div>
        </form>
@endsection

    <script type="text/javascript">
    function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x != "") {
    alert("Wait for admin response");
    return true;
  }
}
</script>