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
						
						<div id='title_com' style="margin-top:60px;margin-bottom: 60px;">主菜</div>
						
						<div class='row text-center'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Steamed-crab-claw-with-egg-whites">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
									<div class='name ' >白玉蒸蟹钳</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/St-Egg-Wht-Sea-Treasure">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-20-Final-web.jpg' />
									<div class='name ' >海皇扒蒸蛋白</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/St-Egg-Mncd-Pork">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-15-Final-web.jpg' />
									<div class='name ' >瑶柱肉末蒸滑蛋</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Scrmbld-Egg-Fish-Maw">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-21-Final-web.jpg' />
									<div class='name ' >桂花云腿炒鱼肚</div>
								</a>
							</div>
							{{-- 1 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Wk-Frd-Lbstr-Egg-Rainbow">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-007-Final-web.jpg' />
									<div class='name ' >鸳鸯芙蓉龙虾球</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Chiu-Chow-Omeletd">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
									<div class='name ' >潮式煎蚝饼</div>
								</a>
							</div>

							{{-- 2 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Blck-Bn-Shrmp-Egg-White">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-008-Final-web.jpg' />
									<div class='name ' >广东蛋花虾龙糊</div>
								</a>
							</div>
							{{-- 3 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Duo-Egg-Pearl">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-009-Final-web.jpg' />
									<div class='name ' >猪骨浓汤菜苗伴鸳鸯蛋</div>
								</a>
							</div>
							{{-- 4 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Billnr-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-010-Final-web.jpg' />
									<div class='name ' >阔佬炒饭</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Gldn-Omlet">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
									<div class='name ' >黄金虾仁蛋包饭</div>
								</a>
							</div>

							{{-- 5 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Sclp-Egg-Wht-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-012-Final-web.jpg' />
									<div class='name ' >姜蓉带子蛋白炒饭</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Basic-Souffle">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-013-Final-web.jpg' />
									<div class='name ' >基本舒芙蕾</div>
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