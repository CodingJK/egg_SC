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
			$(".apps_link").css('color','#ffcd32');
		});
	</script>
	
	<div id='apps'>
      	<div class='header col-xs-12'>
	      	<div class='header_artical'>
	      		
	      		<div class='title'>应用程序</div>
	      		
	      	</div>	
	    </div>

	    <div class='timer_parent'>

	    	<div class='timer'>

	    		<div class='timer_title'>
	    			煮蛋倒数计时App
	    		</div>

	    		<div class='img'>
	    			<img src='/images/apps/image-apps-eggtimer.png' />
	    		</div>

	    		<div class='timer_title'>
	    			每次下厨，都可打造完美黄金鸡蛋。立即下载App。
	    		</div>

	    		<div class="descip">
	    			下载Egg Farmers of Canada的官方多功能煮蛋倒数计时App，随时随地都可用手机完美掌握煮蛋时间。倒数计时App操作简单，可按需自由调校功能，更随附各款鸡蛋食谱，绝对能帮到手。按照Egg Farmers of Canada官方窍门煮蛋，烹制柔嫩软绵绵的完美鸡蛋易如反掌。
	    		</div>

	    		<div class='sub_title'>
	    			App Store或Google Play免费下载
	    		</div>
	    		<div class='mobile_only'>
		    		<div class='row'>
			    		<div class='col-lg-6 col-xs-6 col-xs-offset-3 left'>
			    			<a href='https://itunes.apple.com/ca/app/egg-timer/id443977280?mt=8' target='_blank'>
			    				<img src='images/apps/btn-appstore.png' />
			    			</a>
			    		</div>

			    		<div class='col-lg-6 col-xs-6 col-xs-offset-3 right'>
			    			<a href='https://play.google.com/store/apps/details?id=ca.eggs.eggtimer' target='_blank'>
			    				<img src='images/apps/btn-googleplay.png' />
			    			</a>
			    		</div>
		    		</div>
		    	</div>
		    	<div class='desk_only'>
		    		<div class='appstore'>
			    		<div class='col-sm-3 col-sm-offset-3'>
			    			<a href='https://itunes.apple.com/ca/app/egg-timer/id443977280?mt=8' target='_blank'>
			    				<img src='images/apps/btn-appstore.png' />
			    			</a>
			    		</div>

			    		<div class='col-sm-3'>
			    			<a href='https://play.google.com/store/apps/details?id=ca.eggs.eggtimer' target='_blank'>
			    				<img src='images/apps/btn-googleplay.png' />
			    			</a>
			    		</div>
			    		<div class="col-sm-3"></div>
		    		</div>
		    	</div>

	    		<br /><br />





	    	</div>
	    	<hr />


	    </div>

	    <div class='features_parent'>
	    	
	    	<div class='features '>

	    		<div class='title'>功能特色</div>
	    		
	    		<ul >

	    			<li class='details'>可选水煮蛋、流心蛋、炒蛋或煎蛋计时设置</li>

	    			<li class='details'>按鸡蛋大小及偏好软硬度，自订煮蛋时间</li>

	    			<li class='details'>访问百多款Egg Farmers of Canada食谱</li>

	    			<li class='details'>按菜色类型或烹调方法搜索食谱</li>

	    			<li class='details'>发掘各种方便实用的煮蛋诀窍和建议，烹制大师级水准的完美鸡蛋菜色</li>

	    		</ul>

	    		<div class='title'>版本2.0新功能</div>
	    		
	    		<ul >

	    			<li class='details'>特别为iOS7 Retina显示屏重新设计，全面提升观感，配合焕然一新的egg.ca网站</li>

	    			<li class='details'>添加“烹饪教学短”视频和“煮蛋入门技巧”内容，助你煮出完美鸡蛋</li>

	    			<li class='details'>添加“认识农夫”内容，为你介绍饲养加拿大优质鸡蛋的一些主要成员</li>

	    			<li class='details'>允许在eggs.ca创建帐户或登录现有帐户</li>

	    			<li class='details'>现在可以同步eggs.ca和App之间的收藏食谱</li>

	    		</ul>

	    		<div class='sm_title'>Apple、iPad和iPhone均为Apple Inc.美国及其他国家/地区注册商标。 App Store为Apple Inc.服务商标。</div>

	    	</div>

	    </div><hr />


	    <div class='timer_parent'>

	    	<div class='timer'>

	    		<div class='timer_title'>
	    			Eggcentric TV App
	    		</div>

	    		<div class='img'>
	    			<img src='/images/apps/image-apps-eggcentrictv.png' />
	    		</div>
	    		<br /><br /><br /><br />

	    		

	    		<div class="descip">
	    			浓郁蛋香，叫人爱不释手。我们因此特别推出了一个鸡蛋电视频道。 Eggcentric TV是个完全关于鸡蛋的串流媒体电视频道，只此一家！我们的串流媒体频道为你带来无数来自各界名人和名厨的精彩内容，更提供简易食谱、烹饪技巧和下厨贴士任你欣赏，务求帮助加拿大不同家庭在短时间内轻松变出一桌丰富美味的鸡蛋菜色。
	    		</div>

	    		<div class='sub_title'>
	    			一次浏览世界各地的鸡蛋食谱和故事，激发鸡蛋新煮意。
	    		</div>

	    		

	    		<br /><br />

	    		<div class='youtube col-xs-10 col-xs-offset-1'>
	    			
	    			<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/AHavdZXZC4o?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>

	    		</div>
	    		<div class="col-xs-1">
	    			

	    		</div>

	    		<div class='sub_title text-center'>
	    			All eggs, all the time. Get the app, it&apos;s FREE!
	    		</div>

	    	<div class='mobile_only'>	
	    		<div class='row store'>
		    		<div class='col-lg-4 col-xs-6 col-xs-offset-3 col-sm-4 left'>
		    			<a href=''>
		    				<img src='images/apps/btn-appstore.png' />
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-xs-6 col-xs-offset-3 col-sm-4 left'>
		    			<a href=''>
		    				<img src='images/apps/btn-googleplay.png' />
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-xs-6 col-xs-offset-3 col-sm-4 left'>
		    			<a href=''>
		    				<img src='images/apps/btn-roku.png' />
		    			</a>
		    		</div>
	    		</div>
	    	</div>
	    	<div class='desk_only'>	
	    		<div class='row store '>
		    		<div class='col-lg-4 col-sm-4 left'>
		    			<a href='https://itunes.apple.com/ca/app/eggcentric-tv/id1059446288?mt=8'>
		    				<img src='images/apps/btn-appstore.png' / target='_blank'>
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-sm-4 left'>
		    			<a href='https://play.google.com/store/apps/details?id=com.floatleft.eggcentric&hl=en'>
		    				<img src='images/apps/btn-googleplay.png' / target='_blank'>
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-sm-4 left'>
		    			<a href='https://www.roku.com/en-ca/how-it-works' target='_blank'>
		    				<img src='images/apps/btn-roku.png' />
		    			</a>
		    		</div>
	    		</div>
	    	</div>





	    	</div>
	    	


	    </div>

      </div>


@stop