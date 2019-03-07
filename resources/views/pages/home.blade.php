@extends("layout.app")

@section("content")

<link rel="stylesheet" type="text/css" href="{{asset('css/client/main.css')}}">
<script type="text/javascript">

    $(function(){

      
        var page = 2;
        $(".my2row").click(".col-xl-3, #popup-close, #popper-back",function(){
        }) 

        $(".my2row").load("work_wrap",function(){
           <?php if($data != null) echo "var scroll = ".$data.";";
                  else  echo "var scroll = 0;";
           ?>
          if(scroll == 1){
            $('html, body').animate({
              scrollTop: ($(".mycontainer").offset().top) - 200
            }, 1500);
          }
        })

        $("#show").click(function(){
            $.get("work_wrap",{page: page},function(data){
                $(".my2row").append(data)
                page += 1;
            })

        })

        $(".mobile-nav i").click(function(){
          $("#work-category-nav ul").fadeToggle(100)
        })

        $(".clip-each").click(function(){
          var stack = $(this).attr("id")
          var topic = this.innerHTML
          topic = topic.toString().substring(topic.toString().lastIndexOf("</i>")+5)
          tmp = topic.trim().length
          topic = topic.toString().trim().substr(0,(tmp - 6));
          $("#impress-i").removeClass();
          var background = $(this).css("background-color")
         
          $("#pop-impress, #content-head").css({"background-color": background})
          $("#content-submit").css({"background-image": "linear-gradient("+background+", "+background+", #333)"})
       
          switch(topic){
            case "Web Dev.":
              $("#impress-i").addClass("fa fa-globe");
              $("#impress-title").text("Web Development")
              $("#content-head span").text("Talk to me about Web Development")


              $(".mb-0").text("awdawda")
              
              
              break;
            case "App Design":
              $("#impress-i").addClass("fa fa-paint-brush");
              $("#impress-title").text("App Design")
              $("#content-head span").text("Talk to me about App Design")
              $(".mb-0").text("awdawda")
              break;
            case "Software Dev.":
              $("#impress-i").addClass("fa fa-desktop");
              $("#impress-title").text("Software Development")
              $("#content-head span").text("Talk to me about Software Development")
              $(".mb-0").text("awdawda")
              break;
            case "Mobile Dev.":
              $("#impress-i").addClass("fa fa-mobile");
              $("#impress-title").text("Mobile Development")
              $("#content-head span").text("Talk to me about Mobile Development")
              $(".mb-0").text("awdawda")
              break;
            case "Programming":
              $("#impress-i").addClass("fa fa-laptop");
              $("#impress-title").text("Programming")
              $("#content-head span").text("Talk to me about Programming")
              $(".mb-0").text("awdawda")
              break;
            case "Databases":
              $("#impress-i").addClass("fa fa-database");
              $("#impress-title").text("Databases")
              $("#content-head span").text("Talk to me about Databases")
              $(".mb-0").text("awdawda")
              break;
            
          }
          $("input[type='text']#topic").val(topic)
          $("#trans").fadeIn(300)
          $("#popup").fadeIn(300)
        })




        $("#trans").click(function(){
          var stack = $(this).attr("id")
          
          $("#trans").fadeOut(300)
          $("#popup").fadeOut(300)
        })
        
        

        $("#work-category-nav ul li").click(function(){
          
          $(".my2row").html(null)
          $("#loadingscreen").fadeIn(100)

          var category = $(this).html()
          $.get("work_wrap",{category: category},function(data){
            $(".my2row").html(data)
            $(".showmore, #loadingscreen").fadeOut(0)
          })
          
        
          
          
        })
    })
</script>
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 
<style type="text/css">
    .myrow{
    background-image: url('{{asset("images/JAYBACK.png")}}');
    }
</style>
<div id="trans">

</div>
<div id="popup">
  <div id="pop-impress">
    <i id="impress-i" class="fa fa-facebook"></i>
    <span style="" id="impress-title">Web Development</span>
  </div>
  <div id="pop-content">
  <div class="content left">
    <blockquote class="blockquote text-center">
<p class="mb-0">I smart,creative and well oriented person, can fluently communicate in English, I have been a virtual assistant and a call center before it brought me foundation how being a call center agent and a virtual assistant is being done. I'm also a graduate of computer science that lead me to having a programming skills.</p>
<footer class="blockquote-footer">Jaymar Daligdig</footer>
</blockquote>

  </div>
  <div class="content right">
  <div id="content-head">
  <span>Talk to me about web development</span>
  </div>
  <form action="{{url('/message')}}" id="content-form" method="POST">
    <div style="display: none;">{{!! csrf_field() !!}}</div>
    <div class="input-group">
    <ul>
      <li><i class="fa fa-mobile"></i><input type="text" placeholder="Email or Watsap # or etc" name="person" class="form-control"/></li>
      <li style="display: none"><i class="fa fa-mobile"></i><input type="text" placeholder="" name="topic" id="topic" class="form-control"/></li>
      <li><i class="fa fa-envelope"></i><textarea rows="5" name="message" class="form-control" placeholder="Message"></textarea></li>
      <li><input type="submit" value="Submit" id="content-submit"></li>
      
    </ul>
    </div>
  
  </form>

  </div>
  </div>
 
  </div>
</div>
<div class="row myrow" >
    
   
        <div id="self-holder">
        <img id="self" src="{{asset('images/20181216_110005.png')}}">
        <h1>Jaymar Saldivar Daligdig</h1>
        <h3 id="course-self">Computer Science Engr.</h3>
        </div>
   
   
        
{{--                
            <div class="categories">
                <div class><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #8B3E2F"></div></div></div><div class="text-wrapper"><i class="fa fa-globe fa-3x"></i><br />Web Design</div> </div>
            </div>   --}}
          
            <div id="talent-holder">
                    <div class="clip-block">

                            <a href="#" class="clip-each clip-gradient" id="web" style="">
                                <div class="shadow">
                                </div>
                                    <div class="clip-caption">
                                      <i class="fa fa-globe">
                                      </i>
                                      Web Dev.</div>
                                      
                            </a>
                            <a href="#" class="clip-each clip-gradient" id="appdesign" style="background-color: #105066">
                                <div class="clip-caption">
                                  <i class="fa fa-paint-brush">
                                  </i>
                                  App Design</div>
                        </a>
                        <a href="#" class="clip-each clip-gradient" id="software" style="background-color: #666110">
                            <div class="clip-caption">
                              <i class="fa fa-desktop">
                              </i>
                              Software Dev.</div>
                    </a>
                    <a href="#" class="clip-each clip-gradient" id="mobile" style="background-color: #070221">
                        <div class="clip-caption">
                          <i class="fa fa-mobile">
                          </i>
                          Mobile Dev.</div>
                </a>
                <a href="#" class="clip-each clip-gradient" id="programming" style="background-color: #262335">
                    <div class="clip-caption">
                      <i class="fa fa-laptop">
                      </i>
                      Programming</div>
            </a>
            <a href="#" class="clip-each clip-gradient" id="databases" style="background-color: #4f2202">
                <div class="clip-caption">
                  <i class="fa fa-database">
                  </i>
                  Databases</div>
        </a>
   
                    </div>
                 
                 
            
            </div>
    </div>
    
</div>
<style type="text/css">
    
  </style>
<div class="container mycontainer">
<div class="row-label">
  <div class="title">
      Works
    </div>
</div>
<div id="work-category-nav">
  <div class="mobile-nav">
    Works
    <i class="fa fa-list">
    </i>

  </div>
    <ul>
      <li>Web Development</li>
      <li>Software Dev.(Desktop)</li>
      <li>Mobile Dev</li>
      <li>Database</li>
      <li>Photoshop</li>
    </ul>
</div>
<div id="loadingscreen">
<img src="{{asset('images/Infinity-6.4s-200px.gif')}}" />
</div>
<div class="row my2row">

        

    </div>

<div class="row showmore">
    <div class="col-12">
        <span id="show">Show More</span><br />
        <i class="fa fa-hand-o-up"></i>
    </div>
</div>
</div>

@include("layout.clientFoot")
@endsection

