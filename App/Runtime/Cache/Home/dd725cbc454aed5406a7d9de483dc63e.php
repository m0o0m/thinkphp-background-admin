<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>问题反馈</title>
	<link href="/Public/Admin/css//main.css" rel="stylesheet" type="text/css" />
	<link href="/Public/Admin/css//style.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:none;">
	<div class="wrapper" style="margin:0;">
		<div class="widget" style="margin:0;">
			<div class="body">
				<form class="form" id="buyForm" method="post" action="<?php echo U('Message/save');?>">
					<fieldset>
		                <div class="widget">
		                    <div class="formRow">
		                        <label>反馈标题:<span class='req'>*</span></label>
		                        <div class="formRight">
		                            <input type="text" readonly="readonley" class="validate[required]" value="<?php echo ($_GET['title']); ?>" name='title' id="title" />
		                        </div>
		                        <div class="clear"></div>
		                    </div>

		                    <div class="formRow">
		                        <label>反馈内容:</label>
		                        <div class="formRight"><textarea rows="8" cols="" name="content" placeholder="请填写您宝贵的意见"></textarea></div><div class="clear"></div>
		                    </div>

		                    <!-- <div class="formRow">
		                        <label>验证码:</label>
		                        <div class="formRight">
		                        	<span class="oneTwo">
		                        		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="20px">
		                        			<rect width="50" height="20" style="fill:rgb(0,0,255);stroke-width:1;stroke:rgb(0,0,0)" />
										  <text x="0" y="15" fill="red">I love SVG</text>
										</svg>
		                        	</span>
		                        	<span class='oneTwo'>
		                            	<input type="text" value="" name='title' />
		                        	</span>
		                        </div>
		                        <div class="clear"></div>
		                    </div> -->
		                    
		                    <div class="formSubmit"><input type="submit" value="提交" class="redB" /></div>
		                    <div class="clear"></div>
		                </div>
		            </fieldset>
				</form>
			</div>
		</div>
    </div>
    <script type="text/javascript" src="/Public/Admin/js//jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Admin/js//plugins/layer/layer.js"></script>
    <script>
    	jQuery( function( $ )
    	{
    		$("#close_layer").click( function()
    		{
    			parent.layer.closeAll();
    		});

    		$("#buyForm").submit( function()
    		{
    			if( ! confirm('确定发送？') ){
    				return false;
    			}
    			
    			var action = $(this).attr('action'),value = $(this).serialize(),ii = layer.load();

    			$.post( action, value, function( res )
    			{
					if( res.status == 1 ){
						layer.msg( res.info , {icon: 6}, function(){
							parent.location.reload();
							// parent.layer.closeAll();
						});
					} else {
						layer.msg( res.info , {icon: 5});
					}
			        layer.close(ii);
    			});
    			return false;
    		});
    	});
    </script>
</body>
</html>