<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>Crown - premium responsive admin template for backend systems</title>
<link href="/Public/css//main.css" rel="stylesheet" type="text/css" />
<link href="/Public/css//style.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="/Public/js//jquery.min.js"></script>

<script type="text/javascript" src="/Public/js//plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/Public/js//plugins/spinner/jquery.mousewheel.js"></script>


<script type="text/javascript" src="/Public/js//jquery-ui.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/js//plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.flot.resize.js"></script>
 -->
<script type="text/javascript" src="/Public/js//plugins/charts/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/uniform.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.validationEngine-zh-CN.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/Public/js//plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="/Public/js//plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/wizard/jquery.form.wizard.js"></script>




<script type="text/javascript" charset="utf-8" src="/Public/js//plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/js//plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/Public/js//plugins/ueditor/lang/zh-cn/zh-cn.js"></script>



<!-- <script type="text/javascript" src="/Public/js//plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="/Public/js//plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="/Public/js//plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="/Public/js//plugins/uploader/jquery.plupload.queue.js"></script>
 -->

<script type="text/javascript" src="/Public/js//plugins/uploader/jquery.upload.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/js//plugins/uploader/html5uploader.css">


<script type="text/javascript" src="/Public/js//plugins/tables/jquery.datatable.min.js"></script>
<!-- 
<script type="text/javascript" src="/Public/js//plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/tables/resizable.min.js"></script>
 -->
<script type="text/javascript" src="/Public/js//plugins/calendar.min.js"></script>

<script type="text/javascript" src="/Public/js//plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="/Public/js//plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="/Public/js//plugins/layer/layer.js"></script>

<script type="text/javascript" src="/Public/js//custom.js"></script>

<body>

<!-- Left side content -->
<div id="leftSide">
    <div class="logo"><a href="index.html"><img src="/Public/images//logo.png" alt="" /></a></div>

    <div class="sidebarSep"></div>
    
    <!-- Left navigation -->
    <ul id="menu" class="nav">
        <?php if(is_array($_menu)): $i = 0; $__LIST__ = $_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['children'] != false): ?><li class="<?php echo ($menus["class"]); ?>"><a class='exp' href="#" title=""><span><?php echo ($menus["title"]); ?></span></a>
                    <ul class="sub">
                        <?php if(is_array($menus['children'])): $i = 0; $__LIST__ = $menus['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menu['url']);?>" title=""><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
            <?php else: ?>
                <li class="<?php echo ($menus["class"]); ?>"><a href="<?php echo U($menus['url']);?>" title=""><span><?php echo ($menus["title"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>


<!-- Right side -->
<div id="rightSide">
    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="/Public/images//userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="#" title=""><img src="/Public/images//icons/topnav/profile.png" alt="" /><span>个人资料</span><span class="numberTop">？</span></a></li>
                    <li><a href="#" title=""><img src="/Public/images//icons/topnav/settings.png" alt="" /><span>设置</span></a></li>
                    <li><a href="<?php echo U('Public/logout');?>" title="退出客户端"><img src="/Public/images//icons/topnav/logout.png" alt="" /><span>退出</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <!-- Responsive header -->
    <div class="resp">
        <div class="respHead">
            <a href="index.html" title=""><img src="/Public/images//loginLogo.png" alt="" /></a>
        </div>
        
        <div class="cLine"></div>
        <div class="smalldd">
            <span class="goTo"><img src="/Public/images//icons/light/home.png" alt="" />导航菜单</span>
            <ul class="smallDropdown">
                <?php if(is_array($_menu)): $i = 0; $__LIST__ = $_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menus): $mod = ($i % 2 );++$i; if($menus['children'] != false): ?><li class="<?php echo ($menus["class"]); ?>"><a class='exp' href="#" title=""><span><?php echo ($menus["title"]); ?></span></a>
                            <ul class="sub">
                                <?php if(is_array($menus['children'])): $i = 0; $__LIST__ = $menus['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($menu['url']);?>" title=""><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="<?php echo ($menus["class"]); ?>"><a href="<?php echo U($menus['url']);?>" title=""><span><?php echo ($menus["title"]); ?></span></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="cLine"></div>
    </div>
    
    

	<div class="wrapper">
	<div class="bc">
	    <ul id="breadcrumbs" class="breadcrumbs">
	         <li class="">
	              <a href="<?php echo U('Index/index');?>">控制中心</a>
	         </li>
	         <li class="current"><a href="#">会员列表</a></li>
	    </ul>
	    <div class="clear"></div>
	</div>
	  <div class="widget">
        <div class="title">
		  <h6>会员列表</h6>
		  <h6 class='fr'>
		  	<a class='' href="<?php echo U('add');?>">＋添加</a>
		  </h6>
		  <h6 class="fr">
		  	<form class='form'> 
                <select name='groupid'>
                    <option value="">会员等级</option> 
                    <?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i; if(($group["id"]) == $_GET['groupid']): ?><option value="<?php echo ($group["id"]); ?>" selected="selected"><?php echo ($group["title"]); ?></option> 
                        <?php else: ?>
                           <option value="<?php echo ($group["id"]); ?>"><?php echo ($group["title"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </select>
		  		<input type="text" class='searchInput' name="username" placeholder="请输入会员名称" value="<?php echo ($_GET['username']); ?>" /> 
		  		<input type='submit' class='redB searchButton' value='搜索'>
		  	</form>
		  </h6>
        </div>
          <table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck display myTable">
              <thead>
                  <tr>
                    <th>会员名称</th>
		            <th>会员等级</th>
		            <th>会员姓名</th>
		            <th>会员积分</th>
		            <th>注册时间</th>
		            <th>最后登录时间</th>
		            <th>会员状态</th>
		            <th>操作</th>
                  </tr>
              </thead>
              <tbody>
	        	<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeA">
		       			<td class="center searchContent"><?php echo ($vo["username"]); ?></td>
		       			<td class="center"><?php echo (getUserGroupTitle($vo["level"])); ?></td>
		       			<td class="center"><?php echo ((isset($vo["name"]) && ($vo["name"] !== ""))?($vo["name"]):'未填写'); ?></td>
		       			<td class="center"><?php echo ($vo["rank"]); ?></td>
		       			<td class="center"><?php echo (date('Y-m-d H:i',$vo["addtime"])); ?></td>
		       			<td class="center"><?php echo (date('Y-m-d H:i',$vo["lastlogin"])); ?></td>
		       			<td class="center"><?php echo (statusTitle($vo["status"])); ?></td>
		       			<td class="center">
		       				<a class='confirm' href="<?php echo U('del',array('id'=>$vo['id']));?>">删除</a> &nbsp;&nbsp;
		       				<a href="<?php echo U('add',array('id'=>$vo['id']));?>">修改</a> &nbsp;&nbsp;
		       			</td>
			        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
              <tfoot>
              	<tr>
              		<td colspan="10" class='pagination'>
              			<?php echo ($showPage); ?>
              		</td>
              	</tr>
              </tfoot>
          </table>
        </div>
	</div>

    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></div>
    </div>

</div>



<div class="clear"></div>
    
    <script type="text/javascript">
        $(function(){
            oTable = $('.dTable').dataTable({
                "oLanguage" : { // 汉化
                    "sProcessing" : "正在加载数据...",
                    "sLengthMenu": "<span class='itemsPerPage'>每页显示:</span> _MENU_ <a class='add_link' href='<?php echo U('add');?>'>+ 添加</a>",
                    "sZeroRecords" : "没有您要搜索的内容",
                    "sInfo" : "从_START_ 到 _END_ 条记录——总记录数为 _TOTAL_ 条",
                    "sInfoEmpty" : "记录数为0",
                    "sInfoFiltered" : "(全部记录数 _MAX_  条)",
                    "sInfoPostFix" : "",
                    "sSearch" : "搜索",
                    "sUrl" : "",
                    "oPaginate" : {
                        "sFirst" : "第一页",
                        "sPrevious" : " 上一页 ",
                        "sNext" : " 下一页 ",
                        "sLast" : " 最后一页 "
                    }
                },
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "sDom": '<""l>t<"F"fp>',
            });
            //点击打开文件选择器  
            $("#upload").on('click', function() {
                $.ajaxFileUpload({  
                    url:"<?php echo U('upload');?>",  
                    secureuri:false,  
                    fileElementId:'fileToUpload',//file标签的id  
                    dataType: 'json',//返回数据的类型  
                    success: function (data, status) {
                        if( data.status == 1 ){
                            $('#hidden_inputFile').val( data.fileName );
                            $("#showImg").attr('src',"/<?php echo C('UPLOAD_CONFIG.rootPath');?>"+data.fileName)
                            layer.msg( '文件上传成功' , {icon: 6});
                        } else {
                            layer.msg( data.error , {icon: 5});
                        }
                    },  
                    error: function (data, status, e) {  
                        alert(e);  
                    }  
                }); 
            });  
        });  
    </script>
</body>
</html>