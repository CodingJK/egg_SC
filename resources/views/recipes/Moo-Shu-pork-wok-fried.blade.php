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
			
				
			
			<span class='recipe_title'>金丝木须肉夹饼</span>
			<p class='title_body'>
				这道美味的前菜由肉丝和多种蔬菜丝组成，加上炸鸡蛋丝让食材的味道更上一层楼。用木须皮包裹成半月形的肉夹饼，更色香味俱全。换成牛肉、鸡肉或鸭肉一样好滋味。
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2Fkerela&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-27-Final-web.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量 4人份(每位2个)</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 20分钟</li>
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
	                	<span>3个</span>
	                	<span>1升</span>
	                	<span>170克</span>
	                	<span>57克</span>
	                	<span>57克</span>
	                	<span>28克</span>
	                	<span>28克</span>
	                	<span>28克</span>
	                	<span>8块</span>
	                	<span>2茶匙</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	<span>1茶匙</span>
	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>鸡蛋</span>
	                	<span>生油</span>
	                	<span>猪肉丝</span>
	                	<span>椰菜丝</span>
	                	<span>木耳丝</span>
	                	<span>红萝卜丝</span>
	                	<span>竹笋丝</span>
	                	<span>冬菇丝</span>
	                	<span>木须皮</span>
	                	<span>生油</span>
	                	<span>姜丝</span>
	                	<span>蒜蓉</span>
	                	<span>盐</span>
	                	<span>糖</span>
	                	<span>老抽</span>
	                </div>
                </div>

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步骤 :</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">打蛋到碗中，搅匀</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一个深锅内下油1升，热3-5分钟至足够热。慢慢倒入蛋液并同时轻轻搅动热油，将蛋搅成细丝，可使用漏勺。捞起蛋丝备用。如果觉得蛋丝太油，可用厨纸吸收多余油分
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在锅内倒入清水2升烧开，放入猪肉、椰菜、木耳、胡萝卜、竹笋和冬菇丝烫3分钟，捞起沥干水分备用
						</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将木须皮放入蒸笼，烧开一锅水并把蒸笼放入锅中，须高于水位(锅和蒸笼尺寸应匹配)，蒸5分钟
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">锅中下油2茶匙加热，将姜丝、蒜蓉入锅爆香，放入烫过的猪肉、椰菜、木耳、胡萝卜、竹笋和冬菇丝，再加入蛋丝，用盐、糖各½茶匙和老抽1茶匙调味，炒3分钟
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将炒好的木须肉分成8份，放入准备好的木须皮，包成半月形
						</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">上碟即可享用
						</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小贴士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">鸡蛋除了炸成丝外，也可以煎成蛋皮再切成丝。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蔬菜和猪肉分开烫熟(第3步)出来的效果会更佳，但需要更长时间。</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Funny-Egg-Fish">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-13-Final-web.jpg' />
			     				<div class='name'>趣味小鱼蛋</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/TikkaMasala">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-17-Final-web.jpg' />
			     				<div class='name'>Tikka Masala Baked Eggs on Curried Garlic	Quinoa with Crumbled Paneer</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Foie-gras-roulade-with-egg-sheet-and-nori">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
			     				<div class='name'>
			     					紫菜鵝肝蛋皮卷
								</div>
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
        		<td class='text-right'>437 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>31克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>6克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>482毫克</td>
        	</tr>
        	<tr>
        		<td><b>糖</b> </td>
        		<td class='text-right'>2克</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>16克</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>11克</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b> </td>
        		<td class='text-right'>26克</td>
        	</tr>
        	
        </table>
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