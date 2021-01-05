@extends('layouts.User_layout')
@section('title','Create New Campaigns')
@section('content')

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Create New Campaigns
            </h1>
			<div class="form-group">
					<span></span>
				</div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" id="token" name="_token" value={{ csrf_token() }}>
            <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" id ="title" name="title" value="{{old('title')}}">
                <span id="err_title" style="color:red;">{{$errors->first('title')}}</span>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}">
                <span id="err_description" style="color:red;">{{$errors->first('description')}}</span>
            </div>
            <div class="form-group">
                <label>Target Fund</label>
                <input type="text" class="form-control" id="targetfund" name="targetfund" value="{{old('targetfund')}}">
                <span id="err_targetfund" style="color:red;">{{$errors->first('targetfund')}}</span>
            </div>
            <div class="form-group">
                <label>Published date:</label>
                <input type="text" class="form-control" id="pdate" name="pdate" value="{{old('pdate')}}">
                <span id="err_pdate" style="color:red;">{{$errors->first('pdate')}}</span>
            </div>
            <div class="form-group">
                <label>End Date:</label>
                <input type="text" class="form-control" id="edate" name="edate" value="{{old('edate')}}">
                <span id="err_edate" style="color:red;">{{$errors->first('edate')}}</span>
            </div>

            <div class="form-group">
                <label>Image:</label>
                <input type="file" class="form-control" id="file" name="file">
                <h3 style="color:red;">{{session('errmsg')}}</h3>
                <span id="err_file" style="color:red;">{{$errors->first('file')}}</span> 
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="create" name="create" value="Create Campaign">
            </div>
        </form>

        

@endsection