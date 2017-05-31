<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加任务</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/Company_crm/Public/css/mine.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Company_crm/Public/ckeditor/ckeditor.js"></script>    
   
<link  rel="stylesheet" type="text/css" href="/Company_crm/Public/css/ui.datepicker.css"/>
<script type="text/javascript" src="/Company_crm/Public/js/jquery-1.8.3.js"></script>
<script type="text/javascript" src="/Company_crm/Public/js/ui.datepicker.js"></script>
<script type="text/javascript" src="/Company_crm/Public/js/ui.datepicker-zh-cn.js"></script>
<script>
$(function() {

	$('#begin_time').datepicker({showOn: "both", buttonImage: "/Company_crm/Public/images/datepicker.gif", buttonImageOnly: true});
	$('#end_time').datepicker({showOn: "both", buttonImage: "/Company_crm/Public/images/datepicker.gif", buttonImageOnly: true});
})
</script>
    </head>
     <body>
       <div class="list_box">
           <div class="header">
               <span class="one">当前位置是：项目主管-》添加任务信息</span>
               <span class="two"><a href="<?php echo U('Home/Develop/task_list');?>">【返回】</a></span>
           </div>
           <div class="bottom">
           <form action="/Company_crm/index.php/Home/Develop/task_add" method="post" enctype="multipart/form-data"  onsubmit="return checktask();">
               <table class="table_2" border="1" cellspacing="0" bordercolor="#CCCCCC">
                <tr>
                    <td>任务工单名称</td>
                    <td><input type="text"  name="task_name"  id="task_name"  style="width:200px;" /></td>
                </tr>  
                  <tr>
                    <td>任务分配给</td>
                    <td>
                                <select name="fzr_id"  id="fzr_id">
                                            <option value="0">--请选择--</option>
                                            <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vv['item_id']); ?>"><?php echo ($vv['item_fzr']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                    </td>
                </tr>            
                <tr>
                    <td>任务工单的开始时间</td>
                    <td><input type="text" name="task_ctime"  id="begin_time" style="width:200px;" /></td>
                </tr>
                 <tr>
                    <td>任务工单的结束时间</td>
                    <td><input type="text" name="task_ltime"  id="end_time" style="width:200px;" /></td>
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
    function checktask(){
      var task_name=$("#task_name").val();
  	  var fzr_id=$("#fzr_id").val();
  	  var begin_time=$("#begin_time").val();
  	  var end_time=$("#end_time").val();
  	  if(task_name==""){
  		    alert("任务工单名称不能为空");
  		    return false;
  	  }
  	  if(fzr_id=="0"){
  		   alert("没有分配给负责人");
  		   return false;
  	  }
  	  if(begin_time==""){
  		  alert("任务开始时间不能为空");
  		  return false;
  	  }
  	  if(end_time==""){
  		  alert("任务结束的时间不能为空");
  		  return false;
  	  }
    }
</script>
<script type="text/javascript">
    CKEDITOR.replace('content',{
        toolbar : 'Full',
        uiColor : '#9AB8F3',
        height:'200'
    });
</script>


</html>