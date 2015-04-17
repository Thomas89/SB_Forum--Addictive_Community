<div class="room-title-bar">
	<div class="title fleft">
		<span><?php __($community_name) ?></span><?php __("R_TITLE") ?>
	</div>
</div>

<?php if($step == 1): ?>
	<div class="box">
		<div class="step-box">
			<div class="current"><h3><?php __("R_STEP_1") ?></h3><span class="tiny"><?php __("R_STEP_AGREEMENT") ?></span></div>
			<div class="next"><h3><?php __("R_STEP_2") ?></h3><span class="tiny"><?php __("R_STEP_YOUR_ACCOUNT") ?></span></div>
			<div class="next"><h3><?php __("R_STEP_3") ?></h3><span class="tiny"><?php __("R_STEP_CONFIRMATION") ?></span></div>
		</div>
		<form>
			<div class="input-box center">
				<textarea style="width: 550px; height: 200px" readonly><?php __("R_EULA") ?></textarea>
			</div>
			<div class="input-box center">
				<input type="button" value="<?php __("R_AGREE") ?>" onclick="javascript:location.href='register?step=2'"> &nbsp;
				<input type="submit" value="<?php __("R_DISAGREE") ?>" class="cancel" onclick="javascript:location.href='/'">
			</div>
		</form>
	</div>
<?php elseif($step == 2): ?>
	<script type="text/javascript">
		function CheckPassword() {
			var password = $('#password').val();
			var confirm = $('#password_conf').val();
			if(password != confirm) {
				$('#passwdMatch').fadeIn().css('display', 'inline-block');
				$('#formSubmit').attr('disabled', 'disabled');
			}
			else {
				$('#passwdMatch').fadeOut().css('display', 'none');
				$('#formSubmit').attr('disabled', false);
			}
		}
		function CheckUsername()
		{
			var value = $('#username').val();
			if(value.length < 3 || value.length > 20) {
				$('#formSubmit').attr('disabled', 'disabled');
			}
			else {
				$('#formSubmit').attr('disabled', false);
			}
		}
	</script>
	<div class="box">
		<div class="step-box">
			<div class="previous"><h3><?php __("R_STEP_1") ?></h3><span class="tiny"><?php __("R_STEP_AGREEMENT") ?></span></div>
			<div class="current"><h3><?php __("R_STEP_2") ?></h3><span class="tiny"><?php __("R_STEP_YOUR_ACCOUNT") ?></span></div>
			<div class="next"><h3><?php __("R_STEP_3") ?></h3><span class="tiny"><?php __("R_STEP_CONFIRMATION") ?></span></div>
		</div>
		<?php echo $notification ?>
		<form action="register/sign_up" method="post" class="validate">
			<div class="input-box">
				<div class="label"><?php __("R_USERNAME") ?></div>
				<div class="field"><input type="text" name="username" id="username" class="required small" maxlength="20" onkeyup="CheckUsername()"> &nbsp; <em><?php __("R_USERNAME_NOTICE") ?></em></div>
			</div>
			<div class="input-box">
				<div class="label"><?php __("R_PASSWORD") ?></div>
				<div class="field"><input type="password" name="password" id="password" class="required small"> &nbsp; <em><?php __("R_PASSWORD_NOTICE") ?></em></div>
			</div>
			<div class="input-box">
				<div class="label"><?php __("R_RETYPE_PASSWD") ?></div>
				<div class="field"><input type="password" name="password_conf" id="password_conf" class="required small" onblur="CheckPassword()"> &nbsp; <div id="passwdMatch" style="display:none; color:#bb0000; font-weight:bold;"><i class="fa fa-exclamation-triangle" style="font-weight:normal"></i> <?php __("R_PASSWORD_ERROR") ?></div></div>
			</div>
			<div class="input-box">
				<div class="label"><?php __("R_EMAIL_ADDR") ?></div>
				<div class="field"><input type="text" name="email" class="required email medium"></div>
			</div>
			<div class="input-box center">
				<input type="submit" id="formSubmit" value="<?php __("R_STEP_2_SEND") ?>">
			</div>
		</form>
	</div>
<?php elseif($step == 3): ?>
	<div class="box">
		<div class="step-box">
			<div class="previous"><h3><?php __("R_STEP_1") ?></h3><span class="tiny"><?php __("R_STEP_AGREEMENT") ?></span></div>
			<div class="previous"><h3><?php __("R_STEP_2") ?></h3><span class="tiny"><?php __("R_STEP_YOUR_ACCOUNT") ?></span></div>
			<div class="current"><h3><?php __("R_STEP_3") ?></h3><span class="tiny"><?php __("R_STEP_CONFIRMATION") ?></span></div>
		</div>
		<div class="input-box center">
			<i class="fa fa-check" style="font-size: 50px"></i><br><br>
			<h2><?php __("R_DONE_CONGRATULATIONS") ?></h2><br>
			<h3><?php __("R_DONE_SUCCESS") ?></h3>
			<?php if($general_security_validation == "true"): ?>
				<h3><?php __("R_DONE_VALIDATE") ?></h3>
			<?php endif; ?>
		</div>
	</div>
<?php elseif($step == 4): ?>
	<div class="box">
		<div class="step-box">
			<div class="previous"><h3><?php __("R_STEP_1") ?></h3><span class="tiny"><?php __("R_STEP_AGREEMENT") ?></span></div>
			<div class="previous"><h3><?php __("R_STEP_2") ?></h3><span class="tiny"><?php __("R_STEP_YOUR_ACCOUNT") ?></span></div>
			<div class="previous"><h3><?php __("R_STEP_3") ?></h3><span class="tiny"><?php __("R_STEP_CONFIRMATION") ?></span></div>
			<div class="current"><h3><?php __("R_STEP_4") ?></h3><span class="tiny"><?php __("R_STEP_VALIDATION") ?></span></div>
		</div>
		<div class="input-box center">
			<i class="fa fa-check" style="font-size: 50px"></i><br><br>
			<h2><?php __("R_DONE_CONGRATULATIONS") ?></h2><br>
			<h3><?php __("R_DONE_SUCCESS_VALIDATED") ?></h3>
		</div>
	</div>
<?php endif; ?>
