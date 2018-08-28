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
			
				
			
			<span class='recipe_title'>烤芦笋流心蛋</span>
			<p class='title_body'>
					这款春季食谱适合任何场合，清爽鲜美。

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
				<img src="/images/recipes/Poached Egg over Roasted Asparagus-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 10分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 20分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
						<span>1 1/2磅(0.7千克)</span>
						<span>1汤匙(15毫升)</span>
						<span>1/2茶匙(2.5毫升)</span>
						<span>2茶匙(10毫升)</span>
						<span>4只</span>
						<span>1汤匙(15毫升)</span>
						<span>2粒</span>
						<span>1/2杯(125毫升)</span>
						<span>1/4杯(60毫升)</span>
						<span>(隨
个
人喜好添加)</span>

	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>芦笋(修剪)</span>
	                	<span>橄榄油</span>
	                	<span>
盐和胡椒粉
</span>
	                	<span>白醋</span>
	                	<span>鸡蛋</span>
	                	<span>黄油</span>
	                	<span>大蒜(切碎)</span>
	                	<span>新鲜面包屑</span>
	                	<span>帕尔玛奶酪碎</span>
	                	<span>新鲜面包</span>
	                </div>
                </div>
                
                
			

				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">预热烤箱至425°F(220°C)。在烤箱纸上拌匀橄榄油、盐、胡椒粉和芦笋。烤10-12分钟或至浅啡色，表层微脆。





</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">同时，在平底锅加水至大概3英寸(8厘米)高。加热至微沸。加入醋。将冻鸡蛋放入细碗或碟，慢慢将蛋放入水中。将其余鸡蛋重复以上步骤放入。在微沸水中慢煮3-5分钟，或至蛋白变白，蛋黄熟至偏好熟度。用匙羹捞起鸡蛋。在纸巾上沥干。


						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在小型防黏平底锅用中高火融化黄油。加入大蒜，煎煮1分钟或直至香味散发。加入面包屑，搅拌煎煮3分钟或至轻微焦香。


						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将芦笋均匀分配在4个碟上，放上流心蛋。撒上烤面包屑和帕尔玛奶酪碎。配以新鲜面包（如有）食用。


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
		     				<a href="/grilled-eggs-in-portobello-mushrooms">
									<img class='recipes_img' src='/images/recipes/Grilled-Eggs-in-Portobello-Mushrooms-small_r.jpg' />
									<div class='name ' >芝士鸡蛋焗大蘑菇</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/baked-eggs-extraordinaire">
									<img class='recipes_img' src='/images/recipes/Baked-Eggs-Extraordinaire-small_r.jpg' />
									<div class='name ' >香草奶酪烤蛋</div>
									
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/spinach-and-mushroom-soba-noodle-soup">
									<img class='recipes_img' src='/images/recipes/Spinach-and-Mushroom-Soba-Noodle-Soup-small_r.jpg' />
									<div class='name ' >菠菜蘑菇荞麦汤面</div>
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
        		<td class='text-right'>208
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>13克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>5克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>347毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>0.5克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>12.5克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>3.5克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>11克</td>
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