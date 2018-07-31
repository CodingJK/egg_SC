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
					<li class='recipes_back'>食譜</li>
				</ul>
			</a>
			
				
			
			<span class='recipe_title'>红烧燕液盏</span>
			<p class='title_body'>
				燕窝在我们的文化当中是人尽皆知的名贵食品。如果您想在宴请宾客时端出惊艳四座的佳肴，做这一款汤就最适合了。按照我们的食谱您就可做出卖相一流的汤品，尽显尊贵。
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2Feggtikka&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-08-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量 : 4人份</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>准备时间: 10 分钟</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹调时间: 8 分钟</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 营养成分 </a>
                </div>
           
                
 				


                <div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1茶匙</span>
	                	<span>4个</span>
	                	<span>240克</span>
	                	<span>8片</span>
	                	<span>850亳升</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙或适量</span>
	                	<span>56克</span>
	                	<span>28克</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>生油</span>
	                	<span>鸡蛋(只用蛋白)</span>
	                	<span>燕窝(建议使用瓶裝即食燕窝)</span>
	                	<span>香菜叶</span>
	                	<span>清鸡汤</span>
	                	<span>盐</span>
	                	<span>糖</span>
	                	<span>生粉</span>
	                	<span>火腿茸</span>
	                </div>
                </div>

                 
 				

                


				<div class="step">
					<div class='recipes_subtitle'>步骤:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在8只中式汤匙内刷上生油</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将蛋白在一个碗内搅匀，再倒入汤匙，每只汤匙加入燕窝14克，和香菜叶1片
						</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一个大锅中煮沸2升水，放入蒸架，在上面排放汤匙，用中到大火加盖隔水蒸5分钟</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蛋液会结成蛋盏，从汤匙取出放一碟子上备用</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将清鸡汤850毫升在锅内煮沸3分钟，加入燕窝226克(区别于第2步用到的燕窝)</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">加入盐、糖各½茶匙，再煮半分钟，用生粉56克勾芡搅1分钟，汤就此完成</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">将完成的汤倒入4个汤碟，每汤碟放第4步完成的蛋白燕盏2个，撒上火腿茸即可享用</div>
						<hr class='hr1'>
					</div>

					

					

					<div class="steps col-xs-12  text-center">
						<h1 class="col-xs-12"><b>小贴士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">检查瓶装燕窝是否含糖，如果是，则使用比食谱建议份量少的糖。</div>
						<hr class='hr1'>
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/mushroom-truffle-and-egg">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
			     				<div class='name'>蘑菇蛋花松露清湯</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/fish-bisque-egg-white">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-06-Final-web.jpg' />
			     				<div class='name'>芙蓉斑片羮</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/devilledEggs">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-09-Final-web.jpg' />
			     				<div class='name'>
			     					Indian-style Devilled Eggs 
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
        <h1 class="modal-title">營養成分</h1>
      
      <div class="modal-body">
        <table class='table'>
        	<tr>
        		<td><b>卡路里</b></td>
        		<td class='text-right'>149 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>1.5克</td>
        	</tr>
        	<tr>
        		<td><b>饱和脂肪</b></td>
        		<td class='text-right'>0.3克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克</td>
        	</tr>
        	<tr>
        		<td><b>钠</b></td>
        		<td class='text-right'>775毫克</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>9克  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白质</b>  </td>
        		<td class='text-right'>9克</td>
        	</tr>
        	<tr>
        		<td><b>纤维</b>  </td>
        		<td class='text-right'>1克</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>25克</td>
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