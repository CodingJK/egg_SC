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
			
				
			
			<span class='recipe_title'>猪骨浓汤菜苗伴鸳鸯蛋</span>
			<p class='title_body'>
				这是“火锅”的新煮法。其中我们介绍到熬制美味浓汤的方法，也可用在其他丰富的菜式当中。您可以用豆苗代替白菜。
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
				<img src="/images/recipes/Eggs-SA-009-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量：4人份</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间：25分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间：准备浓汤2小时05分钟+20分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>453克</span>
	                	<span>453克</span>
	                	<span>56克</span>
	                	<span>28克</span>
	                	<span>3个</span>
	                	<span>1茶匙</span>
	                	<span>227克</span>
	                	<span>28克</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>鸡骨</span>
	                	<span>猪骨</span>
	                	<span>姜</span>
	                	<span>白胡椒粒</span>
	                	<span>鸡蛋</span>
	                	<span>生油</span>
	                	<span>白菜苗</span>
	                	<span>杞子</span>
	                	<span>盐</span>
	                	<span>糖</span>
	                </div>
                </div>


                

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大锅煮沸2升水，放入鸡骨和猪骨煮5分钟，捞出沥干水分</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用同一个锅重新装2升水，放入上一步骤的鸡骨和猪骨，加姜、白胡椒粒，加盖用中火煲90分钟，再换大火烧30分钟，成500毫升浓汤。使用汤隔隔渣滤得清汤，备用
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">分离蛋白和蛋黄进2个碗中
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">分别搅匀蛋白和蛋黄
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">向8只中式汤匙内刷上生油
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">往4只刷好油的汤匙注入蛋白，另外4只注入蛋黄
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步骤 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大锅煮沸2升水，置入蒸架再放入汤匙，加盖隔水蒸5分钟</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步骤 8</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蛋液会结成蛋盏，从汤匙取出备用</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步骤 9</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用锅煮沸1升水，放入白菜苗烫3分钟取出</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步骤 10</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将第9步的白菜苗放入砂锅中，放入第8步的蛋盏，加枸杞，再注入第2步的500毫升浓汤，用盐、糖各½茶匙调味</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步骤 11</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将砂锅置于炉上煮沸(约3分钟)即可享用</div>
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
		     				<a href="/EggsMakhani">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-18-Final-web.jpg' />
			     				<div class='name'>Eggs Makhani</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Boiled-Egg-Oolong-Tea">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-14-Final-web.jpg' />
			     				<div class='name'>
			     					烏龍茶葉蛋
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
        		<td class='text-right'>160 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>6克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>1.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>413毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>5克
  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>8克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>4克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>20克</td>
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