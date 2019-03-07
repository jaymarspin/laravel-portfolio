@extends("layout.app")

@section("content")

<style>
    .mycontainer{
        text-align: center;
        position: relative;
       
    }
    h1, #course-self{
        font-size:35px;
        width: 100%;
        text-align: center;
        display: block;
        margin-top: 10px;
        position: relative;
        color: #333;
    }
    #course-self{
        font-size: 16px;
    }
    .my2row{
        padding-left: 0;
        padding-right: 0;
        padding-top: 20px;
        padding-bottom: 20px;
        margin-top: 50px;
    }
    .my2row img{
        width: 100%;
        position: relative;
        height: auto;
    }
    .col{
        background-color: #f5f5f5;
        padding: 10px;
        padding-bottom: 23px;
        padding-top: 23px;
        border-radius: 10px;
        height: auto;
        overflow: hidden;
        
    }
    .col p{
        text-indent: 20px;
        text-align: left;
        width: 95%;
        display: block;
        margin: auto;
        font-size: 15px;
        margin-bottom: 20px;
    }
    .col h2{
        font-size: 25px;
    }
    .alert{
        width: 90%;
        position: relative;
        display: block;
        margin: auto;
    }
    span a{
        color: green;
    }
    span a:hover{
        color: green;
        text-decoration: underline;
    }
    .dater{
        float: left;
        clear: both;
        width: 100%;
        position: relative;
        display: block;
        height: auto;
        overflow: hidden;

    }
    

    .trans-back{
        width: 100%;
        height: 100%;
        background-color: #000;
        position: absolute;
        opacity: 0.5;
    }
    .col-border{
        width: 100%;
        clear: both;
        position: relative;
        padding: 0;
         margin-bottom: 20px;
    }
    .col-border img{
        width: 80%;
        height: 30px;
        margin: auto;
    }

    .showmore{
        width: 20%;
        color: #828282;
        padding: 15px;
        display: block;
        margin: auto;
        text-align: center;
        margin-bottom: 100px;
    }
    .showmore:hover{
        text-decoration: underline;
    }
    .article-design{
        position: relative;
        clear: both;
        width: 100%;
        margin-top: -25px;
        color: #333333;
    }
    .dater{
        height: auto;
        padding: 10px;
        padding-bottom: 0;
        width: 100%;
        overflow: hidden;
        position: relative;
        border-top: 1px solid #dedede;
        margin-top: 15px;
        text-align: center;
        color: #888;
    }
    .col-xl-3{
        margin-bottom: 10px;
        cursor: pointer;
    }
  
   

   .hexagon
{   overflow: hidden;
    -webkit-transform: rotate(120deg);
    -moz-transform: rotate(120deg);
    -o-transform: rotate(120deg);
    transform: rotate(120deg);
    cursor: pointer;
    float: left;
    
    filter: drop-shadow(4px 4px 4px  #000);
    position: relative;
    
}


.hexagon-in1
{   overflow: hidden;
    width: 100%;
    height: 100%;
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    transform: rotate(-60deg);
}

.hexagon-in2
{   width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-position: 50%;
    background-color: #000;
    visibility: visible;
    
    -webkit-transform: rotate(-60deg);
    -moz-transform: rotate(-60deg);
    -o-transform: rotate(-60deg);
    transform: rotate(-60deg);
}
p{
    position: relative;
    z-index: 100;
    color: #fff;
}



.hexagon2
{   width: 150px;
    height: 300px;
    margin: -55px 0 0 0px;
    
}

.wrapper{
    height: 190px;
    text-align: center;
    width: 150px;
    padding: 0px;
    float: left;
    margin-right: 1.5%;
    margin-bottom: 10px;
    cursor: pointer;
}
.text-wrapper{
  z-index: 5;
  position: absolute;
  text-align: center;
  width: 150px;
  top: 38px;
  color: #f5f5f5;
  font-size: 22px;

}
.col-6, .myrow{
    clear: both;width: 100%;
   
}
.myrow{
    margin-top: 30px;
}
.popup{
    width: 50%;
    position: fixed;
    left: 25%;
    top: 250px;
    height: 500px;
    z-index: 13;
    background-color: #fff;
    
    display: none;
}
.pop-left{
    width: 30%;
    height: 100%;float: left;
    clear: left;
    position: relative;
    border: 1px solid #000;
}
.pop-right{
    width: 69%;
    position: relative;
    height: 100%;
    overflow: hidden;
    padding: 20px;
    padding-left: 60px;
}
.pop-right h2{
    width: 100%;
    position: relative;
    clear: both;
    margin-bottom: 10px;

}
.pop-right p{
    color: #333;
    position: relative;
    clear: both;
    display: block;
}
.downloader{
    position: absolute;
    right: -50px;
    width: 100px;
    height: 100px;
    background-color: #000;
    border-radius: 50px;
    text-align: center;
    bottom: 200px;
    cursor: pointer;
    z-index: 5;
}
.downloader i{
    position: relative;
    top: 20px;
    cursor: pointer;
    color: #888;
}
.fa-download{
   
}
ul#stacks{
    float: left;
    width: 100%;
    position: relative;
    clear: both;
    height: auto;
    padding: 10px;
    padding-left: 0px;
    list-style-type: none;
}
li.stacks-holder{
    position: relative;
    float: left;
    padding: 5px;
    border-radius: 5px;
    background-color: pink;
    margin-right: 5px;
    cursor: pointer;
    

}
#close{
    text-decoration: underline;color: red;width: 100%; text-align: right;display: block;clear: both;top: -15px;position: relative;margin-bottom: -15px;right: -15px;
}
#popup-foot{
    width: 100%;
    clear: both;
    position: absolute;
    bottom: 20px;
    left: 0px;
    padding-left: 60px;
}
#popup-foot ul{
    padding: 0px;
    float: left;
    clear: left;
    list-style-type: none;

}
#popup-foot ul li{
    display: inline-block;
    margin-right: 10px;

}
#popper-back{
    display: block;
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: #000;
    left: 0px;
    top: 0px;
    opacity: 0.7;
    z-index: 12;
    display: none;
}



#popper-back, .fixedHead{
    left: 300px;
}

#self{
    width: 500px;
    height: 500px;
}

    </style>

    <script type="text/javascript">

        $(function(){
            $(".col-xl-3, #popup-close, #popper-back").click(function(){
                
                
                $("#popper-back").fadeToggle() 
                $(".popup").fadeToggle() 
            
            }) 
        })
    </script>
    
    @include("admin.admin-nav")
    <div id="popper-back"></div>
    <div class="row popup" style="padding: 0">

        <div class="pop-left">
            
        <img style="width: 100%;height:100%;" src="{{asset('images/15838.jpg')}}">
        <div class="downloader" title="download source code and manual"><i class="fa fa-download fa-3x"></i></div>
            
        </div>
        <div class="pop-right">
            <div id="close" style=""> 
                <div style="cursor: pointer;float: right;clear: right;" id="popup-close">Close</div>

            </div>
            <h2>Sample Amazing title</h2>
            <div id="built"><span>Built on</span></div>
            <ul id="stacks">
                <li class="stacks-holder"><span>Html</span></li>
                <li class="stacks-holder"><span>Html</span></li>
                <li class="stacks-holder"><span>Html</span></li>
                <li class="stacks-holder"><span>Html</span></li>
                <li class="stacks-holder"><span>Html</span></li>
                <li class="stacks-holder"><span>Html</span></li>
                

            </ul>
            <p> 2018] 127.0.0.1:3963 [200]: /images/border.jpg
                    [Wed Dec 19 10:23:03 2018] 127.0.0.1:3964 [200]: /fonts/fontawesome-webfont.woff2?v=4.7.0
                    [Wed Dec 19 10:23:03 2018] 127.0.0.1:3967 [200]: /favicon.ic</p>

             <div id="popup-foot">
                <ul><li><i class="fa fa-download"></i> 1051 downloads </li>
                    

                </ul>
             </div>
        </div>
    </div>
    <div class="row myrow">
        <div class="col-1">
        </div>
        <div class="col-5">
            <img id="self" src="{{asset('images/20181216_110005.png')}}">
            <h1>Jaymar Saldivar Daligdig</h1>
            <h3 id="course-self">Computer Science Engr.</h3>
         
        </div>
        <div class="col-1">
            </div>
        <div class="col-5">
            <div class="row">
                <div class="col-12">
                    
                <div class="wrapper"><div class="text-wrapper"><i class="fa fa-globe fa-3x"></i><br />Web Design</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #8B3E2F"></div></div></div> </div>
                
                <div class="wrapper"><div class="text-wrapper"><i class="fa fa-picture-o fa-3x"></i><br />Photoshop</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #2F4F4F"></div></div></div> </div>
                
                <div class="wrapper"><div class="text-wrapper"><i class="fa fa-laptop fa-3x"></i><br />Programming</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #2B2B2B"></div></div></div> </div>
                </div>
                <div class="col-12">
                        
                    <div class="wrapper"><div class="text-wrapper"><i class="fa fa-keyboard-o fa-3x"></i><br />Software Dev.</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #8B008B"></div></div></div> </div>
                    
                    <div class="wrapper"><div class="text-wrapper"><i class="fa fa-database fa-3x"></i><br />Databases</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #483D8B"></div></div></div> </div>
                    
                    <div class="wrapper"><div class="text-wrapper"><i class="fa fa-paint-brush fa-3x"></i><br />Arts</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #8B4500"></div></div></div> </div>
                    </div>
                    <div class="col-12">
                            
                        <div class="wrapper" style="opacity: 0"><div class="text-wrapper"><i class="fa fa-globe fa-3x"></i><br />Photoshop</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #363636"></div></div></div> </div>
                        
                        <div class="wrapper"><div class="text-wrapper"><i class="fa fa-lightbulb-o fa-3x"></i><br />Tutorials</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #00688B"></div></div></div> </div>
                        
                        <div class="wrapper" style="opacity: 0"><div class="text-wrapper"><i class="fa fa-globe fa-3x"></i><br />Photoshop</div><div class="hexagon hexagon2"><div class="hexagon-in1"><div class="hexagon-in2" style="background-color: #363636"></div></div></div> </div>
                        </div>
            </div> 
        </div>
        
    </div>
<div class="container mycontainer">
    
    <div class="row my2row">
            <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
            <div class="col-md-12 col">
                    <img src="{{asset('images/15838.jpg')}}" />
                    <div class="article-design">
                        <i class="fa fa-envelope fa-3x"></i>
                    </div>
                    <h2>2go express approved</h2>
                  
                        <div class="dater">
                            <span>Friday, 23 of september 2018</span>
                        </div>
            </div>
                
            
            </div>
            <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                <div class="col-md-12 col">
                        <img src="{{asset('images/15838.jpg')}}" />
                        <div class="article-design">
                            <i class="fa fa-envelope fa-3x"></i>
                        </div>
                        <h2>2go express approved</h2>
                      
                            
                           
    
                            <div class="dater">
                                <span>Friday, 23 of september 2018</span>
                            </div>
                </div>
                    
                
                </div>
                <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                    <div class="col-md-12 col">
                            <img src="{{asset('images/15838.jpg')}}" />
                            <div class="article-design">
                                <i class="fa fa-envelope fa-3x"></i>
                            </div>
                            <h2>2go express approved</h2>
                          
                                
                               
        
                                <div class="dater">
                                    <span>Friday, 23 of september 2018</span>
                                </div>
                    </div>
                        
                    
                    </div>
                    <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                        <div class="col-md-12 col">
                                <img src="{{asset('images/15838.jpg')}}" />
                                <div class="article-design">
                                    <i class="fa fa-envelope fa-3x"></i>
                                </div>
                                <h2>2go express approved</h2>
                              
                                    
                                   
            
                                    <div class="dater">
                                        <span>Friday, 23 of september 2018</span>
                                    </div>
                        </div>
                            
                        
                        </div>


                        <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                            <div class="col-md-12 col">
                                    <img src="{{asset('images/15838.jpg')}}" />
                                    <div class="article-design">
                                        <i class="fa fa-envelope fa-3x"></i>
                                    </div>
                                    <h2>2go express approved</h2>
                                  
                                        
                                       
                
                                        <div class="dater">
                                            <span>Friday, 23 of september 2018</span>
                                        </div>
                            </div>
                                
                            
                            </div>
                            <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                                <div class="col-md-12 col">
                                        <img src="{{asset('images/15838.jpg')}}" />
                                        <div class="article-design">
                                            <i class="fa fa-envelope fa-3x"></i>
                                        </div>
                                        <h2>2go express approved</h2>
                                      
                                            
                                           
                    
                                            <div class="dater">
                                                <span>Friday, 23 of september 2018</span>
                                            </div>
                                </div>
                                    
                                
                                </div>
                                <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                                    <div class="col-md-12 col">
                                            <img src="{{asset('images/15838.jpg')}}" />
                                            <div class="article-design">
                                                <i class="fa fa-envelope fa-3x"></i>
                                            </div>
                                            <h2>2go express approved</h2>
                                          
                                                
                                               
                        
                                                <div class="dater">
                                                    <span>Friday, 23 of september 2018</span>
                                                </div>
                                    </div>
                                        
                                    
                                    </div>
                                    <div class="col-xl-3 col-sm-12 col-md-6 col-xs-12 ">
                                        <div class="col-md-12 col">
                                                <img src="{{asset('images/15838.jpg')}}" />
                                                <div class="article-design">
                                                    <i class="fa fa-envelope fa-3x"></i>
                                                </div>
                                                <h2>2go express approved</h2>
                                              
                                                    
                                                   
                            
                                                    <div class="dater">
                                                        <span>Friday, 23 of september 2018</span>
                                                    </div>
                                        </div>
                                            
                                        
                                        </div>
        </div>
    </div>

    <div class="row showmore">
        <div class="col-12">
            <span>Show More</span><br />
            <i class="fa fa-hand-o-up"></i>
        </div>
    </div>
</div>

@include("layout.clientFoot")
@endsection

