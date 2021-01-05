@extends('layouts.User_layout')
@section('title','Running Campaigns')
@section('content')

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Campaings
    </h1><br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" name="see" id="see">
                        <option value="" selected>All</option>
                        <option value="InValid">InValid</option>
                        <option value="Verified" >Verified</option>
                        <option value="Blocked" >Blocked</option>
                        <option value="Complete" >Complete</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
            <input type="hidden" id="token" name="_token" value={{ csrf_token() }}>
        <input type="text" name="search" id="search" placeholder="Search Campaings">
        </div>
    </div><br>

            <div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>User Name</td>
                        <td>Users Email</td>
                        <td>Campaing Title</td>
                        <td>Requested Fund</td>
                        <td>Raised Fund</td>
                        <td>Published Date</td>
                        <td>End Date</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id = "suggestion">
                    <div class="col-md-8">
                        @foreach($campaigns as $campaign)
                            <tr>
                                <td>{{$campaign['username']}}</td>
                                <td>{{$campaign['email']}}</td>
                                <td>{{$campaign['title']}}</td>
                                <td>{{$campaign['tf']}}</td>
                                <td>{{$campaign['rf']}}</td>
                                <td>{{$campaign['pd']}}</td>
                                <td>{{$campaign['ed']}}</td>
                                <td>
                                    @if($campaign['status'] == 1)
                                        Verified
                                    @elseif($campaign['status'] == 0)
                                        InValid
                                    @elseif($campaign['status'] == 3)
                                        Complete
                                    @else
                                        Blocked
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user.campaignedit',$campaign['id'])}}" class="btn btn-warning">View</a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
            </div>
</div>

<script type="text/javascript" src = "/js/campaign.js"></script>

@endsection