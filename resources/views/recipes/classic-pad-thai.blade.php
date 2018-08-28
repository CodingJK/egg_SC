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
			
				
			
			<span class='recipe_title'>泰式炒河</span>
			<p class='title_body'>
					在家中轻松炮制出经典泰式滋味。只要准备好一切所需材料，10分钟内可立即上碟。
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
				<img src="/images/recipes/Classic-Pad-Thai-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 15分钟</li>
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
	                	
	                	<span>8安士(230克)</span>
						<span>1/3杯(75毫升)</span>
						<span>3汤匙(45毫升)</span>
						<span>3汤匙(45毫升)</span>
						<span>2汤匙(30毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>2茶匙(10毫升)</span>
						<span>3粒</span>
						<span>1汤匙(15毫升)</span>
						<span>1茶匙(5毫升)</span>
						<span>6汤匙(90毫升)</span>
						<span>将1/2磅(0.3千克)</span>
						<span>6盎司(175克)</span>
						<span>1/4茶匙(1.25毫升)</span>
						<span>4只</span>
						<span>1杯(250毫升)</span>
						<span>2条
</span>
						<span>1/2杯(125毫升)</span>
						<span>1/2杯(125毫升)</span>
						<span>4
块
</span>
						<span>8条
</span>




	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>河粉</span>
	                	<span>泰式甜辣酱</span>
	                	<span>蚝油</span>
	                	<span>青柠汁</span>
	                	<span>鱼露</span>
	                	<span>茄汁</span>
	                	<span>酱油</span>
	                	<span>大蒜(切碎)</span>
	                	<span>生姜蓉</span>
	                	<span>红糖</span>
	                	<span>芥花籽油</span>
	                	<span>中虾(剥壳，去尾，拍干)</span>
	                	<span>硬豆腐(切方块，拍干)</span>
	                	<span>盐</span>
	                	<span>鸡蛋(打散)</span>
	                	<span>豆芽</span>
	                	<span>香葱(切碎)</span>
	                	<span>烘煎花生(切碎)</span>
	                	<span>新鲜芫茜叶</span>
	                	<span>青柠</span>
	                	<span>泰国辣椒</span>

	                </div>
                </div>


			

				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将河粉放入大型耐热碗中，倒入沸水至完全覆盖。盖上盖子，静置10分钟。沥干，用冷水或冰水冲洗。


</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">混合甜辣酱、蚝油、青柠汁、鱼露、茄汁、酱油、大蒜、姜蓉和糖，搅匀备用。
						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在炒锅或大型防黏平底锅中，用中高火烧热2汤匙（30毫升）油。将虾仁炒1-2分钟至粉红色。盛起备用。

						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">加入2汤匙（30毫升）油、豆腐和盐入锅。将豆腐炒1-2分钟至金黄色。盛起备用。

						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将剩余的油倒入锅中。炒蛋1分钟，加入河粉和酱料，炒3-4分钟。将豆腐和虾仁放回锅中翻炒1-2分钟，直到炒熟虾仁，河粉透明软身。



						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用豆芽、香葱、花生和芫茜装饰。伴以青柠和泰国辣椒食用。

						</div>
							<hr class='hr1'>
					</div>
					<hr>
					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">可选用鸡片代替中虾。
</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可随个人口味酌量添加或省略辣椒。</div>
						<hr class='hr1'>
						
					</div>

				

				</div>

	
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/spinach-and-mushroom-soba-noodle-soup">
									<img class='recipes_img' src='/images/recipes/Spinach-and-Mushroom-Soba-Noodle-Soup-small_r.jpg' />
									<div class='name ' >菠菜蘑菇荞麦汤面</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/spaghetti-carbonara">
									<img class='recipes_img' src='/images/recipes/Spaghetti-Carbonara-small_r.jpg' />
									<div class='name ' >卡邦尼奶油培根意大利面</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/mushroom-fried-rice-with-crispy-egg">
									<img class='recipes_img' src='/images/recipes/Mushroom-Fried-Rice-with-Crispy-Egg-small_r.jpg' />
									<div class='name ' >蘑菇脆香煎蛋炒饭</div>
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
        		<td class='text-right'>800
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>40克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.1克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>1920毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>14克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>32克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>4克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>79克</td>
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