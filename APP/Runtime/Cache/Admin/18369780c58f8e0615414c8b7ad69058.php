<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css"/><link rel="stylesheet" type="text/css" href="__PUBLIC__/jquery-easyui-1.3.5/themes/default/easyui.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/jquery-easyui-1.3.5/themes/icon.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap-theme.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/bootstrap/bootstrap-responsive.min.css"><script language="javascript" type="text/javascript" src="__PUBLIC__/My97DatePicker/WdatePicker.js"></script><script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.3.js"></script><script type="text/javascript" src="__PUBLIC__/bootstrap/bootstrap.js"></script><script type="text/javascript" src="__PUBLIC__/jquery-easyui-1.3.5/jquery.easyui.min.js"></script><style>
		.head{text-align:center;}
		.container{width:1000px;}
		.red{color:red;}
		.blue{color:blue;}
		.operate{color:#428bca;}
		.modal-dialog{width:40%;}
		.inputpadding{padding-left:1px;}
		.pantssize{font-size:14px;}
		.back{position:absolute;right:10px;top:10px;}
		.normalfont{font-weight:normal;}
		.stumargintop{margin-top:0.7em;}
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
</script><script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script><script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script></head><body><div class='container'><div class="well"><p class="text-danger"><strong>【注意】</strong></p><p>科创平台竞赛中心只进行相关竞赛的获奖情况的信息统计，而不是竞赛的报名入口。如果在计算机学院认可的竞赛列表中有参加并获得成绩，请认真填写相关信息，进行信息的录入。</p><p>如果你参加了竞赛类表中没有的比赛，可以通过科创帮助中心进行申请，并由学院审核通过，通过后，将永久认可该竞赛。</p></div><h3 class='head'><?php echo ($race['rname']); ?></h3><hr/><form id="form1" method='post'  class="form-horizontal" enctype="multipart/form-data"><div class="form-group"><label for="" class="col-sm-2 control-label">描述：</label><div class="col-sm-10 normalfont"><?php echo ($race['rcontent']); ?></div></div><hr/><div class="form-group"><label  class="col-sm-2 control-label" >竞赛时间:</label><label  class="col-sm-3 text-center normalfont" ><?php echo ($race['rdate']); ?></label></div><hr/><div class="form-group"><label  class="col-sm-2 control-label" >系统录入开始日期:</label><label  class="col-sm-4 text-center normalfont" ><?php echo ($race['rdatestart']); ?></label><label  class="col-sm-2  control-label" >系统录入截止日期:</label><label  class="col-sm-4 text-center normalfont" ><?php echo ($race['rdateend']); ?></label></div><hr/><div class="form-group"><label for="username" class="col-sm-2 control-label" >主办/承办单位:</label><label for="username" class="col-sm-2 control-label normalfont" ><?php echo ($race['rsponsor']); ?></label></div><hr/><div class="form-group"><label  class="col-sm-2  control-label" >竞赛级别:</label><label  class="col-sm-2 control-label normalfont" ><?php echo ($race['rlevel']); ?></label></div><hr/><div class="form-group"><?php if($race['raccessory'] == ''): else: ?><label for="username" class="col-sm-2  control-label" >附件:</label><label  class="col-sm-2 control-label normalfont" ><a href="<?php echo U('Admin/Stu/downracefile');?>?filename=.<?php echo ($race['raccessory']); ?>">附件下载</a></label><?php endif; ?></div><hr/><div class="form-group"><div style="margin:1em auto;width:10%;"><?php if($race['subtime'] == 1): ?><label " class="control-label" >已截止</label><?php else: if($isapply == 1): ?><label " class="control-label" >已经申请录入</label><?php else: ?><button class="btn btn-default "  data-toggle="modal" data-target="#adduserModal">
										申请录入
									</button><?php endif; endif; ?></div></div><div class="modal-footer"><a class="btn btn-primary" href="<?php echo U('Admin/Stu/race',array('unum'=>$unum,'uname'=>$uname));?>" target="opt"><span>返回</span></a></div></form></div><!-- Modal 添加信息开始--><div class="modal fade" id="adduserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  ><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3 class=" head" id="myModalLabel"><?php echo ($race['rname']); ?></h3><h4 class='head modal-title'>竞赛信息录入</h4></div><div class="modal-body"><form id="form2" method='post' action="__URL__/raceinsert" class="form-horizontal" enctype="multipart/form-data"><div class="form-group"><div class="col-sm-10"><p style="text-align:center;color:red;">*填写说明*</p><p>1、竞赛申报的填写由每一小组的队长填写即可，其他成员不用填写；</p><p>2、队长添加小组成员时，成员的学号和姓名一定要一致，否则会不通过；</p><p>3、上传附件的材料包括证书图片等；</p></div></div><hr/><div class="form-group"><label for="username" class="col-sm-2  control-label" >组成员:</label><label for="username" class="col-sm-3  control-label" >学号</label><label for="username" class="col-sm-3  control-label" >姓名</label><div class="col-sm-2 col-sm-offset-2"><a href="javascript:void(0)" onclick="addStu()">新增+</a></div></div><div class="form-group" id="stugroup"><div><div class="col-sm-3 col-sm-offset-2"><input type="text" class="form-control" id="num" name="num[]" value="<?php echo ($unum); ?>" readonly='true'></div><div class="col-sm-3"><input type="text" class="form-control" id="name" name="name[]" value="<?php echo ($uname); ?>" readonly='true'></div><div class="col-sm-2 delete" ><a href="javascript:void(0)" onclick="deleterows(this)">删除</a></div><label for="username" class="col-sm-2  control-label" >队长</label></div></div><hr/><div class="form-group"><label for="username" class="col-sm-2  control-label" >获奖:</label><div class="col-sm-4"><select id="bonus" name="bonus" class="form-control"><option value='0'>=请选择获奖级别=</option><option value='一等奖'>一等奖</option><option value='二等奖'>二等奖</option><option value='三等奖'>三等奖</option><option value='优秀奖'>优秀奖</option></select></div></div><div class="form-group"><label for="username" class="col-sm-2  control-label" >附件:</label><div class="col-sm-8">
					     请选择需要上传的文件(大小不超过10M，文件类型为.doc,.pdf,.zip)：
					     <p class="text-danger"><strong>不支持.docx文件</strong></p><input type='file' name="raceFile" id='raceFile' required="true" /></div></div><hr/><div class="form-group"><label for="username" class="col-sm-2  control-label" >图片上传:</label><div class="col-sm-8">
					     请上传证书照片(图片类型：.jpg,.gif,.png)：
					     <input type='file' name="imageFile" onchange="previewFile()" id='imageread'required="true" /><img src="" height="200" width="300" alt="图片 预览..."/></div></div><div class="modal-footer"><input type='hidden',id='race_name' name='race_name' value='<?php echo ($race["rname"]); ?>'><input type='hidden',id='race_level' name='race_level' value='<?php echo ($race["rlevel"]); ?>'><input type='hidden',id='rid' name='rid' value='<?php echo ($race["rid"]); ?>'><input type='hidden',id='unum' name='unum' value='<?php echo ($unum); ?>'><input type='hidden',id='uname' name='uname' value='<?php echo ($uname); ?>'><input type="submit" class="btn btn-primary" value="保 存" id="adduserbtn" name="adduserbtn"></div></form></div></div></div></div><!-- Modal 添加信息结束--><script>
	function deleterows(id){
		var father1=id.parentNode;
		var father2=father1.parentNode;
		var childs=father2.childNodes;
		for(var i=childs.length-1;i>=0;i--){
			father2.removeChild(childs.item(i));		
		}
	}
	function previewFile() {
	var preview = document.querySelector('img');
	 var file  = document.getElementById('imageread').files[0];
	 var reader = new FileReader();
	 reader.onloadend = function () {
	  preview.src = reader.result;
	 }
	 if (file) {
	  reader.readAsDataURL(file);
	 } else {
	  preview.src = "";
	 }
	}
	function changeNext(){
	
	var parent=document.getElementById("stugroup");
	var inputs=parent.getElementsByTagName("input");
	var a=this.value;
	//alert(a);
	//for(var j=0;j<inputs.length;j++){
	//		alert(inputs[j].value);
	//	}
	$.ajax({
			url:"__URL__/getstunum/unum/"+a,
			type:"GET",
			dataType:'text',
			timeout:2000,
			success:function(data){
				var name=eval('('+data+')');
				for(var i=0;i<inputs.length;i++){
						if(a==inputs[i].value)
								inputs[i+1].value=name;
							
								
					}
			},
			error:function(){
				alert("fail");
			}
		})	
	}
	
	function addStu(){
	var stuinput=document.createElement("input");
	stuinput.className="form-control";
	stuinput.TYPE='text';
	stuinput.name="num[]";
	stuinput.onchange=changeNext;
	var studiv=document.createElement("div");
	studiv.className="col-sm-3 col-sm-offset-2 stumargintop";
	studiv.appendChild(stuinput);
	var father=document.createElement("div");
	father.appendChild(studiv);
	
	var stuinput=document.createElement("input");
	stuinput.className="form-control";
	stuinput.TYPE='text';
	//stuinput.redonly="true";
	stuinput.name="name[]";
	var studiv=document.createElement("div");
	studiv.className="col-sm-3 stumargintop";
	studiv.appendChild(stuinput);
	father.appendChild(studiv);
	
	var stuinput=document.createElement("a");
	stuinput.href="javascript:void(0)";
	stuinput.onclick=function(){
			var father1=stuinput.parentNode;
			var father2=father1.parentNode;
			var childs=father2.childNodes;
			for(var i=childs.length-1;i>=0;i--){
				father2.removeChild(childs.item(i));		
			}
		}
	stuinput.innerHTML="删除";
	var studiv=document.createElement("div");
	studiv.className="col-sm-2 delete";
	studiv.appendChild(stuinput);
	father.appendChild(studiv);
	document.getElementById('stugroup').appendChild(father);
	
	}
	$(function(){
		$('#adduserbtn').click(function(){
			if($('#adduserModal #bonus').val() =='0'){
					alert("请选择竞赛获奖级别！");
					return false;
				}
					
		});
	
	});
</script></body></html>