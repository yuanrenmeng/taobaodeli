
<?php if ($this->_var['user_info']): ?>
<h4>
<a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a> 
</h4> 
 <span><a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a> </span>
 <input type="hidden" id="user_name" value="<?php echo $this->_var['user_info']['username']; ?>"/>
  <?php else: ?> 
  <div class="log_res">
<a href="user.php">登录</a>  <a  href="user.php?act=register">注册</a> 
 </div>
 
 <?php endif; ?>