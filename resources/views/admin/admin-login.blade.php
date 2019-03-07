@extends("admin.admin-head")

@section("content")

<style type="text/css">
body{
    
}
form span{
    display: block;
    position: relative;
    margin-bottom: 10px;
}
form{
    width: 500px;
    height: 200px;
    position: relative;
    margin: auto;
    margin-top: 200px;
    text-align: center;
}
form input{
    margin-bottom: 5px;
    width: 100%;
    clear: both;
}
</style>
    <div id="wrapper">
    <form action="{{url('logs')}}" method="POST">
            @include("inc.messages")
        <span>Log on to access admin panel</span>
            <div style="display: none;">{{!! csrf_field() !!}}</div>
            <div class="form-group">
                <input type="text" placeholder="username" class="form-control" name="username" value="" />
                <input type="password" placeholder="password" class="form-control" name="password" value=""/>
                <input type="submit" placeholder="password" class="btn btn-primary" value="looks Good"/>
            </div>
        </form>
    </div>

@endsection