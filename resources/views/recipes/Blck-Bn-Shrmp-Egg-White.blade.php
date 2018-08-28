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
			
				
			
			<span class='recipe_title'>广东蛋花虾龙糊</span>
			<p class='title_body'>
此食谱据认为是起源于美国而非中国。从60年代后期开始，它就开始逐渐出现在美国中餐馆的菜谱上。黑豉汁的味道能取悦每个人的口味。它的做法简单，搭配炒饭食用最佳。
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FTikkaMasala&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-008-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4人份</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 10分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 10分钟</li>
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
	                	<span>227克</span>
	                	<span>2茶匙</span>
	                	<span>113克</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	<span>1½茶匙</span>
	                	<span>200亳升</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	<span>28克</span>
	                	<span>28克</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>鸡蛋</span>
	                	<span>虾仁</span>
	                	<span>您喜欢的食用油</span>
	                	<span>猪肉碎</span>
	                	<span>蒜蓉</span>
	                	<span>姜蓉</span>
	                	<span>黑豉汁</span>
	                	<span>清鸡汤</span>
	                	<span>盐</span>
	                	<span>糖</span>
	                	<span>生粉</span>
	                	<span>葱花
</span>
	                </div>
                </div>


                

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">打蛋到碗中，搅匀备用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用锅煮沸1升水，放入虾仁烫1至2分钟，捞出备用。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">烧炒锅下油1茶匙，放入猪肉碎炒2分钟备用。
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">烧热同一个炒锅，下油1茶匙，加蒜蓉、姜蓉各½茶匙，黑豉汁1½茶匙爆香。
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">倒入清鸡汤200毫升至炒锅中，加入第2步煮熟的虾仁、第3步的炒猪肉，用盐、糖各½茶匙调味，煮1分钟，再用生粉28克勾芡。
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">离火，慢慢绕圈倒入第1步的蛋液，轻轻搅成蛋花。
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步骤 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">上碟下葱花即可享用。</div>
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
		     				<a href="/St-Egg-Mncd-Pork">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-15-Final-web.jpg' />
									<div class='name ' >瑶柱肉末蒸滑蛋</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Steamed-crab-claw-with-egg-whites">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
									<div class='name ' >白玉蒸蟹钳</div>
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
        		<td class='text-right'>228 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>13克
</td>
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
        		<td class='text-right'>780毫克

</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>1克

  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>18克

</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克

</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>9克</td>
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