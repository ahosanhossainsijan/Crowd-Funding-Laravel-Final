@extends('layouts.User_layout')
@section('title','Dashboard')
@section('content')

<div class="col-md-8 donor">
    <a href="{{route('user.generateReport')}}" class="btn btn-success">Generate Report</a>
</div>

@if(session()->has('print'))
<div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
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
                        @foreach($camp as $campaign)
                            <tr>
                                <td>{{$campaign['title']}}</td>
                                <td>{{$campaign['target_fund']}}</td>
                                <td>{{$campaign['raised_fund']}}</td>
                                <td>{{$campaign['publisedDate']}}</td>
                                <td>{{$campaign['endDate']}}</td>
                                <td>
                                    @if($campaign['status'] == 1)
                                        valid
                                    @elseif($campaign['status'] == 0)
                                        InValid
                                    @elseif($campaign['status'] == 3)
                                        Complete
                                    @else
                                        Blocked
                                    @endif
                                </td>
                                
                            </tr>
                        @endforeach
                </tbody>
            </table>
            </div>
</div>
@else
        <div class="center">
            <h1 style="color:red">No Data Found!!!Maybe Remote Server isn't working</h1>
        </div>
    @endif

@endsection