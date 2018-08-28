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
			
				
			
			<span class='recipe_title'>卡邦尼奶油培根意大利面</span>
			<p class='title_body'>
					意大利传统名菜卡邦尼意大利面远近驰名，一般以鸡蛋、奶酪、培根和意大利面为材料。我们的健怡版本采用火鸡培根代替，美味又轻怡。

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
				<img src="/images/recipes/Spaghetti-Carbonara-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 5分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 8分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					<span>4片</span>
					<span>2粒</span>
					<span>1/2杯(125毫升)</span>
					<span>5只</span>
					<span>1磅(375克)</span>
					<span>1/2杯(125毫升)</span>
					<span>1/2杯(125毫升)</span>
					<span>1/2杯(125毫升)</span>
					<span>(随个人喜好添加)</span>


	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>火鸡培根(煮熟切碎)</span>
	                	<span>大蒜(切碎)</span>
	                	<span>干白葡萄酒</span>
	                	<span>鸡蛋</span>
	                	<span>意大利面</span>
	                	<span>脱脂淡奶</span>
	                	<span>新鲜香芹(切碎)</span>
	                	<span>帕尔玛奶酪碎</span>
	                	<span>盐和胡椒粉</span>
	                </div>
                </div>

			

				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用防黏平底锅将培根和大蒜炒1分钟。拌入葡萄酒搅匀，煮沸，关火，放凉10分钟。同一时间，根据包装说明煮熟意大利面。





</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将鸡蛋和淡奶搅拌均匀。将蛋液和香芹拌入培根中。用中低火加热，不断搅拌5分钟至稍微变稠，关火。拌入帕尔玛奶酪碎。
						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">沥干意大利面。将蛋液加入面条拌匀。

						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">撒盐和胡椒粉调味，立即食用。


						</div>
							<hr class='hr1'>
					</div>
					
					<hr>
					
					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">可用白葡萄酒代替鸡汤或蔬菜汤。</div>
						

						<hr class='hr1'>
						
					</div>	
				

				</div>

	
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/classic-pad-thai">
									<img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
									<div class='name ' >泰式炒河</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/spinach-and-mushroom-soba-noodle-soup">
									<img class='recipes_img' src='/images/recipes/Spinach-and-Mushroom-Soba-Noodle-Soup-small_r.jpg' />
									<div class='name ' >菠菜蘑菇荞麦汤面</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/cedar-plank-salmon-with-nicoise-relish">
									<img class='recipes_img' src='/images/recipes/Cedar-Plank-Salmon-small_r.jpg' />
									<div class='name ' >雪松木板三文鱼配尼斯酱</div>
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
        		<td class='text-right'>571
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>14克</td>
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
        		<td class='text-right'>446毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>7克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>29克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>3克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>77克</td>
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