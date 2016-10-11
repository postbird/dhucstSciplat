<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>计算机学院 | 科创管理后台</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="__PUBLICFILE__/css/bootstrap.css">
  <!-- Ionicons -->
  <!--  link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  -->
  <!-- Theme style -->
  <link rel="stylesheet" href="__PUBLIC__/dist/css/AdminLTE.min.css">
   <link rel="stylesheet" href="__PUBLIC__/css/style.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="__PUBLIC__/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="__PUBLIC__/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="__PUBLIC__/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="__PUBLIC__/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="__PUBLIC__/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="__PUBLIC__/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="__PUBLIC__/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="__PUBLICFILE__/css/font-awesome.min.css">
  <link rel="stylesheet" href="__PUBLICFILE__/css/animate.min.css">
  <link rel="stylesheet" href="__PUBLICFILE__/css/all.css">
  <link rel="icon" href="__PUBLICFILE__/image/icon.png" sizes="32x32" />
  <script>
	function iFrameHeight() {  
		//获取屏幕的高度
			var ifm= document.getElementById("iframepage");  
			var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument;  
			//alert(window.innerHeight);
			if(ifm != null && subWeb != null) {
			   ifm.height = subWeb.body.scrollWidth;
			   ifm.width = subWeb.body.scrollWidth;
			}  
		}   
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="__APP__/Admin/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">科创</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">科创管理系统</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li style="font-size:1.1em;margin-right:4em;color:white;" >
            	<a href="__ROOT__/index.php">前台首页</a>
          </li>
          <li style="font-size:1.1em;margin-right:4em;color:white;" >
            	<a href="<?php echo U('Admin/Index/index');?>">后台首页</a>
          </li>
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="__PUBLIC__/dist/img/photo1.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo ($us['uname']); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <li class="user-header">
                <img src="__PUBLIC__/dist/img/photo1.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo ($us['uname']); ?>(<?php echo ($us['unum']); ?>)
                  <small><?php echo ($us['rolename']); ?></small>
                </p>
              </li>
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li >
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
           <li style="font-size:1.1em;color:white;margin-right:0.5em;" >
            	<a href="<?php echo U('Admin/Index/logout');?>">注销</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="__PUBLIC__/dist/img/photo1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ($us['uname']); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="font-weight:bold;font-size:1.2em;">主菜单</li>
        <!-- 角色判定 -->
		  <li>
			 <?php switch($us["rolename"]): case "学生": ?><li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>竞赛中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/race',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>竞赛列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/myrace',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我的竞赛</a></li>
				          </ul>
				        </li>
				        <li class="treeview">
				          <a href="">
				            <i class="fa fa-pie-chart"></i>
				            <span>项目中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/projectnews',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>项目信息列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/myproject',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我参加的项目</a></li>
				          </ul>
				        </li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>讲座中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/lecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>讲座列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/mydirectlecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我发起的讲座</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/mylecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我参加的讲座</a></li>
				          </ul>
				        </li>
				        <li  class="treeview">
				        	<a href="http://cst.shiroimagnolia.com/accounts/userCheck?user=<?php echo ($userUrlNum); ?>&key=<?php echo ($userUrlName); ?>&code=<?php echo ($userUrlCheck); ?>" target="_blank">
					        	 <i class="fa fa-pie-chart"></i>
					             <span>兴趣小组</span>
					             <span class="pull-right-container">
					                <i class="fa fa-angle-left pull-right"></i>
					             </span>				        		
				        	</a>
				        </li>
				        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>个人信息中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/updateselfmsg',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>个人信息设置</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/updatepwd',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>密码设置</a></li>
			          	  </ul>
				        </li><?php break;?>
				 <?php case "教师": ?><li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>竞赛中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/race',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>竞赛列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/myrace',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我的竞赛</a></li>
				          </ul>
				        </li>
 						<li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>项目中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/projectnews',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>项目信息列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/myproject',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我参加的项目</a></li>
				          </ul>
				        </li>
						<li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>讲座中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/lecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>讲座列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/mydirectlecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我发起的讲座</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/mylecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我参加的讲座</a></li>
				          </ul>
				        </li>
				        <li  class="treeview">
				        	<a href="http://cst.shiroimagnolia.com/accounts/userCheck?user=<?php echo ($userUrlNum); ?>&key=<?php echo ($userUrlName); ?>&code=<?php echo ($userUrlCheck); ?>" target="_blank">
					        	 <i class="fa fa-pie-chart"></i>
					             <span>兴趣小组</span>
					             <span class="pull-right-container">
					                <i class="fa fa-angle-left pull-right"></i>
					             </span>				        		
				        	</a>
				        </li>
			           	 <li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>个人信息中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/updateselfmsg',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>个人信息设置</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/updatepwd',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>密码设置</a></li>
			          	  </ul>
				        </li><?php break;?>
				 <?php case "科创管理员": ?><li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>信息中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/news',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i> 信息列表</a></li>
			          </ul>
			        </li>
			        <li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>竞赛中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/race',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>普通竞赛列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/myrace',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我的竞赛</a></li>
				          	<li><a href="<?php echo U('Admin/SuperManage/race',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>系统竞赛列表</a></li>
				          </ul>
			        </li>
		           	<li class="treeview">
				          <a href="#">
				            <i class="fa fa-pie-chart"></i>
				            <span>项目中心</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				          </a>
				          <ul class="treeview-menu">
				            <li><a href="<?php echo U('Admin/Stu/projectnews',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>浏览项目信息列表</a></li>
				            <li><a href="<?php echo U('Admin/SuperManage/projectnews',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>编辑项目信息列表</a></li>
				          	<li><a href="<?php echo U('Admin/Stu/myproject',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我参加的项目</a></li>
				          </ul>
			        </li>
		           	<li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>讲座中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/Stu/lecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>讲座列表</a></li>
			          	<li><a href="<?php echo U('Admin/Stu/mydirectlecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我发起的讲座</a></li>
			          	<li><a href="<?php echo U('Admin/Stu/mylecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>我参加的讲座</a></li>
			          </ul>
			        </li>	  	   	
		          	<li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>人才库中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/elite',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>人才库列表</a></li>
		              </ul>
			        </li>
			        <li  class="treeview">
			        	<a href="http://cst.shiroimagnolia.com/accounts/userCheck?user=<?php echo ($userUrlNum); ?>&key=<?php echo ($userUrlName); ?>&code=<?php echo ($userUrlCheck); ?>" target="_blank">
				        	 <i class="fa fa-pie-chart"></i>
				             <span>兴趣小组</span>
				             <span class="pull-right-container">
				                <i class="fa fa-angle-left pull-right"></i>
				             </span>				        		
			        	</a>
			        </li>
		            <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>个人信息中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/updateselfmsg',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>个人信息设置</a></li>
			            <li><a href="<?php echo U('Admin/SuperManage/updatepwd',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>密码设置</a></li>
			          </ul>
			        </li><?php break;?>
				
				 <?php case "高级管理员": ?><li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>信息中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/news',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i> 信息列表</a></li>
			          </ul>
			        </li>
			        <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>竞赛中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/race',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>竞赛列表</a></li>
			          </ul>
			        </li>
		           <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>项目中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/projectnews',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>项目信息列表</a></li>
			            <li><a href="<?php echo U('Admin/SuperManage/project',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>申报项目列表</a></li>
			          </ul>
			        </li>
			        <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>讲座中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/lecture',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>讲座列表</a></li>
		              </ul>
			        </li>
			         <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>人才库中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/elite',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>人才库列表</a></li>
		              </ul>
			        </li>
			        <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>用户中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/user',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>用户列表</a></li>
		              </ul>
			        </li>
			        <li  class="treeview">
			        	<a href="http://cst.shiroimagnolia.com/accounts/userCheck?user=<?php echo ($userUrlNum); ?>&key=<?php echo ($userUrlName); ?>&code=<?php echo ($userUrlCheck); ?>" target="_blank">
				        	 <i class="fa fa-pie-chart"></i>
				             <span>兴趣小组</span>
				             <span class="pull-right-container">
				                <i class="fa fa-angle-left pull-right"></i>
				             </span>				        		
			        	</a>
			        </li>
			         <li class="treeview">
			          <a href="#">
			            <i class="fa fa-pie-chart"></i>
			            <span>个人信息中心</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="<?php echo U('Admin/SuperManage/updateselfmsg',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>个人信息设置</a></li>
			            <li><a href="<?php echo U('Admin/SuperManage/updatepwd',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt"><i class="fa fa-circle-o"></i>密码设置</a></li>
			          </ul>
			        </li>
			        <li class="treeview">
			          <a href="<?php echo U('Admin/SuperManage/lastip',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" target="opt">
			            <i class="fa fa-pie-chart"></i>
			            访问记录
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			        </li><?php break;?>
				 <?php default: endswitch;?>
		</li>				 
		 <!-- 角色判定结束 -->
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
     	<iframe name="opt"  id="iframepage" src="<?php echo U('Admin/Index/home',array('uid'=>$us['uid'],'uname'=>$us['uname'],'unum'=>$us['unum']));?>" frameborder="0"  style="width:100%;" onLoad="iFrameHeight()" ></iframe>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="text-align:center;">
    <div class="pull-right hidden-xs">
      <b>Version</b> V2.2.1
    </div>
    <strong> powered by 东华大学计算机科学与技术学院科技创新中心</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="__PUBLIC__/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
<script src="http://cdn.bootcss.com/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<script src="http://cdn.bootcss.com/raphael/2.1.0/raphael-min.js"></script>

<script src="__PUBLIC__/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="__PUBLIC__/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="__PUBLIC__/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="__PUBLIC__/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="__PUBLIC__/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script> -->
<script src="http://cdn.bootcss.com/moment.js/2.14.1/moment.min.js"></script>

<script src="__PUBLIC__/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="__PUBLIC__/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="__PUBLIC__/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="__PUBLIC__/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="__PUBLIC__/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="__PUBLIC__/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="__PUBLIC__/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="__PUBLIC__/dist/js/demo.js"></script>
</body>
</html>