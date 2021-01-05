@extends('layouts.User_layout')
@section('title','Report Campaign')
@section('content')

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Report Campaign
            </h1>
			<div class="form-group">
					<span></span>
				</div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" id="token" name="_token" value={{ csrf_token() }}>
            <div class="form-group">
                <label>Why do you want to report?:</label>
                <input type="text" class="form-control" id ="des" name="des" value="{{old('des')}}">
                <span id="err_des" style="color:red;">{{$errors->first('des')}}</span>
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="text" class="form-control" id ="udate" name="udate" value="{{old('udate')}}">
                <span id="err_udate" style="color:red;">{{$errors->first('udate')}}</span>
              </div>
              <div class="form-group"> 
                <input type="submit" class="btn btn-primary" id="create" name="create" value="Post">
            </div>
        </form>
@endsection

<script type="text/javascript">
    if(document.getElementById('create').clicked == true)
    {
       alert("Admin is Notified please wait for the response");
    }
</script>