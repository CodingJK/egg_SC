@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
				// $(".nav-justified a").css('border-color','white');
				// $(".nav-justified a").css('color','black');
				// $(".nav-justified a").mouseenter( function(){
				// 	$(this).css('border-color','#ffcd32');
				// } ).mouseleave(  function(){
				// 	$(this).css('border-color','white');
				// } );
				// $(".reciptes_link").css('color','#ffcd32');
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
			
				
			
			<span class='recipe_title'>凤凰奶露 </span>
			<p class='title_body'>
				此款传统的糖水最适合作为饭后甜点享用。
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
				<img src="/images/recipes/Eggs-SA-22-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4人份</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 5-7分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 5分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
	                	<span>2个</span>
	                	<span>170毫升</span>
	                	<span>1茶匙</span>
	                	
	                	


	                
	                	




	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
						<span>鸡蛋（只用蛋黄）</span>
						<span>奶</span>
						<span>糖</span>

	                </div>
                </div>

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一个小碗中搅匀蛋黄备用。</div>
						<hr class='hr1'>
					</div>


					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用锅以慢火热奶1分钟，加糖1茶匙再热1分钟，切勿烧开。
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">离火，慢慢将⅓热奶倒入蛋黄碗中。
						</div>
							<hr class='hr1'>
					</div>


					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">再将奶和蛋黄反注入锅中，不断搅拌1分钟。
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可立即享用。
</div>
						<hr class='hr1'>
					</div>
					<hr>
					
				
					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍:</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">  如果您喜欢，可使用高脂奶。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body"> 如果您希望奶糊更粘稠，可加热更长时间。</div>

						<hr class='hr1'>
						
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Syrup-Lts-Seed">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-23-Final-web.jpg' />
														<div class='name ' >莲子蛋茶</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Egg-Tart">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-24-Final-web.jpg' />
														<div class='name ' >酥皮蛋挞</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/maple-walnut-tarts">
														<img class='recipes_img' src='/images/recipes/Maple-Walnut-Tarts-small_r.jpg' />
														<div class='name ' >枫糖核桃馅饼</div>
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
        		<td class='text-right'>54 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>3.5 克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>1.5 克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.1 克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>24 毫克</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>3 克</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>3 克</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>0 克</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>3 克</td>
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