@extends("layouts.master_web")

@section("title")
	个人账户
@stop

@section("css")
	@parent
    <link rel="stylesheet" type="text/css" href="/dist/css/doctor/account.css" />
@stop

@section('js-specify')
	<script src="/dist/js/lib/jquery.ui.widget.js" type="text/javascript"></script>
	<script src="/dist/js/lib/jquery.iframe-transport.js" type="text/javascript"></script>
	<script src="/dist/js/lib/jquery.fileupload.js" type="text/javascript"></script>
	<script src="/dist/js/pages/doctor/account.js" type="text/javascript"></script>
@stop

@section("main-content")
	<div class="account-wrapper">
		<div class="account-tr account-tr01">
			<span class="account-title">个人资料</span>
			<span class="account-edit">
				<img src="/images/doc_web/u76.png">
				修改资料
			</span>
		</div>
		<div class="account-tr account-tr02">
			<div class="account-trs-container">
				<div class="account-tr">
					<span class="account-key">姓名：</span>
					<!-- <span class="account-span">王磊</span> -->
					<input id="account_name" type="text" class="account-input account-no-edit" value="{{{ $name }}}" readonly="true" />
				</div>
				<div class="account-tr">
					<span class="account-key">职称：</span>
					<!-- <span class="account-span">主任医师</span> -->
					<input id="account_quality" type="text" class="account-input account-no-edit" value="{{{ $title }}}" readonly="true" />
				</div>
				<div class="account-tr">
					<span class="account-key">科室：</span>
					<!-- <span class="account-span">小儿科</span> -->
					<!-- <input id="account_room" type="text" class="account-input account-no-edit" value="{{{ $department }}}" readonly="true" /> -->
					<select id="account_room" class="account-input account-no-edit" disabled="">
						<option value="0">儿内科</option>
						<option value="1">妇科</option>
						<option value="2">外科</option>
						<option value="3">皮肤科</option>
					</select>
				</div>
				<div class="account-tr" style="">
					<span class="account-key">专长：</span>
					<!-- <span class="account-span">小儿呼吸道、大肠肠、小儿头大无脑痴呆症、先天性小儿麻痹症、装逼症</span> -->
					<textarea id="account_skill" class="account-input account-skills account-no-edit" readonly="true">{{{ $specialty }}}</textarea>
				</div>
			</div>
			<div class="account-avatar-container">
				<div class="account-avatar">
					<img src="/images/doc_web/u54.jpg">
				</div>
				<div id="account_upload_btn" class="account-upload-btn">
					<form action="/doc/upload_portrait" method="post" enctype="multipart/form-data" id="portrait">
						<img src="/images/doc_web/u12.png" alt="" class="bg">
						<span class="accout-upload-text">修改头像</span>
						<input id="change_avatar" name="portrait" type="file" class="account-upload-btn account-file">
					</form>
					
				</div>
			</div>
		</div>
		<div class="account-tr account-tr03">
			<span class="account-key">简介：</span>
			<!-- <span class="span">小儿呼吸道、大肠肠、小儿头大无脑痴呆症、先天性小儿麻痹症、装逼症、小儿呼吸道、大肠肠、小儿头大无脑痴呆症、先天性小儿麻痹症、装逼症</span> -->
			<textarea id="account_brief" class="account-no-edit" readonly="true">{{{ $description }}}</textarea>
		</div>
		<div class="account-submit">
			<img src="/images/doc_web/u12.png" alt="" class="bg">
			<span class="accout-submit-text">确定修改</span>
		</div>
	</div>
@stop
