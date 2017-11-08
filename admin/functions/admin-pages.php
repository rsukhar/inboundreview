<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

add_action( 'admin_menu', 'ibrw_add_admin_pages', 30 );
function ibrw_add_admin_pages() {
	add_menu_page( 'Inbound Review', 'Inbound Review', 'manage_options', 'ibrw-solutions', 'ibrw_solutions', '', 99 );
	add_submenu_page( 'ibrw-solutions', 'Solutions', 'Solutions', 'manage_options', 'ibrw-solutions', 'ibrw_solutions' );
	add_submenu_page( 'ibrw-solutions', 'Solutions Types', 'Solutions Types', 'manage_options', 'ibrw-types', 'ibrw_types' );
}


function ibrw_solutions() {
	echo 'ok';
}


function ibrw_types() {
	?>

<div class="b-parameters">
	<div class="b-parameters-fieldset">
		<div class="b-parameters-fieldset-title">Security</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Subscription Recovery</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item type_1">
					<input type="radio" name="subscription_recovery">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_2">
					<input type="radio" name="subscription_recovery">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_3">
					<input type="radio" name="subscription_recovery">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="subscription_recovery" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="subscription_recovery">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Captcha</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item type_1">
					<input type="radio" name="captcha" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_2">
					<input type="radio" name="captcha">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_3">
					<input type="radio" name="captcha">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="captcha">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="captcha">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Spam Protection</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item type_1">
					<input type="radio" name="spam_protection" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_2">
					<input type="radio" name="spam_protection">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_3">
					<input type="radio" name="spam_protection">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="spam_protection">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="spam_protection">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
	</div>
	<div class="b-parameters-fieldset">
		<div class="b-parameters-fieldset-title">Templates</div>
		<div class="b-parameters-fieldset-field">
        	<div class="b-parameters-fieldset-field-title">Pop-up</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item for_text">
					<input type="text" value="8">
				</label>
				<label class="b-parameters-fieldset-field-item type_6">
					<input type="radio" name="pop-up">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="pop-up">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="pop-up">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Inline</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item for_text">
					<input type="text" value="?">
				</label>
				<label class="b-parameters-fieldset-field-item type_6">
					<input type="radio" name="inline">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="inline">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="inline" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
	</div>
	<div class="b-parameters-fieldset">
		<div class="b-parameters-fieldset-title">Targeting</div>
		<div class="b-parameters-fieldset-subtitle">Live Triggers</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Leave Intention</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item type_1">
					<input type="radio" name="leave_intention" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_2">
					<input type="radio" name="leave_intention">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_3">
					<input type="radio" name="leave_intention">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="leave_intention">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="leave_intention">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Time on Page</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item type_1">
					<input type="radio" name="time_on_page" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_2">
					<input type="radio" name="time_on_page">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_3">
					<input type="radio" name="time_on_page">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="time_on_page">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="time_on_page">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
	</div>
	<div class="b-parameters-fieldset">
		<div class="b-parameters-fieldset-title">Plan</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Price</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item for_text">
					<input type="text" value="384">
				</label>
				<label class="b-parameters-fieldset-field-item for_select">
					<select>
						<option>/ year</option>
						<option>/ month</option>
					</select>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="days_for_refund">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Free Trial</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item type_1">
					<input type="radio" name="free_trial">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_2">
					<input type="radio" name="free_trial">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_3">
					<input type="radio" name="free_trial">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="free_trial" checked>
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="free_trial">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
		<div class="b-parameters-fieldset-field">
			<div class="b-parameters-fieldset-field-title">Days for Refund</div>
			<div class="b-parameters-fieldset-field-group">
				<label class="b-parameters-fieldset-field-item for_text">
					<input type="text" value="14">
				</label>
				<label class="b-parameters-fieldset-field-item type_6">
					<input type="radio" name="days_for_refund">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_4">
					<input type="radio" name="days_for_refund">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
				<label class="b-parameters-fieldset-field-item type_5">
					<input type="radio" name="days_for_refund">
					<span class="b-parameters-fieldset-field-icon"></span>
				</label>
			</div>
			<input class="b-parameters-fieldset-field-comment" type="text" placeholder="Comment">
		</div>
	</div>
</div>

<?php
}