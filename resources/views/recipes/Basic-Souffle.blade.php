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
			
				
			
			<span class='recipe_title'>基本舒芙蕾</span>
			<p class='title_body'>
					外层酥脆，内里松软，舒芙蕾里面可填满您喜欢的馅料。虽然它以难度颇高著称，但其实制作过程简单。尝试加入奶酪、蟹肉、蔬菜及其他更多材料，做一顿丰盛的晚餐吧！
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">

				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FEggsMakhani&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-013-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量：4人份</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间：10分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间：20分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2茶匙(30毫升) </span>
	                	<span>2茶匙(30毫升)</span>
	                	<span>½茶匙(2.5毫升)</span>
	                	<span>少许</span>
	                	<span>¾杯(175毫升)</span>
	                	<span>6个，其中2个只用蛋白</span>
	                	<span>¼茶匙(1.25毫升)</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>黄油</span>
	                	<span>中筋面粉</span>
	                	<span>盐</span>
	                	<span>胡椒粉 </span>
	                	<span>牛奶(1%)</span>
	                	<span>鸡蛋</span>
	                	<span>塔塔粉
</span>
	                	
	                </div>
                </div>

                


				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">预热烤箱至375 华氏度(190摄氏度)。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用小火在中号锅融化牛油，加入面粉、盐和胡椒粉搅拌。煮的同时不断搅动，直至面糊细滑多泡，立刻倒入牛奶。继续搅动直至面糊开始煮沸而且细滑粘稠。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">把蛋黄和蛋白分开。将蛋黄充分打散，并加入¼杯(50毫升)刚才的暖面糊到蛋黄里。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将蛋黄糊与剩余的面糊充分混合。如有需要，可加入切碎的馅料至面糊中搅匀(请参考不同做法)。待面糊稍微变凉备用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一个大碗打蛋白和塔塔粉，打到硬挺但不干。将部分蛋白糊混到蛋黄糊中使其颜色变淡，再轻轻地将蛋黄糊加到蛋白糊中彻底混合。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">小心地把面糊4杯(1升)倒入舒芙蕾烤模或烘盘中。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在预热至375华氏度(190摄氏度)的烤箱中烤20至25分钟，至膨胀及稍微变黄即可享用。</div>
						<hr class='hr1'>
					</div>

					
					<hr>

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>不同做法：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">奶酪舒芙蕾：加入磨碎的瑞士奶酪1杯(250毫升)及葱花2茶匙(30毫升)至面糊中搅匀。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蟹肉舒芙蕾：加入罐头蟹肉1罐(6盎司/170克)、干百里香½茶匙(2毫升)、咖喱粉½茶匙(2毫升)，及蒜盐¼茶匙(1毫升)至面糊中搅匀。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蔬菜舒芙蕾：加入煮熟的胡萝卜丝1杯(250毫升)、磨碎的切打奶酪½杯(125毫升)，及干莳萝¼茶匙(1毫升)至面糊中搅匀。</div>

						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小诀窍：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">不要将蛋黄一次过加入到热的面糊中，因为可能会因凝结得太快而结块。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">冷鸡蛋的蛋白和蛋黄更易分离。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可使用小漏斗分开蛋白和蛋黄。在一个量杯上放漏斗。打蛋入漏斗，蛋白将流到量杯而蛋黄会留在漏斗内。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">如需为舒芙蕾围上一圈“护栏”，可剪一块双重厚度，4英寸(10厘米) 宽的锡纸，长度足以环绕模具一圈，并留有至少3英寸(8厘米)重叠部分。将其绕在模具外并用绳子固定。锡纸应伸出模具边缘之上2至3英寸(5至8厘米)。</div>

						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相关</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/chinese-crepes">
									<img class='recipes_img' src='/images/recipes/chinese-crepes-small_r.jpg' />
									<div class='name ' >中式薄饼</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/okonomiyaki">
									<img class='recipes_img' src='/images/recipes/Okonomiyaki-small_r.jpg' />
									<div class='name ' >大阪烧</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Chiu-Chow-Omeletd">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
									<div class='name ' >潮式煎蚝饼</div>
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
        		<td class='text-right'>168
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>12克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>5.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>462毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>10克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>7克</td>
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