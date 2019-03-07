@extends("layout.app")

@section("content")

<link rel="stylesheet" type="text/css" href="{{asset('css/admin/tech.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/client/work.css')}}">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/client/work.css')}}"> --}}
<style>
  


</style>
<script>
    $(function(){


        var techData = $(".tech")

    for(var i = 0;i < techData.length;i++){
      var tmp = techData[i].innerText
      tmp = tmp.split(",")
      $(techData[i]).html(null)
      for(var x = 0;x < tmp.length;x++){
        var stacks = document.createElement("div")
        stacks.className = "stacks "+tmp[x].toLowerCase()
        stacks.innerText = tmp[x]

        $(techData[i]).append(stacks)

      }
    }
        var l = $(".thumbs").length
        var w = l * 60
        var t = 0
        
        // $("#thumb-holder").width(w+"px")
        // var slideval = -60;
        // setInterval(function(){
        //     $(".thumbs").animate({
        //         left: slideval+"px"
        //     },500)
            
            
        //     if(t >= (l - 8)){
        //         t -= 1
        //         slideval += 60
        //     }else{
                
        //         t += 1
        //         slideval -= 60
        //     }
        // },700)
    })
</script>
<div class="container">
<div id="images-wrapper">
        <div id="target-wrapper">
        <img id="img-target" class="img-fluid" src="{{asset('works_images/'.$works[0]->images[0]->imgname.'')}}">
        </div>
        <div id="thumb-img">
            <div id="thumb-holder">
                @foreach ($works[0]->images as $key => $item)    
                <img class="thumbs" src="{{asset('works_images/'.$item->imgname.'')}}" />
                @endforeach   
            </div>
        </div>
    </div>
<h1>{{$works[0]->title}}</h1>
<div class="tech">
{{$works[0]->technologies}}
</div>
<p>{{$works[0]->description}}</p>
<div class="actions" style="text-align: left">
    <span id="dater">Date Publicity: {{\Carbon\Carbon::parse($works[0]->created_at)->format('d M')}} of {{\Carbon\Carbon::parse($works[0]->created_at)->format('Y')}}</span>
</div>
<div class="actions">
    
    <nav class="action-button">
    <a href="{{$works[0]->code}}" target="_blank">
            <i class="fa fa-gear"></i>
            <strong>Get Source Code</strong>
        </a>
            
    </nav>
    <nav class="action-button">
        <a href="{{$works[0]->demo}}" target="_blank">
                <i class="fa fa-github"></i>
                <strong>View on Github</strong>
        </a>
    </nav>

    <nav class="action-button">
        <a href="{{$works[0]->url}}" target="_blank">
            <i class="fa fa-play"></i>
            <strong>Play Demo Video</strong>
        </a>
</nav>
</div>
</div>


</div>
@include("layout.clientFoot")


@endsection

