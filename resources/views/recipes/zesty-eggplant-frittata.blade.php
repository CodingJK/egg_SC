@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
			});
		</script>

	<div class="recipes">
		
		<div class="col-xs-12 header text-center">
			<a href="/Recipes" id='back_to_recipes'>
				<ul>
					<li><img src="/images/icons/back.png" alt="" id='back_to_recipes_img'></li>
					<li class='recipes_back'>食谱</li>
				</ul>
			</a>
			
				
			
			<span class='recipe_title'>茄子意大利蛋饼</span>
			<p class='title_body'>
					曼尼托巴省鸡蛋农夫Doug和Sherry Pauls喜欢用自家种植的蔬菜烹制意大利蛋饼。意式蛋饼做法变化多端，除了用鸡蛋作为基本食材之外，几乎任何蔬菜海鲜或肉类，都可作为配料。这款食谱特意使用经过调味的烤蔬菜做配料，新鲜又健康。
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FdevilledEggs&src=sdkpreparse' style='padding-right:15px'>
					<img id='fb' src='./images/social/eggs101/egg_socialMediaIconSet_facebook.png' />
				</a>
				<a target="_blank" href='https://twitter.com/intent/tweet?text={{url()->current()}}' >
					<img id='twitter' src='./images/social/eggs101/egg_socialMediaIconSet_twitter.png' />
				</a>
				<a target='_blank' href='http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.eggs.ca%2Frecipes%2Fquick-morning-pizza&media=http%3A%2F%2Fwww.eggs.ca%2Fassets%2FRecipeThumbs%2FQuick-Morning-Pizza-updated-CMS.jpg&description=Quick+Morning+Pizza' style='padding-left:15px'>
					<img id='pinterest'  src='./images/social/eggs101/egg_socialMediaIconSet_pinterest.png' />
				</a>
			</div>
			<div class="col-xs-2"></div>
		</div>

		{{-- images --}}
		<div class="container-fuild recipes_images">
			
		
			<div class="col-xs-12 ">
				<img src="/images/recipes/Zesty-Eggplant-Frittata_L.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 6位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 20分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 35分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
							                	<span>1条</span>
							                	<span>2杯(500毫升)</span>
							                	<span>1/2杯(125毫升)</span>
							                	<span>1个</span>
							                	<span>2粒</span>
							                	<span>3汤匙(45毫升)</span>
							                	<span>2茶匙(10毫升)</span>
							                	<span>1/2茶匙(2.5毫升)</span>
							                	<span>1/2茶匙(2.5毫升)</span>
							                	<span>1/8茶匙(0.5毫升)</span>
							                	<span>8只</span>
							                	<span>1/3杯(75毫升)</span>
							                	<span>1/4杯(60毫升)</span>





	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>中型茄子(切大粒)</span>
	                	<span>迷你番茄(一杯，切一半)</span>
	                	<span>去核橄榄(切一半)</span>
	                	<span>小洋葱(切碎)</span>
	                	<span>大蒜(切小片)</span>
	                	<span>橄榄油</span>
	                	<span>红酒醋</span>
	                	<span>干牛至</span>
	                	<span>辣椒片</span>
	                	<span>胡椒粉</span>
	                	<span>鸡蛋</span>
	                	<span>香芹碎</span>
	                	<span>水</span>

	                </div>
                </div>


			

				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将茄子、迷你番茄、橄榄、洋葱、大蒜、油、醋、牛至、辣椒片和胡椒放入大碗中轻轻搅匀，拌匀后倒在大烤盘上，均匀摊开。


</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">放入已预热至425˚F(220˚C)烤箱中烤25-30分钟，中途搅拌，直至蔬菜变软且略微变成啡色。取出。不要关掉烤箱。
						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">打散鸡蛋、香芹和水。在10或12英寸(25或30厘米)的烤箱用防粘锅上，轻轻喷几下烹饪喷雾油，用中火加热。将蛋浆倒入锅中。当饼边开始变熟，用铲子轻轻提起煮熟的部分，让未熟的蛋浆流向底部。煎6-7分钟至底部熟透，表面半熟状态。


						</div>
							<hr class='hr1'>
					</div>
					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">取出，将茄子和番茄馅料铺在蛋饼上。放入烤箱烤约10分钟，或至蛋浆凝固。
						</div>
							<hr class='hr1'>
					</div>
					
					
					
					<hr>
					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">辣椒片也称为辣椒片或碎红辣椒。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">如有需要，可将防黏锅的手柄用两层铝箔包住，加强防热保护。</div>

						<hr class='hr1'>
						
					</div>
				

				</div>

	
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Basic-Souffle">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-013-Final-web.jpg' />
									<div class='name ' >基本舒芙蕾</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Chiu-Chow-Omeletd">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
									<div class='name ' >潮式煎蚝饼</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/chinese-crepes">
									<img class='recipes_img' src='/images/recipes/chinese-crepes-small_r.jpg' />
									<div class='name ' >中式薄饼</div>
								</a>
		     			</div>
				</div>		
			</div>
			</div>
		</div>
	</div>
		
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content nutrition_facts">
      
        <button type="button"  class="close close_X" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">营养成分</h1>
      
      <div class="modal-body">
        <table class='table'>
        	<tr>
        		<td><b>卡路里</b></td>
        		<td class='text-right'>206
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>16克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>3.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>177毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>3克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>10克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>4克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>10克</td>
        	</tr>
        	<tr>
        		<td><b>胆固醇</b></td>
        		<td class='text-right'>0毫克</td>
        	</tr>
        	
        </table>
        <i>每食用份量</i>
      </div>
     
    </div>

  </div>
</div>






		
	
	
	
<script>
	$("#fb").mouseover(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_facebook-over.png');
	});
	$("#fb").mouseleave(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_facebook.png');
	});
	$("#pinterest").mouseover(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_pinterest-over.png');
	});
	$("#pinterest").mouseleave(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_pinterest.png');
	});
	$("#twitter").mouseover(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_twitter-over.png');
	});
	$("#twitter").mouseleave(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_twitter.png');
	});
	$("#back_to_recipes").mouseover(function(){
		$("#back_to_recipes_img").attr('src','./images/icons/back_over.png');
	});
	$("#back_to_recipes").mouseleave(function(){
		$("#back_to_recipes_img").attr('src','./images/icons/back.png');
	});
</script>	
@stop