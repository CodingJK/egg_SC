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
						
						<div id='title_com' style="margin-top: 200px; margin-bottom: 50px;">甜品</div>
						
						<div class='row text-center'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Bld-Swtnd-Milk">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
														<div class='name ' >凤凰奶露</div>
													</a>
							</div>
						
							<div class='col-sm-6 col-lg-4'>
								<a href="/Syrup-Lts-Seed">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-23-Final-web.jpg' />
														<div class='name ' >莲子蛋茶</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Egg-Tart">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-24-Final-web.jpg' />
														<div class='name ' >酥皮蛋挞</div>
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