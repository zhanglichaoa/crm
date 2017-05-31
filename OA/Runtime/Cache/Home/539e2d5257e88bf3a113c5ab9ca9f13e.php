<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加用户</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/Company_crm/Public/css/mine.css" type="text/css" rel="stylesheet">
        <script src="/Company_crm/Public/js/jquery-1.12.4.js"></script>
    </head>

     <body>
       <div class="list_box">
           <div class="header">
               <span class="one">当前位置是：用户管理-》添加用户信息</span>
               <span class="two"><a href="<?php echo U('Home/Administrator/user_list');?>">【返回】</a></span>
           </div>
           <div class="bottom">
           <form action="/Company_crm/index.php/Home/Administrator/user_add" method="post" enctype="multipart/form-data" onsubmit="return checkuser();">
               <table class="table_2" border="1" cellspacing="0" bordercolor="#CCCCCC">
               <tr>
                    <td>用户帐号</td>
                    <td><input type="text" name="user_xingming"  id="user_xingming" /></td>
                </tr>
                <tr>
                    <td>用户姓名</td>
                    <td><input type="text" name="user_name"  id="user_name" /></td>
                </tr>
                <tr>
                    <td>用户密码</td>
                    <td><input type="password" name="password"  id="password" /></td>
                </tr>
                <tr>
                    <td>手机</td>
                    <td><input type="text" name="mobile"  id="mobile" /></td>
                </tr>
                <tr>
                    <td>邮箱</td>
                    <td><input type="text" name="email"  id="email"/></td>
                </tr>
                <tr>
                    <td>所属组</td>
                    <td>
                        <select name='roleid'>
                           <?php if(is_array($rolearr)): $i = 0; $__LIST__ = $rolearr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['title']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                </tr>            
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                        <input type="button" onclick="re();" value="返回">
                    </td>
                </tr>    
               </table>
               </form>
           </div>
       </div>
    </body>
<script>
    function re(){
    	location.href="javascript:history.go(-1)";//返回上一页
    }
    function checkuser(){
    	    var accout=$("#user_xingming").val();
    	    var name=$("#user_name").val();
    	    var pwd=$("#password").val();
    	    var mobile=$("#mobile").val();
    	    var email=$("#email").val();
    	    if(accout==""){
    	    	  alert("用户帐号不能为空");
    	    	  return false;
    	    }
    	    if(name==""){
    	    	 alert("用户姓名不能为空");
    	    	 return false;
    	    }
    	    if(pwd==""){
    	    	 alert("密码不能为空");
    	    	 return false;
    	    }
    	    if(mobile==""){
    	    	 alert("手机号不能为空");
    	    	 return false;
    	    }
    	    if(email==""){
    	    	 alert("邮箱不能为空");
    	    	 return false;
    	    }
    }
</script>
</html>