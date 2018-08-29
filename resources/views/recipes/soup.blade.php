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
						
						<div id='title_com' style="margin-top:60px;margin-bottom: 60px;">汤</div>
						
						<div class='row'>
							<div class=' col-sm-6 col-lg-4'>
								<a href="/fish-bisque-egg-white">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-06-Final-web.jpg' />
									<div class='name'>芙蓉斑片羹</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/mushroom-truffle-and-egg">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
									<div class='name'>蘑菇蛋花松露清汤</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Birds-Nest-Egg-Peral">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-08-Final-web.jpg' />
									<div class='name'>
										红烧燕液盏 	
									</div>
								</a>
							</div>
							
						</div>


						

						
						
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href="http://www.eggs.ca/recipes" id='ViewAll'> 浏览食谱 </a>
						</div>
						<br /><br /><br />
					</div>
			
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop