@extends("admin.admin-head")

@section("content")
@include("admin.admin-nav")
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/works.css')}}">
<div class="row mycontainer time">
</div>
<style>
    table{
        margin: auto;
        margin-top: 100px;
      
       
        width: 100%;
    }
</style>
<div class="container">
    <h1>Messages</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Person</th>
            <th>Topic</th>
            <th>Message</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach ($messages as $key => $item)
                <tr>
                <td>{{($key + 1)}}</td>
                <td>{{$item['person']}}</td>
                <td>{{$item['topic']}}</td>
                <td>{{$item['message']}}</td>
                </tr>
            @endforeach
            <tr></tr>
        </tbody>
        
    </table>
    {{$messages->links()}}
</div>
@endsection