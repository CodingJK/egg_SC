@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
				$(".reciptes_link").css('color','#ffcd32');

			});
		</script>
	</script>
	<div id='recipes'>
      	<div class='big_screen_only'>
	      	<div class='container-fuild header' style="padding-top: 169px;">
		      	<div class='header_artical'>
		      		<div class='title'>食谱</div>
		      		<div class='sub_title'>
						浏览我们的多款鸡蛋食谱，用鸡蛋烹调出多姿多彩的菜式！无论是平日的美味早餐，周末的悠闲午餐，还是款待客人的精致美食，甚至是为孩子制作点心，您都能在这里找到心仪食谱，为每一餐找到美味「煮」意！
		      		</div>
		      	</div>	
		    </div>
	    	<div class='container-fluid Picnic_parent'>

				<div class='complete_parent'>
					
					<div class='complete'> 
						
						<div id='title_com' style="margin-top:60px;margin-bottom: 60px;">全部中文食谱</div>
						
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

						

						
						
						<br /><br /><br />
						
						<br /><br /><br />
					</div>
			
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop