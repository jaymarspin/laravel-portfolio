    <style>
        
    </style>
    <script type="text/javascript">
        $(function(){
            $(".col-md-12").mouseover(function(){
                $(this).find(".hover").animate({
                    "height": "100%"
                },400,function(){
                    $(this).find("span").css({"display": "block"})
                })
            })
            $(".hover").mouseout(function(){
                $(".hover").animate({
                    "height": "0px"
                },200,function(){
                    $(this).find("span").css({"display": "none"})
                })
            })
            
        })
    </script>

<?php $datetimeFormat = 'Y-m-d H:i:s'; 

            $date = new DateTime();
            ?>
            @foreach($works as $key => $rows)
                <?php 
                    $technologies = explode(",",$rows->id);
                ?>
            @foreach ($id_col as $item)
               @foreach ($technologies as $item2)
                   @if ($item == $item2)
                   <a class="col-xl-3 col-sm-12 col-md-6 col-xs-12 " href="work?work={{$rows->id}}">
                    
             
                    <div class="col-md-12 col">
                            
                            <img src="{{asset('works_images/'.$rows->images[0]->imgname.'')}}" />
                            <div class="article-design">


                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        <h2>{{ $rows->title }}</h2>
                          
                                <div class="dater">

                                <span>{{\Carbon\Carbon::parse($rows->created_at)->format('d M')}} of {{\Carbon\Carbon::parse($rows->created_at)->format('Y')}}</span>
                              
                                </div>
                                
                                <div class="hover">
                                        <span>Click for full information</span>
                                    <div class="trans-hover">
                                    </div>
                                    
                                        
                                    </div>
                    </div>
                        
                
                </a>
                   @else
                       
                   @endif
               @endforeach
                
            @endforeach
                

 <script type="text/javascript">
    $(function(){
      
        var l = {{sizeOf($works)}};
        <?php
            $i = sizeOf($works);
            $t = $i / 10;
            $tmp = $i % 10;
           
            
            if($page[0] == null){
                if(($i / 10) < 1){
                    echo "$('.showmore').fadeOut(0)";
                }
                
            }else{ 
                if($tmp != 0){
                    $t += 1;
                }
                if($page[0] >= $t){
                    echo "$('.showmore').fadeOut(0)";
                }
            }
        
        ?>
        
        
    })

 </script>           
            

     
            @endforeach

          