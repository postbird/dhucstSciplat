<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css"/><link rel="stylesheet" type="text/css" href="__PUBLIC__/jquery-easyui-1.3.5/themes/default/easyui.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/jquery-easyui-1.3.5/themes/icon.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap-theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap-responsive.min.css"><script language="javascript" type="text/javascript" src="__PUBLIC__/My97DatePicker/WdatePicker.js"></script><script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.js"></script><script type="text/javascript" src="__PUBLIC__/bootstrap/bootstrap.js"></script><script type="text/javascript" src="__PUBLIC__/jquery-easyui-1.3.5/jquery.easyui.min.js"></script><style>
		.head{text-align:center;}
		.container{width:1000px;}
		.red{color:red;}
		.blue{color:blue;}
		.operate{color:#428bca;}
		.modal-dialog{width:100%;}
		.inputpadding{padding-left:1px;}
		.pantssize{font-size:14px;}
		.back{position:absolute;right:10px;top:10px;}
	</style><script>
	window.UEDITOR_HOME_URL='__ROOT__/Data/Ueditor/';
	window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameHeight=320;
			//window.UEDITOR_CONFIG.getActionUrl = "<?php echo U(GROUP_NAME.'/Blog/upload');?>"; //提交页面
			//window.UEDITOR_CONFIG.imagePath = URL + "php/";
			//UE.Editor.prototype._bkGetActionUrl = UE.Editor.prototype.getActionUrl;
			//UE.Editor.prototype.getActionUrl = function(action){
			//if(action == 'uploadimage') {
			//return '<?php echo U(GROUP_NAME.'/Blog/upload');?>';
			//}
			//return this._bkGetActionUrl(action);
			//}
			//window.UEDITOR_CONFIG.imageUrl='<?php echo U(GROUP_NAME.'/Blog/upload');?>';
			//window.UEDITOR_CONFIG.imagePath=URL+"php/";
			//上传文件的保存路径的修改再config.json里
			UE.getEditor('content');
			
		}
</script><script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script><script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script></head><body><div class='container'><h2 class='head'>讲座信息读取修改</h2><hr/><form id="form2" method='post' action="__URL__/mylectureupdate" class="form-horizontal" enctype="multipart/form-data"><div class="form-group"><div class="col-sm-10 col-sm-offset-1"><input type='text' class="form-control " id="title" name="title"  value="<?php echo ($lecture['ltitle']); ?>"></div></div><div class="form-group"><div class="col-sm-10 col-sm-offset-1"><textarea  id="content" name="content" ><?php echo ($lecture['lcontent']); ?></textarea></div></div><div class="form-group"><label for="username" class="col-sm-2 control-label" >报名开始时间:</label><div class="col-sm-4"><input type="text" class="form-control " id="datestart" name="datestart" onClick="WdatePicker()" value="<?php echo ($lecture['ldatestart']); ?>" ></div><label for="username" class="col-sm-2 control-label" >报名结束时间:</label><div class="col-sm-4"><input type="text" class="form-control " id="dateend" name="dateend" onClick="WdatePicker()" value="<?php echo ($lecture['ldateend']); ?>"></div></div><hr/><div class="form-group"><label for="username" class="col-sm-2 control-label" >主讲人:</label><div class="col-sm-4"><input type="text" class="form-control " id="lecturer" name="lecturer" value="<?php echo ($lecture['llecturer']); ?>"></div></div><div class="form-group"><label for="username" class="col-sm-2 control-label" >讲座时间:</label><div class="col-sm-4"><input type="text" class="form-control " id="date" name="date" value="<?php echo ($lecture['ldate']); ?>"></div></div><div class="form-group"><label for="username" class="col-sm-2 control-label" >讲座地点:</label><div class="col-sm-4"><input type="text" class="form-control " id="place" name="place"value="<?php echo ($lecture['lplace']); ?>"></div></div><div class="form-group"><label for="username" class="col-sm-2 control-label" >负责人:</label><div class="col-sm-4"><input type="text" class="form-control " id="director" name="director" value="<?php echo ($lecture['ldirectorname']); ?>(<?php echo ($lecture['ldirectornum']); ?>)" readonly='true'></div><label for="username" class="col-sm-2 control-label" >负责人电话:</label><div class="col-sm-4"><input type="text" class="form-control " id="diretortel" name="directortel" value="<?php echo ($lecture['ldirectortel']); ?>"></div></div><div class="form-group"><label for="username" class="col-sm-2 control-label" >是否有讲座单子:</label><div class="col-sm-4"><?php if($lecture['lsheet'] == 1): ?><input type="radio"   name="sheet" value='1' checked="checked" style="width: 50px"/>&nbsp;&nbsp;是&nbsp;&nbsp;&nbsp;&nbsp;
		       			<input type="radio"   name="sheet" value='0' style="width: 50px"/>&nbsp;&nbsp;否
			    	<?php else: ?><input type="radio"   name="sheet" value='1' style="width: 50px"/>&nbsp;&nbsp;是&nbsp;&nbsp;&nbsp;&nbsp;
		       			<input type="radio"   name="sheet" value='0' checked="checked" style="width: 50px"/>&nbsp;&nbsp;否<?php endif; ?></div><label for="username" class="col-sm-2 control-label" >预计人数:</label><div class="col-sm-4"><input type="text" class="form-control " id="num" name="num" value="<?php echo ($lecture['lnum']); ?>"></div></div><hr/><div class="form-group"><label for="username" class="col-sm-2 control-label" >是否生效:</label><div class="col-sm-4"><?php if($lecture['lstatus'] == 1): ?><input type="radio"   name="status" value='1' checked="checked" style="width: 50px"/>&nbsp;&nbsp;是&nbsp;&nbsp;&nbsp;&nbsp;
		       			<input type="radio"   name="status" value='0' style="width: 50px"/>&nbsp;&nbsp;否
			    	<?php else: ?><input type="radio"   name="status" value='1' style="width: 50px"/>&nbsp;&nbsp;是&nbsp;&nbsp;&nbsp;&nbsp;
		       			<input type="radio"   name="status" value='0' checked="checked" style="width: 50px"/>&nbsp;&nbsp;否<?php endif; ?></div><label for="username" class="col-sm-2 control-label" >审核状态:</label><div class="col-sm-4"><?php if($lecture['lcheckstatus'] == 0): ?>未审核
			    	<?php else: if($lecture['lcheckstatus'] == 1): ?>已通过
			    		<?php else: ?>
			    			未通过<?php endif; endif; ?></div></div><div class="modal-footer"><input type='hidden',id='lid' name='lid'value="<?php echo ($lecture['lid']); ?>"><input type='hidden',id='unum' name='unum' value='<?php echo ($unum); ?>'><input type='hidden',id='uname' name='uname' value='<?php echo ($uname); ?>'><a class="btn btn-primary" href="<?php echo U('Admin/Stu/mydirectlecture',array('unum'=>$unum,'uname'=>$uname));?>" target="opt"><span>返回</span></a><?php if($lecture['lcheckstatus'] == 1): ?><input type="submit" class="btn btn-primary" value="保 存" ><?php else: ?><input type="submit" class="btn btn-primary" value="保 存" ><?php endif; ?></div></form></div><script></script></body></html>