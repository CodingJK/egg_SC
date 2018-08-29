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
	      	<div class='container-fuild header'>
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
						
						<div id='title_com' style="margin-top:60px;margin-bottom: 60px;">小食/前菜</div>
						
						<div class='row'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Funny-Egg-Fish">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-13-Final-web.jpg' />
									<div class='name'>趣味小蛋鱼</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Boiled-Egg-Oolong-Tea">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-14-Final-web.jpg' />
									<div class='name'>乌龙茶叶蛋</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Moo-Shu-pork-wok-fried">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-27-Final-web.jpg' />
									<div class='name'>
										金丝木须肉夹饼
									</div>
								</a>
							</div>
						
							<div class='col-sm-6 col-lg-4'>
								<a href="/Foie-gras-roulade-with-egg-sheet-and-nori">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
									<div class='name'>紫菜鹅肝蛋皮卷</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/egg-and-veggie-salad-rolls-with-sweet-heat-dipping-sauce">
									<img class='recipes_img' src='/images/recipes/Egg-and-Veggie-Salad-Rolls-with-Sweet-Heat-Dipping-Sauce-small_r.jpg' />
									<div class='name'>越式鸡蛋生菜沙拉卷配甜辣酱</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/curried-egg-and-potato-salad">
									<img class='recipes_img' src='/images/recipes/Curry-Egg-and-Potato-Salad-small_r.jpg' />
									<div class='name'>咖喱土豆蛋沙拉</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/scallion-and-corn-pancake">
									<img class='recipes_img' src='/images/recipes/Scallion-and-Corn-Pancake-small_r.jpg' />
									<div class='name'>香葱玉米薄饼</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/smoked-salmon-fritters-with-dill-cream-cheese">
									<img class='recipes_img' src='/images/recipes/Smoked-Salmon-Fritters-with-Dill-Cream-Cheese-small_r.jpg' />
									<div class='name'>莳萝奶油奶酪三文鱼脆脆饼</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/lobster-devilled-eggs">
									<img class='recipes_img' src='/images/recipes/Lobster-Devilled-Eggs-small_r.jpg' />
									<div class='name'>龙虾魔鬼蛋</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
							</div>

						
						</div>

						

						
						
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href="http://www.eggs.ca/recipes" id='ViewAll'> 瀏覽食谱 </a>
						</div>
						<br /><br /><br />
					</div>
			
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop