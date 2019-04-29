<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/shop.0csy.com/addons/wxtemplatemsg/wxtemplatemsg.html";i:1521018942;}*/ ?>
<div class="options-btn">
	<button class="btn-common btn-big" onclick="getTemplateId()">获取</button>
</div>
<div class="server-msg content">
<!-- 	<div class="mb10"> -->
<!-- 		<div class="tiphelp-info"> -->
<!-- 			<strong>提示：</strong>如果，请查看是否是由于以下原因造成：<br> -->
<!-- 			1、是否添加了”模板消息“功能插件。添加方法：在微信公众平台的左侧菜单点击”添加功能插件“按钮，在右侧点击”模板消息“，再点击”申请“，填写”申请开通模板消息接口“表单，点击”提交“，等待审核通过即可。<br> -->
<!-- 			2、在微信公众平台的“模板库”里点击“修改行业”，弹出层里面的“主营行业”全部选择“消费品”，”副营行业“全部选择”其它“;<br> -->
<!-- 			3、在微信公众平台里”我的模板“最多添加15个，如果多于15个，请删除不用的模板。 -->
<!-- 		</div> -->
<!-- 	</div> -->
	<table class="table-class">
		<colgroup>
			<col style="width: 3%;">
			<col style="width: 20%">
			<col style="width: 20%">
			<col style="width: 27%">
			<col style="width: 30%">
		</colgroup>
		<tbody>
			<tr>
				<th><i class="checkbox-common"><input type="checkbox" onclick="CheckAll(this)" /></i></th>
				<th align="left">编号<?php echo $headid; ?></th>
				<th align="left">标题</th>
				<th align="left">内容示例</th>
				<th>模板ID</th>
				<th>是否启用</th>
			</tr>
		</tbody>
		<tbody id="grouplis">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$info): ?>
			<tr name="li">
				<td align="center"><i class="checkbox-common"><input name="sub" type="checkbox" value="$info["template_id"]" ></i></td>
				<td align="left"><?php echo $info['template_no']; ?></td>
				<td align="left"><?php echo $info['title']; ?></td>
				<td align="left">
					<div class="example-txt">
						<?php echo $info['headtext']; ?><br> 姓名：何某某<br>联系方式：187xxxxxxxx<br>
						店铺类型：普通店铺 <br><?php echo $info['bottomtext']; ?>
					</div>
				</td>
				<td><?php echo $info['template_id']; ?></td>
				<td><input type="checkbox" class="checkbox" onchange="changeIsEnable(<?php echo $info['id']; ?>, this)" <?php if($info['is_enable'] == '1'): ?>checked<?php endif; ?>></td>
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>

<script>
function changeIsEnable(id, event){
	if($(event).prop("checked")){
		var is_enable = 1; 
	}else{
		var is_enable = 0;
	}
	$.ajax({
		url : '<?php echo $change_is_enable_url; ?>',
		type : 'post',
		data : {'id' : id, 'is_enable' : is_enable},
		success : function (data){
		}
	})
}
function getTemplateId(){
	$.ajax({
		url : '<?php echo $url; ?>',
		type : 'get',
		success : function (data){
			if(data['code'] == 1){
				showMessage('success', '获取成功');
				location.reload();
			}else{
				showMessage('error', '获取失败');
			}
		}
	})
}

function CheckAll(event){
	var checked = event.checked;
	$("#productTbody input[type = 'checkbox']").prop("checked",checked);
	if(checked) $(".table-class tbody input[type = 'checkbox']").parent().addClass("selected");
	else $(".table-class tbody input[type = 'checkbox']").parent().removeClass("selected");
}
</script>
</div>
