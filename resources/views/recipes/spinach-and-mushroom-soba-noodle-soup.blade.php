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
			
				
			
			<span class='recipe_title'>菠菜蘑菇荞麦汤面</span>
			<p class='title_body'>
					在秋冬来一碗热辣辣的汤面暖胃就最舒服不过！做法超快速简单，美味又富蛋白质。
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
				<img src="/images/recipes/Spinach-and-Mushroom-Soba-Noodle-Soup-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 2位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 10分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 15分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					<span>4安士(115克)</span>
					<span>1.5茶匙(5毫升)</span>
					<span>1汤匙(15毫升)</span>
					<span>2杯(500毫升)</span>
					<span>2茶匙(10毫升)</span>
					<span>4杯(1升)</span>
					<span>2杯(500毫升)</span>
					<span>2只</span>
					<span>1/4杯(60毫升)</span>
					<span>额外配菜（随喜好加入)</span>





	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>荞麦面</span>
	                	<span>烘煎麻油</span>
	                	<span>植物油</span>
	                	<span>棕蘑菇或白蘑菇(切片)</span>
	                	<span>酱油</span>
	                	<span>低钠鸡汤</span>
	                	<span>嫩菠菜</span>
	                	<span>鸡蛋(流心，放凉，切一半)</span>
	                	<span>香葱(白色绿色部分切片)</span>
	                	<span>新鲜芫荽菜叶、泰国辣椒片、少量鲜芽菜、是拉差辣酱。</span>

	                </div>
                </div>


			

				<div class="step">

					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">根据包装说明准备荞麦面。沥干，加入芝麻油搅拌均匀，分成两碗，备用。



</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在中型平底锅中，用中高火炒烧热油，加入蘑菇炒4-5分钟至微啡色。关火后加入酱油拌匀。将蘑菇分成两份。
						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步骤 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">同一时间，在中型锅中加入鸡汤、麻油和酱油，低火煎煮。加入嫩菠菜，搅拌不超过1分钟，直至稍微软化。将热汤和菠菜淋上荞麦面和蘑菇，加入剩余的流心蛋、香葱或其他食材作配料和装饰。立即食用。

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
		     				<a href="/classic-pad-thai">
									<img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
									<div class='name ' >泰式炒河</div>
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
        		<td class='text-right'>424
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>16克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>2.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>2210毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>5克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>21克
</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>53克</td>
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