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
			
				
			
			<span class='recipe_title'>法式巧克力咖啡杯</span>
			<p class='title_body'>
					派对甜品的最佳伙伴！早上或前一晚准备均可，省时省力。特别鸣谢Manitoba Egg Farmers提供食谱。
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
				<img src="/images/recipes/Cafe-Chocolate-Pot-au-Creme-CMS_L.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 8位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 15分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 40分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>巧克力奶油</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	<span>1汤匙(15毫升)</span>
						<span>1汤匙(15毫升)</span>
						<span>5盎司(145克)</span>
						<span>2杯(500毫升)</span>
						<span>6只</span>
						<span>1/2杯(125毫升)</span>
						<span>1/2杯(125毫升)</span>
						<span>1茶匙(5毫升)</span>


	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>速溶咖啡颗粒</span>
						<span>热水</span>
						<span>半甜巧克力</span>
						<span>搅打奶油</span>
						<span>鸡蛋，蛋黄蛋白分开</span>
						<span>砂糖</span>
						<span>2%牛奶</span>
						<span>香草精</span>
						
	                	
	                </div>
                </div>

			<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>蛋白脆饼</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2只</span>
						<span>适量</span>
						<span>1/2杯(125毫升)</span>
						<span>&nbsp;</span>
						


	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>蛋白</span>
	                	<span>塔塔粉</span>
	                	<span>浆果糖</span>
	                	<span>肉桂粉</span>
	                	
	                	
	                </div>
                </div>                


                <div class="step">

					<div class='recipes_subtitle'>步骤:</div>
					<div class='recipes_subtitle'>巧克力奶油:</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">预热烤箱至350°F(180°C)。把厨房毛巾褶起，铺在大型焗盘上。将咖啡溶在热水中搅匀，备用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">把碗放入热水中，或使用炖盅，将巧克力和1杯奶油搅匀，直至巧克力融化，取出。逐渐拌入剩余奶油和咖啡。


						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大碗将6只蛋黄和1/2杯(125毫升)砂糖搅拌3-4分钟至变稠且浅色。拌入巧克力浆、牛奶和香草精。倒入8个4盎司的甜品碗中。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将甜品杯放在准备好的烤盘上，倒入热水至碗的一半高，用铝箔盖住。将烤盘放入预热的烤箱中。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在热水中焗35-40分钟，直至边缘彻底凝固。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">从水中取出放凉，然后冷藏2-3小时，让中心完全凝固。撒上肉桂粉，配以蛋白脆饼食用即可。</div>
						<hr class='hr1'>
					</div>
					

					

					
					<hr>

				

				</div>

				<div class="step">

					<div class='recipes_subtitle'>蛋白脆饼:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在大型烤盘上铺一层烤箱纸，放置备用。在碗中发打蛋白和塔塔粉1分钟，直至微微隆起。逐次加入2汤匙(30毫升)砂糖，搅拌至光泽坚挺。用厨房汤匙，将一勺蛋白脆饼放在准备好的烤盘上。用200°F(100°C)烤1小时。取出放凉至室温。甜点可放在密封容器中三日。食谱可供制作10-12个蛋白脆饼。

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
		     				<a href="/Bld-Swtnd-Milk">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
														<div class='name ' >凤凰奶露</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/creme-caramel">
														<img class='recipes_img' src='/images/recipes/Creme-Caramel-small_r.jpg' />
														<div class='name ' >法式焦糖炖蛋</div>
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
        		<td class='text-right'>396.2
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>31.5克</td>
        	</tr>
        	
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>37.5毫克
</td>
        	</tr>
        	
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>4.5克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>27.2克</td>
        	</tr>
        	
        </table>
        <!-- <i>每食用份量</i> -->
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