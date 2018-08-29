@extends('layouts.app')
@section('content')
        <script>
            $(window).ready(function(){
                $('.links a').css('border','2px solid #ffbc27');  
                $("#nav").css('background-color','#fbbb27');
                $("#nav").css('border-color','transparent');
                
                $('.links a').hover(function(){
                    $(this).css('border','2px solid white');
                    $(this).css('color','white');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    
                });   
               
                
                
            });
        </script>

        <script>
            $(window).on('scroll', function () {
            var pixs = $(document).scrollTop();
            if(pixs>50){
                $("#nav").css('background-color','white');
                $("#nav").css('border-color','#f3f5f6');
                $('.links a').css('border','2px solid white');  
                $('.links a').hover(function(){
                    $(this).css('border','2px solid #fbbb27');
                    $(this).css('color','black');
                },function(){
                    $(this).css('border','2px solid white'); 
                    $(this).css('color','black');
                    
                });   
               
                  
            }else{
              $("#nav").css('background-color','#fbbb27');
              $("#nav").css('border-color','transparent');
                $('.links a').css('border','2px solid #fbbb27');  
                $('.links a').hover(function(){
                    $(this).css('border','2px solid white');
                    $(this).css('color','black');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                     
                });   
                
                   
            } 
    });

    </script>
<div id='homepage'>
    <div id='big_screen'>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="/Recipes">
                    <div class='row Header11'>
                        <div class='header_nutrition_title'></div>
                        <div class='header_nutrition_sub_title'></div>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="/Nutrition">
                <div class='row Header1'>
                    <div class='header_nutrition_title'>营养价值</div>
                    <div class='header_nutrition_sub_title' style="margin:50px 300px;">
                        鸡蛋是营养最丰富的天然食品之一。一个大号鸡蛋仅含70卡路里，却饱含大量营养。
                    </div>
                </div>
            </a>
            </div>
            <div class="item">
                <a href="/Eggforbabies">
                    <div class='row Header2'>
                        <div class='header_nutrition_title'>宝宝与鸡蛋</div>
                        <div class='header_nutrition_sub_title' style="margin:50px 300px;">
                            现在您可以从宝宝6个月大开始喂食全蛋，可有助预防鸡蛋过敏。
                        </div>
                    </div>
                </a>
            </div>
          </div>
        </div>
        <script>
            $('.carousel').carousel({
              interval: 3000
            })
        </script>


        <div class='container-fluid FeaturedRecipe_parent clear-both'>
            <br><br>
            <div class='FeaturedRecipe'>
                <div class='title'>精选食谱<br><br></div>
                <div class='row'>
                    <div class='col-sm-6 '>
                        <a href="/Steamed-crab-claw-with-egg-whites">
                            <img src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
                        </a>
                         <div class='sub_title'>白玉蒸蟹钳</div>
                         <div class='right_body'>
                                这道菜结合了蒸蟹的鲜美和蛋白的嫩滑。一些人认为蛋白才是这道菜的精髓，若其烹调时间恰到好处，将带来无“蟹”可击的细腻口感。
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <a href="/Gldn-Omlet">
                            <img src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
                        </a>
                         <div class='sub_title'>黄金虾仁蛋包饭</div>
                         <div class='right_body'>
                                我们提供了一个享用炒饭的独特方式。您可以把此做法运用在任何炒饭，效果同样出色。简单的翻锅使蛋饼翻转可呈现金黄色的外观。
                        </div>
                       <!--  <div class='col-sm-12 getTheRecipe'>
                            <a href="/Funny-Egg-Fish" id='getTheRecipe'> 瀏覽食谱 </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class='BBQ_parent'>
            <div class="row summerBBQ">
                
                <div class='title'><b>全部中文食谱</b> </div>
                
                <div class='row'>
                   <div class='col-sm-6 col-lg-4'>
                                <a href="/breakfast">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                                    <div class='name'>早餐</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/soup">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
                                    <div class='name'>汤</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/appetizers">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
                                    <div class='name'>小食/前菜 </div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/main">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
                                    <div class='name'>主菜</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                               <a href="/dessert">
                                <img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
                                    <div class='name'>甜品</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/newest">
                                    <img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
                                    <div class='name'>最新食谱</div>
                                </a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class='col-xs-12 getTheRecipe_1 text-center'>
            <a href="/Recipes" id='getTheRecipe_1'> 浏览食谱 </a>
        </div>

    </div> 


    <div id='mobile_only'>
        <div class='mobile_header'>
            <div class='getTheRecipe_1 text-center'>
                <a href="/Recipes" id='getTheRecipe_1'> 浏览食谱 </a>
            </div>
        </div>
        <div class='FeaturedRecipe_parent clear-both'>
            <div class='FeaturedRecipe'>
               <div class='title'>精选食谱<br><br></div>
                <div class='row'>
                    <div class='col-sm-6 '>
                        <a href="/Steamed-crab-claw-with-egg-whites">
                            <img src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
                        </a>
                         <div class='sub_title'>白玉蒸蟹钳</div>
                         <div class='right_body'>
                                这道菜结合了蒸蟹的鲜美和蛋白的嫩滑。一些人认为蛋白才是这道菜的精髓，若其烹调时间恰到好处，将带来无“蟹”可击的细腻口感。
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <a href="/Gldn-Omlet">
                            <img src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
                        </a>
                         <div class='sub_title'>黄金虾仁蛋包饭</div>
                         <div class='right_body'>
                                我们提供了一个享用炒饭的独特方式。您可以把此做法运用在任何炒饭，效果同样出色。简单的翻锅使蛋饼翻转可呈现金黄色的外观。
                        </div>
                       <!--  <div class='col-sm-12 getTheRecipe'>
                            <a href="/Funny-Egg-Fish" id='getTheRecipe'> 瀏覽食谱 </a>
                        </div> -->
                    </div>
                </div>
                <div class='col-sm-12 getTheRecipe'>
                    <a href="/Funny-Egg-Fish" id='getTheRecipe'> 浏览食谱 </a>
                </div>
            </div>
        </div>
    
        
        <div class='BBQ_parent'>
            <div class=" summerBBQ">
        
                 <div class='title'><b>全部中文食谱</b> </div>
                
                <div class='row'>
                   <div class='col-sm-6 col-lg-4'>
                                <a href="/breakfast">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                                    <div class='name'>早餐</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/soup">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
                                    <div class='name'>汤</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/appetizers">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
                                    <div class='name'>小食/前菜 </div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/main">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
                                    <div class='name'>主菜</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                               <a href="/dessert">
                                <img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
                                    <div class='name'>甜品</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/newest">
                                    <img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
                                    <div class='name'>最新食谱</div>
                                </a>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class='col-xs-12 getTheRecipe_1 text-center'>
            <a href="/Recipes" id='getTheRecipe_1'> 浏览食谱 </a>
        </div>
        
    </div>   
</div>
@endsection
