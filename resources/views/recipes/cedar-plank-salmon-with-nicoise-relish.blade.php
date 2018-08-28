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
			
				
			
			<span class='recipe_title'>雪松木板三文鱼配尼斯酱</span>
			<p class='title_body'>
					特别鸣谢Lynn Crawford厨师提供食谱

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
				<img src="/images/recipes/Cedar-Plank-Salmon-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 55分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 15分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>三文鱼</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					
						<span>2汤匙(30毫升)</span>
						<span>3汤匙(45毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>1茶匙(5毫升)</span>
						<span>1/2茶匙(2.5毫升)</span>
						<span>1/4茶匙(1.25毫升)</span>
						<span>1 1/2磅(0.7千克)</span>
						



	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>蜜糖芥末</span>
	                	<span>红糖</span>
	                	<span>橄榄油</span>
	                	<span>柠檬皮</span>
	                	<span>盐</span>
	                	<span>胡椒粉</span>
	                	<span>中间部份三文鱼柳去皮去骨(或4块6至8盎司/ 170-225克)</span>
	                	<span>未经处理的雪松木板</span>
	                </div>
                </div>
                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>尼斯醬</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                						
						
						<span>3汤匙(45毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>1茶匙(5毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>(随个人口味添加)</span>
						<span>1杯(250毫升)</span>
						<span>1/2杯(125毫升)</span>
						<span>1/2杯(125毫升)</span>
						<span>2汤匙(30毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>1只</span>

 	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>特级初榨橄榄油</span>
	                	<span>雪利酒醋</span>
	                	<span>蜜糖芥末</span>
	                	<span>红葱头(切碎)</span>
	                	<span>
盐和胡椒粉
</span>
	                	<span>樱桃番茄(切粒)</span>
	                	<span>青瓜(切粒)</span>
	                	<span>四季豆(切粒)</span>
	                	<span>尼斯橄榄(去核切碎)</span>
	                	<span>韭菜碎</span>
	                	<span>香芹(切碎)</span>
	                	<span>大鸡蛋(全熟切碎)</span>
	                </div>
                </div>
			

				<div class="step">

					<div class='recipes_subtitle'>三文鱼:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">如时间许可，将雪松木板放在水中浸泡至少30分钟或过夜。





</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">如用烤盘，预热至425°F(220°C)。
						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在细碗中混合蜜糖芥末、红糖、橄榄油、柠檬皮、盐和胡椒粉。涂抹在三文鱼肉上，在室温下腌15分钟。将三文鱼平放在木板上。


						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蓋上蓋子烤13-盖上盖子烤13-15分钟至三文鱼刚好熟透，鱼边微焦。食用前让三文鱼在木板上待凉5分钟，配以尼斯酱食用。



						</div>
							<hr class='hr1'>
					</div>
					<div class='recipes_subtitle'>尼斯酱:</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在细碗中混合橄榄油、雪利酒醋、蜜糖芥末、红葱头、适量盐和胡椒粉。
						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在中型碗中混合蕃茄、青瓜、四季豆、橄榄、韭菜和香芹。加入先前预备好的酱汁，将切碎的蛋粒拌入，即可食用。



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
		     				<a href="/Wk-Frd-Lbstr-Egg-Rainbow">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-007-Final-web.jpg' />
									<div class='name ' >鸳鸯芙蓉龙虾球</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/okonomiyaki">
									<img class='recipes_img' src='/images/recipes/Okonomiyaki-small_r.jpg' />
									<div class='name ' >大阪烧</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/baked-eggs-extraordinaire">
									<img class='recipes_img' src='/images/recipes/Baked-Eggs-Extraordinaire-small_r.jpg' />
									<div class='name ' >香草奶酪烤蛋</div>
									
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
        		<td class='text-right'>457
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>28克</td>
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
        		<td class='text-right'>751毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>12克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>37克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>14克</td>
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