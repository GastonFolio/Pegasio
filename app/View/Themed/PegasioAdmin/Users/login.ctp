<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!--<div class="users index">-->
<!--	<h2>--><?php //echo __d('users', 'Login'); ?><!--</h2>-->
<!--	--><?php //echo $this->Session->flash('auth');?>
<!--	<fieldset>-->
<!--		--><?php
//			echo $this->Form->create($model, array(
//				'action' => 'login',
//				'id' => 'LoginForm'));
//			echo $this->Form->input('email', array(
//				'label' => __d('users', 'Email')));
//			echo $this->Form->input('password',  array(
//				'label' => __d('users', 'Password')));
//
//			echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>';
//			echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';
//
//			echo $this->Form->hidden('User.return_to', array(
//				'value' => $return_to));
//			echo $this->Form->end(__d('users', 'Submit'));
//		?>
<!--	</fieldset>-->
<!--</div>-->
<?php //echo $this->element('Users.Users/sidebar'); ?>
<div id="login" class="animated bounceIn">
    <img id="logo" src="assets/img/logo.png" alt="appstart Logo">
    <!-- Start .login-wrapper -->
    <div class="login-wrapper">
        <ul id="myTab" class="nav nav-tabs nav-justified bn">
            <li>
                <a href="#log-in" data-toggle="tab">Login</a>
            </li>
            <li class="">
                <a href="#register" data-toggle="tab">Register</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content bn">
            <div class="tab-pane fade active in" id="log-in">

                <div class="seperator">
                    <strong>or</strong>
                    <hr>
                </div>
                <form class="form-horizontal mt0" action="index.html" id="login-form" role="form">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="text" name="email" id="email" class="form-control left-icon" value="admin@appstart.com" placeholder="Your email ...">
                            <i class="im-user s16 left-input-icon"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input type="password" name="password" id="password" class="form-control left-icon" value="somepass" placeholder="Your password">
                            <i class="im-lock s16 left-input-icon"></i>
                            <span class="help-block"><a href="#"><small>Forgout password ?</small></a></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <!-- col-lg-12 start here -->
                            <label class="checkbox">
                                <input type="checkbox" name="remember" id="remember" value="option">Remember me ?
                            </label>
                        </div>
                        <!-- col-lg-12 end here -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 mb25">
                            <!-- col-lg-12 start here -->
                            <button class="btn btn-default pull-right" type="submit">Login</button>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="register">
                <form class="form-horizontal mt20" action="#" id="register-form" role="form">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <input id="email1" name="email" type="email" class="form-control left-icon" placeholder="Type your email">
                            <i class="fa fa-envelope s16 left-input-icon"></i>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <input type="password" class="form-control left-icon" id="password1" name="password" placeholder="Enter your password">
                            <i class="im-lock s16 left-input-icon"></i>
                        </div>
                        <!-- col-lg-12 end here -->
                        <div class="col-lg-12 mt15">
                            <!-- col-lg-12 start here -->
                            <input type="password" class="form-control left-icon" id="confirm_password" name="confirm_passowrd" placeholder="Repeat password">
                            <i class="im-lock s16 left-input-icon"></i>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                    <div class="form-group mb25">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <button class="btn btn-default btn-block">Register</button>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End #.login-wrapper -->
    <?php echo $this->Html->script('/assets/js/bootstrap/bootstrap.js', array('block' => 'scriptBottom')); ?>
    <?php echo $this->Html->script('/assets/plugins/forms/icheck/jquery.icheck.js', array('block' => 'scriptBottom')); ?>
    <?php echo $this->Html->script('/assets/plugins/forms/icheck/jquery.icheck.js', array('block' => 'scriptBottom')); ?>
    <?php echo $this->Html->script('/assets/plugins/forms/icheck/jquery.icheck.js', array('block' => 'scriptBottom')); ?>
<!--    <script src="../assets/js/bootstrap/bootstrap.js"></script>-->
<!--    <script src="../assets/plugins/forms/icheck/jquery.icheck.js"></script>-->
<!--    <script src="../assets/plugins/forms/validation/jquery.validate.js"></script>-->
<!--    <script src="../assets/plugins/forms/validation/additional-methods.min.js"></script>-->
<!--    <script src="../assets/js/pages/login.js"></script>-->