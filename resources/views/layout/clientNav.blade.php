<style type="text/css">
    #nav{
        background-image: linear-gradient(#1f5fc6, #25467c, #05142d);
        height: 70px;
        width: 100%;
        z-index: 99;
        
        
    }
    ul#navUl{
        list-style-type: none;
        padding: 0;
        display: block;
        float: right;
        clear: right;
        position: relative;
        right: 16%;
        z-index: 99;

    }
    ul#navUl li{
        display: inline-block;
        line-height: 70px;
        margin-right: 20px;
        padding-left: 8px;
        padding-right: 8px;
    }
    ul#navUl li a{
        color: #f5f5f5;
    }
    
    img{
        display: block;
        position: relative;
        margin: auto;
        width: 200px;
        height: 150px;
        
    }
    #head{
        background-image: url("{{asset('images/surface_dark_background_texture_50754_1280x720.jpg')}}");
        width: 100%;
        height: auto;
        overflow: hidden;
        background-size: cover;
        height: 100px;
    }
    ul#social{
        float: left;
        clear: left;
        position: relative;
        padding: 0;
        height: auto;
        overflow: hidden;
        left: 22%;
    }
    ul#social li{
        display: inline-block;
        position: relative;
        line-height: 80px;
        margin-right: 20px;

    }
    ul#social li a{
        color: #ccc;
    }
    ul#social li a:hover{
        text-decoration: none;
        color: #fff;
        transition: all 0.5s;
    }
    .fixedHead{
        position: fixed;
        top: 0px;
    }
    .headFade{
        opacity: 0;
        transition: all 0.3s;
    }
    #mobile-nav{
        display: none;
        color: #f5f5f5;
        float: right;
        clear: both;
        line-height: 70px;
        background-image: linear-gradient(#5b626d, #262a30, #07090c);
        position: relative;
        cursor: pointer;
        width: 100%;
        text-align: center;
        

    }

    @media (min-width: 768px) and (max-width: 1024px) {
  
    ul#social{
        left: 5%;
    }
    ul#navUl{
        right: 5%;
    }
    }
    @media (max-width: 700px){
        ul#social{
           
            position: relative;
            left: 0;
            padding-left: 17px;
           
        }
        ul#navUl{
            right: 0;
            width: 100px;
            position: absolute;
        }
        ul#navUl li{
           width: 100%;
           text-align: center;
           background-color: #1a1d23;
           display: none;

        }
        #mobile-nav{
        display: block;
        background-color: #0e0f11;

    }
        
    }
  

</style>
    <script type="text/javascript">

        $(function(){
            
            $(window).scroll(function(){
                var x = $(window).scrollTop()
                
                if($(window).scrollTop()){
                    $("#nav").addClass("fixedHead")
                    $("#head").addClass("headFade")
                }else{
                    $("#nav").removeClass("fixedHead")
                    $("#head").removeClass("headFade")
                }
            })

            $("#mobile-nav").click(function(){
                $("ul#navUl li").fadeToggle(100)
            })
        })
    </script>
<div id="head">
</div>
<div id="nav">
        <ul id="social">
            <li> <a href="https://www.facebook.com/wazak.elabong" target="_blank"><i class="fa fa-facebook fa-2x"></i>&nbsp</a></li>
            <li> <a href=""><i class="fa fa-twitter fa-2x"></i>&nbsp</a></li>
            <li> <a href=""><i class="fa fa-instagram fa-2x"></i>&nbsp</a></li>

        </ul>

        <ul id="navUl">
            <i class="fa fa-list fa-2x" id="mobile-nav" title="menu"></i>
        <li><a href="{{url("/home")}}">Home</a></li>
        <li><a href="home?workScroll=1">Works</a></li>
           
                <li><a href="{{ asset('resume.pdf') }}">Resume</a></li>
                
        
            </ul>

    
</div>