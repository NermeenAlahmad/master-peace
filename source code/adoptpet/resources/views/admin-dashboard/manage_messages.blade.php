@extends('admin-dashboard.layouts.master')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">

<!-- Basic Tables start -->
<section class="section pt-5">
    <div class="card table-responsive">
        <div class="card-header">
            <h4 class="card-title"> <i class="mdi mdi-account menu-icon"></i> Messages Table</h4>
            <p class="card-description"> Manage Messages </p>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="table1">
                <thead>
                    <tr>
                      <th> # </th>
                      <th> Name </th>
                      <th> Email </th>
                      <th> Message </th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                      @foreach ($messages as $message)
                      <tr>
                        <td> {{$message->id}} </td>
                        <td> {{$message->name}} </td>
                        <td> {{$message->email}} </td>
                        <td> {{$message->message}} </td>
                        <td><a href="{{route('message.destroy',['id'=>$message->id])}}" ><i class="mdi mdi-delete-forever menu-icon" style="color: black ; font-size: 25px ;" ></i></a></td>
                      </tr>
                      @endforeach


                  </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
