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
	      	<!-- <div class='container-fuild header'>
		      	<div class='header_artical'>
		      		<div class='title'>食谱</div>
		      		<div class='sub_title'>
						浏览我们的多款鸡蛋食谱，用鸡蛋烹调出多姿多彩的菜式！无论是平日的美味早餐，周末的悠闲午餐，还是款待客人的精致美食，甚至是为孩子制作点心，您都能在这里找到心仪食谱，为每一餐找到美味「煮」意！
		      		</div>
		      	</div>	
		    </div> -->
	    	<div class='container-fluid Picnic_parent'>

				<div class='complete_parent'>
					
					<div class='complete'> 
						
						<div id='title_com' style="margin-top: 200px; margin-bottom: 50px;">最新食谱</div>
						
						<div class='row text-center'>
							
							<div class='col-sm-6 col-lg-4'>
								<a href="/breakfast-in-a-mug">
									<img class='recipes_img' src='/images/recipes/breakfast-in-a-mug-small_r.jpg' />
									<div class='name'>马克杯早餐</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/spicy-avocado-eggs-on-toast">
									<img class='recipes_img' src='/images/recipes/Spicy-Avocado-Eggs-on-Toast-Small_r.jpg' />
									<div class='name'>辣鳄梨吐司</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/ham-and-cheese-omelette-roll-ups">
									<img class='recipes_img' src='/images/recipes/Ham-and-Cheese-Omelette-Roll-Ups-small_r.jpg' />
									<div class='name'>奶酪火腿欧姆蛋卷</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/banana-oat-pancakes">
									<img class='recipes_img' src='/images/recipes/Banana-Oat-Pancakes-small_r.jpg' />
									<div class='name'>香蕉燕麦班戟</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Make-ahead breakfast bowls">
									<img class='recipes_img' src='/images/recipes/Make-Ahead-Breakfast-Bowls-small.jpg' />
									<div class='name'>懒人早餐</div>
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
								<a href="/chinese-crepes">
									<img class='recipes_img' src='/images/recipes/chinese-crepes-small_r.jpg' />
									<div class='name ' >中式薄饼</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/shrimp-and-egg-fried-rice">
									<img class='recipes_img' src='/images/recipes/Shrimp-and-Egg-Fried-Rice-small_r.jpg' />
									<div class='name ' >虾仁滑蛋炒饭</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/classic-pad-thai">
									<img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
									<div class='name ' >泰式炒河</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/spinach-and-mushroom-soba-noodle-soup">
									<img class='recipes_img' src='/images/recipes/Spinach-and-Mushroom-Soba-Noodle-Soup-small_r.jpg' />
									<div class='name ' >菠菜蘑菇荞麦汤面</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/okonomiyaki">
									<img class='recipes_img' src='/images/recipes/Okonomiyaki-small_r.jpg' />
									<div class='name ' >大阪烧</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/mushroom-fried-rice-with-crispy-egg">
									<img class='recipes_img' src='/images/recipes/Mushroom-Fried-Rice-with-Crispy-Egg-small_r.jpg' />
									<div class='name ' >蘑菇脆香煎蛋炒饭</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/spaghetti-carbonara">
									<img class='recipes_img' src='/images/recipes/Spaghetti-Carbonara-small_r.jpg' />
									<div class='name ' >卡邦尼奶油培根意大利面</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/cedar-plank-salmon-with-nicoise-relish">
									<img class='recipes_img' src='/images/recipes/Cedar-Plank-Salmon-small_r.jpg' />
									<div class='name ' >雪松木板三文鱼配尼斯酱</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/poached-egg-over-roasted-asparagus">
									<img class='recipes_img' src='/images/recipes/Poached-Egg-over-Roasted-Asparagus-small_r.jpg' />
									<div class='name ' >烤芦笋流心蛋</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/grilled-eggs-in-portobello-mushrooms">
									<img class='recipes_img' src='/images/recipes/Grilled-Eggs-in-Portobello-Mushrooms-small_r.jpg' />
									<div class='name ' >奶酪鸡蛋烤大蘑菇</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/baked-eggs-extraordinaire">
									<img class='recipes_img' src='/images/recipes/Baked-Eggs-Extraordinaire-small_r.jpg' />
									<div class='name ' >香草奶酪烤蛋</div>
									
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/maple-walnut-tarts">
														<img class='recipes_img' src='/images/recipes/Maple-Walnut-Tarts-small_r.jpg' />
														<div class='name ' >枫糖核桃馅饼</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/creme-caramel">
														<img class='recipes_img' src='/images/recipes/Creme-Caramel-small_r.jpg' />
														<div class='name ' >法式焦糖炖蛋</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/blueberry-cake">
														<img class='recipes_img' src='/images/recipes/Blueberry-Cake-small_r.jpg' />
														<div class='name ' >蓝莓蛋糕</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/tiramisu-crepe-cake">
														<img class='recipes_img' src='/images/recipes/Tiramisu-Crepe-Cake-small_r.jpg' />
														<div class='name ' >提拉米苏千层蛋糕</div>
													</a>
							</div>

							
						</div>

						

						
						
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href='/Recipes' id='ViewAll'> 返回食谱 </a>
						</div>
						<br /><br /><br />
					</div>
			
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop