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
			
				
			
			<span class='recipe_title'>紫菜鹅肝蛋皮卷 </span>
			<p class='title_body'>
				您可以在下次宴会时准备这款极具创意的精致前菜。鸡蛋令味道浓郁的鹅肝添上细滑口感。您可能需要去一趟高级食品商场，但您肯定会享受整个过程。美味前菜与甜酒搭配，让精彩的夜晚有个美好开始！
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2Fhariyali&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-16-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4人份 (每人1块)</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 25分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 烹煮15分钟+变凉30分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2个 </span>
	                	<span>2茶匙</span>
	                	<span>1张(20厘米乘20厘米)</span>
	                	<span>170克</span>
	                	<span>¼茶匙</span>
	                	<span>¼茶匙</span>
	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>鸡蛋</span>
	                	<span>您喜欢的食用油</span>
	                	<span>寿司紫菜</span>
	                	<span>鹅肝</span>
	                	<span>盐</span>
	                	<span>黑胡椒粉</span>
	                </div>
                </div>


               
           

              


				<div class="step">

					<div class='recipes_subtitle'>步骤 :</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在碗内轻轻将鸡蛋打散。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">制作蛋皮——使用一个大平底锅，用中到大火加热2-3分钟，加油2茶匙。倒入蛋液，使之在锅面平均摊开，形成大小与寿司紫菜相似的薄皮，煎3分钟后待其变凉。共做2张蛋皮，备用。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将鹅肝切成小条状，撒上盐和黑胡椒粉各¼茶匙调味。

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用中火热平底锅，煎鹅肝1分钟，再将其放在一张厨纸上吸走多余的油，待其变凉备用。
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">放平一张蛋皮，铺上一张紫菜，再一张蛋皮。
						</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将鹅肝排在蛋皮的一端，轻轻压紧卷成卷，再以保鲜膜包裹。
						</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">待其变凉至室温(约30分钟)，去除保鲜膜后再切成小块即可享用。
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
		     				<a href="/egg-and-veggie-salad-rolls-with-sweet-heat-dipping-sauce">
									<img class='recipes_img' src='/images/recipes/Egg-and-Veggie-Salad-Rolls-with-Sweet-Heat-Dipping-Sauce-small_r.jpg' />
									<div class='name'>越式鸡蛋生菜沙拉卷配甜辣酱</div>
							</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/smoked-salmon-fritters-with-dill-cream-cheese">
									<img class='recipes_img' src='/images/recipes/Smoked-Salmon-Fritters-with-Dill-Cream-Cheese-small_r.jpg' />
									<div class='name'>莳萝奶油奶酪三文鱼脆脆饼</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/scallion-and-corn-pancake">
									<img class='recipes_img' src='/images/recipes/Scallion-and-Corn-Pancake-small_r.jpg' />
									<div class='name'>香葱玉米薄饼</div>
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
        		<td class='text-right'>256 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>24克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>7克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>489毫克</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>0 克  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>8克</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>0克</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>3克</td>
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