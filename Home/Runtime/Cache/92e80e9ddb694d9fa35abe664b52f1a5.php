<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/index.css"/>
		<script src="__PUBLIC__/js/jquery-1.11.0.js" type="text/javascript" charset="utf-8"></script>
		<script src="__PUBLIC__/js/quo.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>
		<!-- --------------顶部----------------- -->
		<div class="top_Box">
	    	<a href="javascript:history.go(-1)" class="top_Classify"><img src="__PUBLIC__/images/left_jiantou.png" /></a>
	        <div class="top_Title">发布留言</div>
	        <!--<div class="top_More"><img src="__PUBLIC__/images/Icon_more.png" /></div>-->
	    </div> 
	    
		<!-- ---------发布留言---------- -->  
    	<div class="postMes">
    		<form action="__URL__/doMes" method="post" name="messageForm">
	           <textarea name="postMessage" rows="" cols=""></textarea>
    		</form>
        </div>
        <a href="javascript:;" class="post_Btn post_no">发布</a>
        <script type="text/javascript">
        	$(function(){
        		document.onkeyup = function(){
        			var m = $("textarea[name='postMessage']").val();
        			if(m!=''){
        				$(".post_Btn").removeClass('post_no');
        			}else{
        				$(".post_Btn").addClass('post_no');
        			}
        		}
        		
        		$(".post_Btn").on("tap",function(){
        			var status = $(".post_Btn").hasClass('post_no');
        			if(!status){
	        			$("form[name='messageForm']").submit();
        			}
        			
        		})
        	})
        </script>
	</body>
</html>