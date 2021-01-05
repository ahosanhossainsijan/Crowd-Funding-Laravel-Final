@extends('layouts.User_layout')
@section('title','Donation History')
@section('content')

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Donation's History
    </h1><br><br>
            <div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>User Name</td>
                        <td>Campaing Title</td>
                        <td>Donation Amount</td>
                        <td>Donated Date</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id = "suggestion">
                    <div class="col-md-8">
                        @foreach($donations as $donation)
                            <tr>
                                <td>{{$donation['username']}}</td>
                                <td>{{$donation['title']}}</td>
                                <td>{{$donation['amount']}}</td>
                                <td>{{$donation['ud']}}</td>
                                
                            </tr>
                        @endforeach
                </tbody>
            </table>
            </div>
</div>

@endsection