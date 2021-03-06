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
			
				
			
			<span class='recipe_title'>趣味小蛋鱼</span>
			<p class='title_body'>

			这款鸡蛋小鱼是小孩和大人都会喜欢的有趣小菜。煮熟的鸡蛋作为小鱼的身体，切成薄片的黄瓜和白萝卜组成鱼鳞，再点缀以红椒做出鱼尾，您就能畅游在一片称赞声当中!
				

			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FFunny-Egg-Fish&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-13-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4人份</li>
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
	                	<span>4个 </span>
	                	<span>1个</span>
	                	<span>2个 </span>
	                	<span>1条</span>
	                	<span>¼杯(60毫升)</span>
	                	<span>2个</span>
	                	<span>1杯(250毫升)</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>全熟水煮鸡蛋 (剥壳)</span>
	                	<span>小红椒</span>
	                	<span>白萝卜 (切成非常薄的薄片)</span>
	                	<span>小黄瓜 (切成非常薄的薄片)</span>
	                	<span>低脂蛋黄酱</span>
	                	<span>去核黑橄榄</span>
	                	<span>生菜丝</span>
	                </div>
                </div>

               

           

              


				<div class="step">

					<div class='recipes_subtitle'>步骤 :</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">制作鱼身：沿着每个鸡蛋的一条长边切走一小片，令鱼身可以立起。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">从红椒切4个1英寸(2.5厘米)长的“V”型做成鱼尾。将白萝卜和黄瓜薄片对半切或切成四瓣来模仿鱼鳞。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用蛋黄酱当胶水，将黄瓜和萝卜鱼鳞贴在每个蛋上，覆盖鱼背的三分之二，并在较窄的一端留出空间作为脸部。从黑橄榄切出小方块放在脸部做眼。在鸡蛋的另一端切个小口插入红椒尾。

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在鸡蛋周围放一圈生菜丝做出海草的效果。

</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">全熟水煮蛋的基本做法：在单层汤锅中放入凉鸡蛋。倒入凉水，水面至少在鸡蛋以上1英寸(2.5厘米)。盖上锅盖，用大火快速将水烧开。立即离火使水停止沸腾。让鸡蛋留在水里18至23分钟。捞出鸡蛋并马上用凉开水冲至变凉。</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Boiled-Egg-Oolong-Tea">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-14-Final-web.jpg' />
			     				<div class='name'>乌龙茶叶蛋
</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Moo-Shu-pork-wok-fried">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-27-Final-web.jpg' />
									<div class='name'>
										金丝木须肉夹饼
									</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Foie-gras-roulade-with-egg-sheet-and-nori">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
			     				<div class='name'>
			     					紫菜鹅肝蛋皮卷
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
        		<td class='text-right'>140 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>10克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>2克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>186毫克</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>3克</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>7克</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>5克</td>
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