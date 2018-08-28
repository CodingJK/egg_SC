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
			
				
			
			<span class='recipe_title'>蘑菇脆香煎蛋炒饭</span>
			<p class='title_body'>
					如果炒饭是你的挚爱，你一定会喜欢Chef Lynn Crawford 大厨的泰国茉莉香米脆香姜蛋炒饭。用来做二人晚餐一流！

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
				<img src="/images/recipes/Mushroom-Fried-Rice-with-Crispy-Egg-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 2位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 25分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 12分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>炒飯</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					<span>2汤匙(30毫升)</span>
					<span>3-4个
</span>
					<span>1杯(250毫升)</span>
					<span>1汤匙(15毫升)</span>
					<span>2粒</span>
					<span>1茶匙(5毫升)</span>
					<span>2杯(500毫升)</span>
					<span>2汤匙(30毫升)</span>
					<span>2条
</span>

	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>橄榄油</span>
	                	<span>杏鲍菇，打直切成1/4英寸厚片</span>
	                	<span>韭菜(切碎)</span>
	                	<span>无盐黄油</span>
	                	<span>大蒜(切碎)</span>
	                	<span>姜蓉</span>
	                	<span>泰国茉莉香米(煮熟)</span>
	                	<span>酱油</span>
	                	<span>香葱(打斜切片)</span>

	                </div>
                </div>
                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>脆香煎蛋</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					
						
					<span>2汤匙(30毫升)</span>
					<span>6汤匙(90毫升)</span>
					<span>2只</span>







	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>无盐黄油(分成两份)</span>
	                	<span>Panko面包屑混合2茶匙姜蓉(分成两份)</span>
	                	<span>大鸡蛋</span>
	                </div>
                </div>

			

				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在平底锅用中高火烧热油，加入蘑菇拌炒3分钟或至金黄色。盛起备用。





</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在锅中加入韭菜、黄油、大蒜、姜蓉、饭和酱油，炒2分钟。加入葱花再炒1分钟。煎蛋期间，盖起保温。
						</div>
							<hr class='hr1'>
					</div>

					<div class='recipes_subtitle'>脆香煎蛋步骤:</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在平底锅用中火烧热1汤匙黄油。将3汤匙Panko面包屑糊倒入防黏锅中间，用匙羹后面压平。煎至底部金黄酥脆，然后将鸡蛋打在上面再煎2分钟或至蛋白凝固。用剩余鸡蛋重复以上步骤。

						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将炒饭上碟分成两份，放上脆香煎蛋，立即食用。


						</div>
							<hr class='hr1'>
					</div>
					
					<hr>
					
					
				

				</div>

	
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Gldn-Omlet">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
									<div class='name ' >黄金虾仁蛋包饭</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Billnr-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-010-Final-web.jpg' />
									<div class='name ' >阔佬炒饭</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Sclp-Egg-Wht-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-012-Final-web.jpg' />
									<div class='name ' >姜蓉带子蛋白炒饭</div>
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
        		<td class='text-right'>740
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>39克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>15克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.5克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>1063毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>6克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>24克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>9克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>82克</td>
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