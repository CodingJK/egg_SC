@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
				$(".nutrition_link").css('color','#ffcd32');
			});
		</script>
      	
      	<div class='container-fuild nutrition_header'>
			<div class='nutrition_header_artical'>
				<div class='nutrition_title'>营养价值</div>
				<div class='nutrition_sub_title'>
					鸡蛋是营养最丰富的天然食品之一。一个大号鸡蛋仅含70卡路里，却饱含大量营养。
				 </div>
			</div>	
		</div>

		{{-- nutrition body --}}

		<div class="nutrition_content">
			<div class="col-sm-12 col-xs-12">
				<div class="col-sm-6 col-xs-12">
					
				</div>
				<div class="col-sm-6 col-xs-12">
					
				</div>
			</div>


			

			<div class="eggs_nutrition">
				<br>
				<div class="nutrition_title_sm_1" >营养价值</div>

				<p>鸡蛋不仅美味，而且营养十分丰富，是蛋白质的极佳来源，能提供人体所需的重要营养物质。现在就来了解为什么您应把鸡蛋作为膳食的一部分，以及了解如何为您自己、小孩甚至家中长者保持健康的生活方式。</p>
				<div class='nutrition_title_sm_2'>营养成分</div>

				<p>一个大号A级鸡蛋(53克)含有6克蛋白质和仅70卡路里。加拿大食品指南 <a href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html" id='canada-food-guides'>Canada’s Food Guide</a> 认为两个鸡蛋相当于一份肉类及其替代品。</p>
				<div class="col-xs-8" style='padding-left:15px'>
					<img src="/images/nutrition/5849-EFC-Nutrition-Comp-Eng.jpg" alt="">
				</div>
				<div class="col-xs-4"></div>

			</div>

			<div class="nutrient_benefit">
				<div class="small_title">每53克食用份量的营养成分： </div>
				<div class='col-xs-12 col-lg-4' style='padding-left: 0;' >
				<table class="table table-bordered " >
					<tbody>
						<tr class='light_yellow_tr'>
							<td><b>热量</b></td>
							<td>70 卡 / 292.88 千焦</td>
						</tr>
						<tr>
							<td><b>脂肪</b></td>
							<td>5 克</td>
						</tr>
						<tr class='light_yellow_tr'>
							<td><b>胆固醇</b></td>
							<td>195 毫克</td>
						</tr>
						<tr>
							<td><b>钠</b></td>
							<td>65 毫克</td>
						</tr>
						<tr class='light_yellow_tr'>
							<td><b>碳水化合物</b></td>
							<td>1 克</td>
						</tr>
						<tr>
							<td><b>蛋白质</b></td>
							<td>6 克 </td>
						</tr>
					</tbody>
				</table>
				</div>
				{{-- <div class="nutrition_title_sm_1">NUTRIENT - BENEFIT </div> --}}
				<div class='small_title' style='clear:both'>
					鸡蛋所含维生素和矿物质，以及相应的益处：
				</div>
				<div class="" style='clear: both'>
					<table class='table table-bordered'>
						<thead>
							<th>营养素</th>
							<th>益处</th>
						</thead>
						<tbody>
							<tr class='light_yellow_tr'>
								<td>铁</td>
								<td>将氧气运送至各处细胞，有助防止贫血，而鸡蛋内的铁质易于人体吸收</td>
							</tr>

							<tr>
								<td>维生素 A</td>
								<td>帮助维持皮肤及眼睛组织健康；协助夜间视力</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>维生素 D</td>
								<td>强化骨骼和牙齿；可有助预防某些癌症及自身免疫性疾病</td>
							</tr>

							<tr>
								<td>维生素 E</td>
								<td>一种抗氧化剂，帮助维持身体健康及预防疾病</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>维生素 B12</td>
								<td>有助预防心脏疾病</td>
							</tr>

							<tr>
								<td>叶酸 </td>
								<td>有助新细胞的形成及成长；帮助预防一种类型的贫血，在怀孕前及怀孕前三个月摄取叶酸，可帮助预防严重的先天性缺陷</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>蛋白质 </td>
								<td>对建造和修补肌肉、器官、皮肤、头发及其他身体组织至关重要；是生成激素、酶及抗体所必须的成分；鸡蛋内的蛋白质易于人体吸收</td>
							</tr>

							<tr>
								<td>硒 </td>
								<td>与维生素E一起充当抗氧化剂，帮助防止身体组织受损</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>叶黄素及玉米黄素 </td>
								<td>维持良好视力；可帮助减少罹患年龄相关眼疾的风险，如白内障和黄斑病变</td>
							</tr>

							<tr>
								<td>胆碱 </td>
								<td>对大脑发育及运作发挥有力作用</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="nutrition_words clear-both">
					<div class="nutrition_title_sm_2">蛋白质 </div>
					<div class='worlds'>鸡蛋含有6克最优质的蛋白质和14种关键营养素，能为您提供人体运作所需的能量，是维持健康和积极生活方式的天然选择。</div>
					<div class='worlds'>鸡蛋乃少数被认为是“完全蛋白质”的食物之一，因为它含有9种必需的氨基酸。氨基酸是构成蛋白质的成分，因此被视为“人体的基石”。</div>
					<br>
					<div class="nutrition_title_sm_2">欧米伽-3 (Omega-3)</div>

					<div class='worlds'>
						Omega-3是一种多元不饱和脂肪(即有益脂肪)，有助保护您的心脏。这些脂肪对人体健康是必需的，但由于人体不能自行制造，因此必须从食物中摄取，例如三文鱼、某些种类的食用油和果仁，以及含有omega-3的鸡蛋。
					</div>
					
					<br>
					<div class="nutrition_title_sm_2">胆固醇</div>
					<div class='worlds'><b>您可食用的鸡蛋份量可能比您想象中多！</b></div>
					<div class='worlds'>
						如果您不吃鸡蛋是因为担心它会成为胆固醇的来源及导致冠心病，现在是时候重新考虑了。最新的研究表明，健康的成年人每天可进食1个鸡蛋，而不会增加心脏疾病的风险。
					</div>
					<div class='worlds'>
						根据美国心脏协会(American Heart Association)，蛋黄中的叶黄素也可预防早期心脏疾病的发展。
					</div>
					
					<div class='worlds'>
						欲知更多有助您了解及管理胆固醇的资料，请浏览: <a href="eggfarmers.ca" target='_blank'>aneggadayisok.ca</a>.
					</div>
					<br>
					<div class="nutrition_title_sm_2">鸡蛋过敏</div>
					<div class='worlds'>
						对鸡蛋过敏在成人当中十分罕见，最常见于2至7岁的儿童。研究表明，大多数儿童往往在几年内就不再对鸡蛋过敏，然而，严重的鸡蛋过敏可能是终生性的。鸡蛋过敏是由其中的一种蛋白质引起，该蛋白质可触发免疫系统产生一种不正常反应。鸡蛋含有两个致敏部分：蛋黄及蛋白。过敏反应根据个人情况及蛋的进食量而有所不同，可以是轻微亦可能足以致命。
					</div>

				</div>
			</div>
			


			
		</div>


	    

			


@stop