<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{asset('dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}" />
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('Popper.js')}}"></script>
    
        
    </head>
    <style type="text/css">
        body{
            background-color: #fff;
        }
        #caret-up{
            text-align: center;
            background-color: #ccc;
            width: 100px;
            height: 90px;
            position: fixed;
            z-index: 11;

            right: 100px;
            bottom: 20px;
            opacity: 0.5;
            border-radius: 5px;
            cursor: pointer;
            
        }
        #caret-up i{
            font-size: 90px;
            line-height: 90px;
        }
        #caret-up:hover{
            opacity: 1;
            transition: all 0.5s;
        }

        @media (max-width: 675px){
            #caret-up{
            
            width: 30px;
            height: 30px;
            position: fixed;
       

            right: 10px;
           
            
        }
        #caret-up i{
            font-size: 100%;
            line-height: 100%;
        }
        }
    </style>
    <script>
        $(function(){
          
           $("#caret-up").click(function(){
     
           $('html, body').animate({
               scrollTop: 0 }, 800);
           })

        })
    </script>
    <body>
            @include("layout.clientNav")
            <div id="caret-up" title="Go back to top">
                    <i class="fa fa-caret-up"></i>
                </div>
        @yield("content")
      
        
      <script type="text/javascript" src="{{asset('dist/js/bootstrap.min.js')}}"></script>

    </body>
</html>
