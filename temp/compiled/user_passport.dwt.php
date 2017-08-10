<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/user_login.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/user_res.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block block1">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>


<?php if ($this->_var['action'] == 'login'): ?>
<div class="user_login">


<div class="left"><h2>淘宝得利会员登录</h2>

 <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()" id="formLogin">
<table >
  <tr>
    <td class="td1"> 用户名：






</td>
    <td class="td2"><label for="textfield"></label>
      <input name="username" type="text" size="25" id="user_name" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1">密 码:</td>
    <td class="td2"><label for="textfield2"></label>
      <input name="password" type="password" size="15" id="pass_word" /></td>
    <td>&nbsp;</td>
  </tr>
   <!– 判断是否启用验证码<?php if ($this->_var['enabled_captcha']): ?> –>
   <tr>
    <td class="td1">验证码:</td>
    <td class="td2"><label for="textfield2"></label>
      <input type="text" name="captcha" id="yanzheng" />&nbsp;<img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></td>
    <td>&nbsp;</td>
  
          <?php endif; ?>
  <tr>
    <td class="td1">&nbsp;</td>
    <td class="td2"><input type="checkbox" value="1" name="remember" id="remember" />请保存我这次的登录信息
     </td>
    <td><input type="hidden" name="act" value="act_login" />
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" /></td>
  </tr>
  <tr>
    <td class="td1">&nbsp;</td>
    <td  class="td2"><span><a href="user.php?act=get_password">忘记密码</a></span><a href="javascript:void(0)" onClick="document.getElementById('formLogin').submit()" class="login_bt">登  录</a></td>
    <td>&nbsp;</td>
  </tr>
</table></form>
</div>
<div class="right">
<p>还没有账号？轻松注册 ！</p><a href="user.php?act=register" class="reg_bt">注册</a>
<font style="display:none;">
<p>你还可以用以下方式直接登录：</p>
 <a href="#"><img src="themes/ecmoban_meilishuo/images/02_03.gif" width="25" height="30" /></a><a href="#"><img src="themes/ecmoban_meilishuo/images/02_05.gif" width="31" height="28" /></a></div>
 </font>
<div style="clear:both"></div>

</div>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'register'): ?>
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
    <div class="usBox">
      <div class="usBox_2 clearfix">
        <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
      </div>
    </div>
    <?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div class="user_res">


<div class="left"><h2>淘宝得利会员注册</h2>
 <form action="user.php" method="post" name="formUser" onsubmit="return register();" id="user_rs">
<table >
<tr>
    <td class="td1"> 用户名：






</td>
    <td class="td2"><label for="textfield"></label>
      <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);"   /> 
      <span style="color:#F00; font-size:15px; margin-top:8px;" id="username_notice">*</span>
     </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1"> 邮箱：






</td>
    <td class="td2"><label for="textfield"></label>
      <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  /> 
       <span style="color:#F00; font-size:15px; margin-top:8px;" id="email_notice">*</span>
      </td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td class="td1">密 码:</td>
    <td class="td2"><label for="textfield2"></label>
     <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)"  /> 
      <span style="color:#F00; font-size:15px; margin-top:8px;" id="password_notice">*</span>
     </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1">确认密码：</td>
    <td class="td2"><label for="textfield3"></label>
     <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  />
     <span style="color:#F00; font-size:15px; margin-top:8px;" id="conform_password_notice">*</span>
     </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1"></td>
    <td class="td2"><input name="agreement" type="checkbox" value="1" checked="checked" /> 已看过并同意<a href="#"> 《淘宝得利网络服务协议》</a></td>
    <td><input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" /></td>
  </tr>
  <tr>
    <td class="td1">&nbsp;</td>
    <td  class="td2"><a href="javascript:void(0)" onClick="document.getElementById('user_rs').submit()" class="login_bt">注册</a></td>
    <td>&nbsp;</td>
  </tr>
</table></form>
</div>
<div class="right"><p>已经注册账号？请直接登录</p><a href="user.php" class="reg_bt">登录</a>
<font style="display:none;">
<p>你还可以用以下方式直接登录：</p>
 <a href="#"><img src="themes/ecmoban_meilishuo/images/02_03.gif" width="25" height="30" /></a><a href="#"><img src="themes/ecmoban_meilishuo/images/02_05.gif" width="31" height="28" /></a>
 </font>
 </div>
<div style="clear:both"></div>

</div>
<?php endif; ?>
<?php endif; ?>



    <?php if ($this->_var['action'] == 'get_password'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
            <td><input name="email" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="send_pwd_email" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
            <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
            <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
          </tr>          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          
          <tr>
            <td> </td>
<td><input type="hidden" name="act" value="check_answer" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <br />
      <table width="80%" border="0" align="center">
        <tr>
          <td><?php echo $this->_var['lang']['new_password']; ?></td>
          <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
        </tr>
        <tr>
          <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
          </td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>

<?php endif; ?>

</div>
<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
