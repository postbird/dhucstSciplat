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
		.table th{text-align:center;}
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
</script><script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script><script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script></head><body><div class='container'><h2 class='head'><?php echo ($racegroup[0][0]['race_name']); ?></h2><h3 class='head'>报名分组列表</h3><hr/><table class="table "><thead><tr><th>组号</th><th>成员</th><th>获奖</th><th>图片</th><th>附件</th><th>审核<label class='red' style="font-size:11px;">*通过后不可更改*</label></th><th>操作</th></tr></thead><tbody><?php if(is_array($racegroup)): foreach($racegroup as $i=>$v): ?><tr><form  method='post' action="__URL__/racegroupupdate" class="form-horizontal" enctype="multipart/form-data"><td><?php echo ($i+1); ?></td><td><table><?php if(is_array($v)): foreach($v as $key=>$u): ?><tr><td><?php echo ($u['unum']); ?>&nbsp;&nbsp;
						    		</td><td><?php echo ($u['uname']); ?></td><td><?php if($u['unum'] == $u['captainnum']): ?>&nbsp;&nbsp;&nbsp;&nbsp;队长
						    			<?php else: ?>
						    				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;队员<?php endif; ?></td></tr><?php endforeach; endif; ?></table></td><td><?php if($v[0]['status'] == 1): echo ($v[0]['bonus']); else: ?><select id="bonus" name="bonus-no" class="form-control disabled " readonly disabled><?php if($v[0]['bonus'] == '一等奖'): ?><option value='一等奖'  selected="selected">一等奖</option><?php else: ?><option value='一等奖'>一等奖</option><?php endif; if($v[0]['bonus'] == '二等奖'): ?><option value='二等奖'  selected="selected">二等奖</option><?php else: ?><option value='二等奖'>二等奖</option><?php endif; if($v[0]['bonus'] == '三等奖'): ?><option value='三等奖'  selected="selected">三等奖</option><?php else: ?><option value='三等奖'>三等奖</option><?php endif; if($v[0]['bonus'] == '优秀奖'): ?><option value='优秀奖'  selected="selected">优秀奖</option><?php else: ?><option value='优秀奖'>优秀奖</option><?php endif; ?></select><?php endif; ?></td><td><?php if($v[0]['image'] == ''): ?>无照片
					    <?php else: ?><a href="javascript:;" class="btn btn-default" data-toggle="modal" data-target="#imgModal">查看图片</a><?php endif; ?></td><td><?php if($v[0]['accessory'] == ''): ?>无附件
					    <?php else: ?><a href="<?php echo U('Admin/SuperManage/downracefile',array('mid'=>$v[0]['mid']));?>"class="btn btn-default">附件下载<i class="fa fa-download"></a><?php endif; ?></td><td><?php if($v[0]['status'] == 0): ?><input type="radio"  name="status" value='1' style="width: 50px"/>&nbsp;&nbsp;通过&nbsp;&nbsp;&nbsp;&nbsp;
				       		<input type="radio"  name="status" value='2' style="width: 50px"/>&nbsp;&nbsp;不通过
				       		<input type="radio"  name="status" value='0' checked='checked' style="width: 50px"/>&nbsp;&nbsp;未审核
					    <?php else: if($v[0]['status'] == 1): ?><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已通过</label><input type="hidden"  name="status" value='1' /><?php else: ?><input type="radio"  name="status" value='1' style="width: 50px"/>&nbsp;&nbsp;通过&nbsp;&nbsp;&nbsp;&nbsp;
				       			<input type="radio"  name="status" value='2' checked='checked' style="width: 50px"/>&nbsp;&nbsp;不通过<?php endif; endif; ?><textarea name="description" id="description" cols="1" rows="1" style="resize: vertical;" placeholder="不通过的原因..."></textarea></td><td><input type='hidden',id='race_id' name='race_id' value="<?php echo ($v[0]['race_id']); ?>"><input type='hidden',id='bonus' name='bonus' value="<?php echo ($v[0]['bonus']); ?>"><input type='hidden',id='captainnum' name='captainnum' value="<?php echo ($v[0]['captainnum']); ?>"><input type='hidden',id='race_level' name='race_level' value="<?php echo ($v[0]['race_level']); ?>"><input type='hidden',id='unum' name='unum' value='<?php echo ($unum); ?>'><input type='hidden',id='uname' name='uname' value='<?php echo ($uname); ?>'><?php if($v[0]['status'] == 1): ?><input type="submit" class="btn btn-primary disabled" value="保 存" disabled="disabled"><input type="button" class="btn btn-danger disabled" value="删除" disabled="disabled" ><?php else: ?><input type="submit" class="btn btn-primary" value="保 存" ><input type="button" class="btn btn-danger" value="删除"  m="<?php echo ($v[0]['mid']); ?>" u="<?php echo U('Admin/SuperManage/racegroupdelete/');?>" onclick="checkGroupDelete(this);"><?php endif; ?></td><td><span class='red'><?php echo ($v[0]['msg']); ?></span></td></form></tr><?php endforeach; endif; ?></tbody></table><div class="modal-footer"><a class="btn btn-primary" href="<?php echo U('Admin/SuperManage/race',array('unum'=>$unum,'uname'=>$uname));?>" target="opt"><span>返回</span></a></div></div><!-- imgModal --><div class="modal fade" id="imgModal" tabindex="-1" role="dialog" aria-labelledby="imgModalLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button><h4 class="modal-title" id="imgModalLabel">查看图片</h4></div><div class="modal-body"><img src="__ROOT__<?php echo ($v[0]['image']); ?>"class="center-block"style="max-width:100%;"></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button></div></div></div></div><script>
		function checkGroupDelete(obj){
			alert("删除后不可修改,审核通过的不可修改!");
			if(confirm("再次确认删除？")){
				$.ajax({
					type:"POST",
					url:$(obj).attr("u"),
					data:{'mid':parseInt($(obj).attr("m"))},
					success:function(data){
						if(data.status=="ok"){
							alert("删除成功");
							window.location.reload();
						}else{
							alert("删除失败");
						}
					},
					error:function(jqXHR,textStatus,errorThrown){
						alert("删除失败");
					}
				});
			}else{
				return ;
			}
		}
	</script></body></html>