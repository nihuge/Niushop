<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"template/wap\default_new\Pay\payCallbackPc.html";i:1530350222;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo lang('pay'); ?>-<?php echo $title; ?></title>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pc_option_payment.css">
<style>
.cart-btn{
	background: #4CAF50;
}
.cart-btn:hover{
	background: #479C4B;
}
</style>
</head>
<body>

<?php if($status==-1): ?>
	<div style="position: absolute;width: 100%;height: 100%;background: rgba(0,0,0,0.8);text-align: center;">
		<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/other_view.png" class="other-view "/>
	</div>
<?php else: ?>
	
	<div class="header container">
		<div class="logo fl" style="width: 280px;">
			<img src="<?php echo __IMG($web_info['logo']); ?>" style="width: 100%;" />
		</div>
	</div>
	
	<div class="layout cart-btn-wrap">
		<div class="js-main container border border-gray-white text-default">
			<div style="padding:40px;">
			
				<?php if($status==1): ?>
					<p style="font-size:16px;">
						<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_success.png" style="vertical-align: middle;margin-right: 10px;width: 30px;"/><?php echo lang('you_have_paid_successfully'); ?>
					</p>
				<?php else: ?>
					<p style="font-size:16px;">
						<img src="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_error.png" style="vertical-align: middle;margin-right: 10px;width: 30px;"/><?php echo lang('payment_failed'); ?>
					</p>
				<?php endif; ?>
				<p style="text-indent: 40px;">
					<?php echo lang('payer'); ?>：<span class="text-sub"><?php echo $member_info['user_info']['nick_name']; ?></span>
				</p>
				<?php if(!(empty($order_no) || (($order_no instanceof \think\Collection || $order_no instanceof \think\Paginator ) && $order_no->isEmpty()))): ?>
				<p style="text-indent: 40px;">
					<?php echo lang('order_number'); ?>：<span class="text-sub"><?php echo $order_no; ?></span>
				</p>
				<?php endif; ?>
			</div>
			<div class="padding-small order-container" style="margin-top:20px;">
				<div class="text-center">
					<a class="cart-btn text-default" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>"><?php echo lang('access_member_center'); ?></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer">
		<div class="copyright">
			<div class="ft-copyright">
				<a href="javascript:;" target="_blank"><?php echo $title; ?><?php echo lang('provide_technical_support'); ?></a>
			</div>
		</div>
	</div>

<?php endif; ?>
<script>
$(function() {
	setFooterStyle();
});
function setFooterStyle(){
	var main_height = $(".js-main").height()+220;
	var window_height = $(window).height();
	if(main_height>window_height){
		$('.footer').css("position","relative");
	}else{
		$('.footer').css("position","fixed");
	}
}

window.onresize = function(){
	setFooterStyle();
}

</script>
</body>
</html>