@extends("admin.admin-head")

@section("content")
@include("admin.admin-nav")
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/works.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/admin/tech.css')}}">


<script type="text/javascript">
  $(function(){
    data = ""
    $(".fader-click").click(function(){
      $(".fader").fadeToggle()
    })
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
    


    $(".clear").click(function(){
      $(".form-control").val(null)
    })
    $("#select").click(function(){
      $("#stack_wrapper").fadeToggle()
  })
    $(".stacks, .stacks_hold .stacks").click(function(){

      var x = $(this).attr("class")
      var tmp = $(this).children(0).text()
      data = data+","+tmp
      x = x.toString()
      x = x.substring(x.lastIndexOf(" "))
      var newel = document.createElement("div")
      newel.className = "stacks "+x;
      newel.innerText = tmp

      $(".stacks_hold").append(newel)
      $(this).remove()
      $("#technology").val(data.substring(1))
      
      
    })
  })

  


</script>

<div class="row mycontainer time">
</div>
<div id="trans" class="fader fader-click">
</div>
<div id="popper" class="fader">
  <div id="close" style=""> 
                <div style="position: relative;float: left;left: 30px;color: #f5f5f5;">Adding New Work</div><div style="color: #FF6EB4;cursor: pointer;float: right;clear: right;padding-right: 20px;" id="popup-close" class="fader-click">Close</div>

            </div>

<style type="text/css">
  #select{
    cursor: pointer;
    float: left;
    position: relative;
    float: right;
    clear: right;
  }
  #select_stacks{
    float: right;
    position: relative;
    clear: right;
    width: 300px;
    text-align: right;
  }
  #stack_wrapper{
    float: left;
    position: absolute;
    background-color: #838B8B;
    width: 300px;
    height: auto;
    overflow: hidden;
    border-radius: 10px;
    padding: 5px;
    top: 22px;
    display: none;
    z-index: 5
  }
  #popper{
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  }
</style>
    <div class="row former">
      <div class="col-12">
        <form action="{{url('/store_work')}}" method="POST" enctype="multipart/form-data">

          <div style="display: none;">{{!! csrf_field() !!}}</div>
        <div class="form-group">
          <div class="control">
            <span>Title</span>
            <input type="text" class="form-control" name="title">
          </div>

          <div class="control">
            <span>Description</span>
            <textarea class="form-control" rows="3" name="description"></textarea>
          </div>


          <div class="control">
            <span>Technology used</span>
            <div id="select_stacks">
              <span id="select">Select <i class="fa fa-plus"></i></span>
              <div id="stack_wrapper">
                <div class="stacks css">
                  <span>CSS</span>
                </div>

                <div class="stacks html">
                  <span>HTML</span>
                </div>
                <div class="stacks javascript">
                  <span>javascript</span>
                </div>
                <div class="stacks php">
                  <span>PHP</span>
                </div>

                <div class="stacks java">
                  <span>java</span>
                </div>
                <div class="stacks mysql">
                  <span>MYSQL</span>
                </div>
                <div class="stacks cassandra">
                  <span>cassandra</span>
                </div>

                <div class="stacks javafx">
                  <span>javafx</span>
                </div>
                <div class="stacks nodejs">
                  <span>nodejs</span>
                </div>
                <div class="stacks jquery">
                  <span>jquery</span>
                </div>
                <div class="stacks android">
                  <span>Android Studio</span>
                </div>
                <div class="stacks angular">
                  <span>angular</span>
                </div>
                <div class="stacks photoshop">
                  <span>photoshop</span>
                </div>
              </div>
            </div>
            <div class="form-control stacks_hold" style="border: 1px solid #000;border: 1px solid #ccc;position: relative;height: auto;overflow: hidden;">
            </div>
            <input type="hidden" value="" class="form-control" id="technology" name="technology">
          </div>
          <div class="control">
            <span>Display Photos</span> 
            <input type="file" class="form-control" name="photos[]" multiple>
          </div>
          <div class="control">
            <span>Demo URL</span> 
            <input type="text" class="form-control" name="demo" multiple>
          </div>
          <div class="control">
            <span>Source Code URL</span> 
            <input type="text" class="form-control" name="code" multiple>
          </div>
          <div class="control">
            <span>Video Demo URL</span> 
            <input type="text" class="form-control" name="video" multiple>
          </div>


        </div>
        <div class="control">
          <ul>
            <li><input type="submit" class="btn btn-primary" value="Done" name=""></li>
            <li><input type="button" class="btn btn-success clear" value="Clear" name=""></li>
            <li><input type="button" class="btn btn-danger fader-click" value="Cancel" name=""></li>
          </ul>
        </div>
        </form>
      </div>
    </div>

  </div>
<div class="row mycontainer contain">
  <div class="col-12">
  <div class="row">
    <div class="col-3">
      <div class="card">
  
    <div class="card-img-top">
      <span>Downloaded List</span>
    </div>
  
  <div class="card-body"> 46 new Download for past 2 days </div>
</div>
    </div>

    <div class="col-3">
      <div class="card">
  
    <div class="card-img-top fader-click">
      <span>Add New</span>
    </div>
  
  <div class="card-body"> 46 new added work(s) for past 2 days </div>
</div>
    </div>
    
  </div>
</div>
<div class="col-12">
  <div class="row">
  <div class="col-12">

    @include("inc.messages")
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Description</th>
      <th>Technology used</th>
      <th>Demo</th>
      <th>Source Code</th>
      <th>Video</th>
      <th>Time Stamp</th>
      <th>Display Photos</th>
      
   
      <th># views</th>
     
    </tr>
  </thead>
  <tbody>


    @foreach($works as $key => $rows)

      <tr>
        <th scope="row">{{intval($key + 1)}}</th>
      <td>{{$rows['title']}}</td>
      <td>{{$rows['description']}}</td>
      <td class="tech">{{$rows['technologies']}} </td>
      <td><a href="{{$rows['demo']}}" target="_blank">{{$rows['demo']}}</a></td>
      <td><a href="{{$rows['code']}}" target="_blank">{{$rows['code']}}</a></td>
      <td><a href="{{$rows['url']}}" target="_blank">{{$rows['url']}}</a></td>
      <td>{{$rows['created_at']}}</td>
      
   
      <td><img src="{{url('/works_images/1550455294.jpg')}}" alt="Image"/></td>
      <td>500</td>
      </tr>
    @endforeach
  


   </tbody>
</table>
{{$works->links()}}
</div>
<div class="col-12"></div>
</div>
</div>
	</div>

@endsection