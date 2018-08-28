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
			
				
			
			<span class='recipe_title'>蓝莓蛋糕</span>
			<p class='title_body'>
					
Jill和Sharon的这款蛋糕，卖相美观，做法简单。新斯科舍省野生蓝莓，洒上红糖肉桂，脆脆口感令层次更加丰富。配以淡奶油或雪糕，香软滋味没法挡。

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
				<img src="/images/recipes/Blueberry-Cake-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 12位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 20分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 40分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>配料</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1杯(250毫升)</span>
						<span>1茶匙(5毫升)</span>
						<span>2汤匙(30毫升)</span>

	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>红糖</span>
	                	<span>肉桂粉</span>
	                	<span>加热融化黄油</span>
	                	
	                </div>
                </div>

                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>蛋糕</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1/2杯(125毫升)</span>
						<span>1杯(250毫升)</span>
						<span>2只</span>
						<span>1茶匙(5毫升)</span>
						<span>2杯(500毫升)</span>
						<span>2茶匙(10毫升)</span>
						<span>3/4茶匙(4毫升)</span>
						<span>2/3杯(170毫升)</span>
						<span>2杯(500毫升)</span>


	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>软化黄油</span>
	                	<span>砂糖</span>
	                	<span>鸡蛋</span>
	                	<span>香草</span>
	                	<span>多用途面粉
</span>
	                	<span>发酵粉</span>
	                	<span>盐</span>
	                	<span>牛奶（1%脂肪）</span>
	                	<span>野生新鲜或冰鲜蓝莓</span>
	                	
	                </div>
                </div>


                


				<div class="step">

					<div class='recipes_subtitle'>配料:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用细碗将红糖和肉桂粉混合，加入黄油轻轻搅匀，放置备用。</div>
						<hr class='hr1'>
					</div>

					<div class='recipes_subtitle'>蛋糕:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在9 x 13英寸(23 x 33厘米)烤盘上薄薄涂上一层油，撒上少量面粉，备用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在大碗中用电动搅拌机搅匀黄油和砂糖。加入鸡蛋和香草，混合拌匀。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在中型碗中将面粉、发酵粉和盐搅拌均匀。将三分之一的面糊加入蛋液中搅匀。继续交换拌入面糊和牛奶，直至全部混合，加入蓝莓，用手轻轻搅拌面糊混合。将面糊倒入已准备好的烤盘中。在面糊上均匀撒上配料。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">放入已预热至350°F(180˚C)的烤箱中，烤40-45分钟。用牙签插入蛋糕中间，取出时牙签干净，没有黏附面糊即可取出。</div>
						<hr class='hr1'>
					</div>
					
					<hr>

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">可选用果仁代替野生蓝莓，炮制另一番滋味。用1/4杯(50毫升)多用途面粉代替1/3杯(75毫升)糖，加入1/2杯(125毫升)杏仁碎或核桃碎即可。</div>
						
						

						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/tiramisu-crepe-cake">
														<img class='recipes_img' src='/images/recipes/Tiramisu-Crepe-Cake-small_r.jpg' />
														<div class='name ' >提拉米苏千层蛋糕</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/maple-walnut-tarts">
														<img class='recipes_img' src='/images/recipes/Maple-Walnut-Tarts-small_r.jpg' />
														<div class='name ' >
枫糖核桃馅饼</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Egg-Tart">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-24-Final-web.jpg' />
														<div class='name ' >酥皮蛋挞</div>
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
        		<td class='text-right'>330
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>11克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>6克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.4克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>316毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>38克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>4克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>4克</td>
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