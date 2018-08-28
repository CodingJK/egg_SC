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
			
				
			
			<span class='recipe_title'>提拉米苏千层蛋糕</span>
			<p class='title_body'>
					这款提拉米苏由一层层薄身班戟堆叠而成，在班戟上逐层涂上特浓咖啡马斯卡邦尼奶酪，口口弹牙，柔软淡雅，带来甜甜滋味。
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
				<img src="/images/recipes/Tiramisu-Crepe-Cake-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 12位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 15分钟</li>
					<li><img src="/images/icons/icon-recipe-waittime.svg" alt=""></li>
					<li class='recipe_worlds'>等候時間: 3小時</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 25分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>班戟</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
					<span>3杯(750毫升)</span>
					<span>2 1/4杯(565毫升)</span>
					<span>6只</span>
					<span>1/4杯(60毫升)</span>
					<span>1/4茶匙(1.25毫升)</span>
					<span>2汤匙(30毫升)</span>

	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>牛奶(室温)</span>
	                	<span>多用途面粉
</span>
	                	<span>鸡蛋(室温)</span>
	                	<span>加热融化黄油</span>
	                	<span>盐</span>
	                	<span>芥花籽油</span>

	                	
	                </div>
                </div>

                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>馅料</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>3只</span>
						<span>2汤匙(30毫升)</span>
						<span>2汤匙(30毫升)</span>
						<span>1/4杯(60毫升)</span>
						<span>1/4杯(60毫升)</span>
						<span>1/4茶匙(1.25毫升)</span>
						<span>1桶(450克)</span>


	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>蛋黄</span>
	                	<span>砂糖</span>
	                	<span>特浓咖啡</span>
	                	<span>淡奶油(35％脂肪)</span>
	                	<span>糖霜</span>
	                	<span>肉桂粉</span>
	                	<span>马斯卡邦尼奶酪</span>

	                </div>
                </div>
                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>装饰</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
						<span>1/4杯(60毫升)</span>
						<span>2汤匙(30毫升)</span>
						<span>1汤匙(15毫升)</span>

	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>特浓咖啡(冻)</span>
	                	<span>咖啡甜酒</span>
	                	<span>可可粉</span>

	                </div>
                </div>


                


				<div class="step">

					<div class='recipes_subtitle'>班戟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在搅拌机中，将牛奶、面粉、鸡蛋、已煮融的黄油和盐混合，搅拌至顺滑。静置至少30分钟(面糊应该呈厚奶油状；可加少量水稀释)。
							<hr class='hr1'>
</div>
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">中火加热10英寸(25厘米)防黏平底锅，扫上一层薄油。将1/3杯(75毫升)面糊倒入锅中，旋转覆盖锅底。煎60-90秒或至薄边微微卷曲。翻转再煎30秒或至熟透。用剩余面糊重复，按需扫上油。移至烤箱纸，彻底放凉。

</div>
						<hr class='hr1'>
					</div>

					<div class='recipes_subtitle'>馅料:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将耐热碗放入装有微沸水的平底锅中，加入蛋黄、砂糖和特浓咖啡搅拌约5分钟，或直至热度、厚度和柔软度适中。拿起搅拌器具时，面糊应呈丝带状(避免过度烹煮，令面糊凝固)。关火，彻底放凉。
</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用电动搅拌机搅打奶油至坚挺，拌入糖霜和肉桂粉打匀。在大碗中打拌马斯卡邦尼奶酪至轻盈蓬松，拌入蛋黄糊。加入一半奶油糊打匀，再加入其余奶油糊打匀。盖上并冷藏30-60分钟。</div>
							<hr class='hr1'>
					</div>
					<div class='recipes_subtitle'>制作:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">混合咖啡甜酒和特浓咖啡，拌匀。将一块班戟平放在碟上，涂抹2汤匙（30毫升）馅料。薄薄扫上一层特浓咖啡水。用剩余的班戟重复，逐层堆叠。冷藏至少2小时。洒上可可粉后切成厚件即可上碟。</div>
						<hr class='hr1'>
					</div>

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">可选用特浓咖啡和1汤匙(15毫升)糖代替咖啡甜酒。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可选用朱古力特浓咖啡豆做装饰。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">班戟可提前2至3日制作备用。</div>

						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/maple-walnut-tarts">
														<img class='recipes_img' src='/images/recipes/Maple-Walnut-Tarts-small_r.jpg' />
														<div class='name ' >
枫糖核桃馅饼</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/blueberry-cake">
														<img class='recipes_img' src='/images/recipes/Blueberry-Cake-small_r.jpg' />
														<div class='name ' >
蓝莓蛋糕</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Egg-Tart">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-24-Final-web.jpg' />
														<div class='name ' >酥皮蛋挞</div>
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
        		<td class='text-right'>430
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>31克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>15克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.4克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>160毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>9克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>11克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>27克</td>
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