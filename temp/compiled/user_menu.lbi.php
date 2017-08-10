<style type="text/css">

.lef_menu{background-color:#CCC;}
</style>
<div id="menu_nav">
<p><a href="user.php" <?php if ($this->_var['action'] == 'default'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_welcome']; ?></a></p>
<p><a href="user.php?act=profile"<?php if ($this->_var['action'] == 'profile'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_profile']; ?></a></p>
<p><a href="user.php?act=order_list"<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_order']; ?></a></p>

<p><a href="user.php?act=collection_list"<?php if ($this->_var['action'] == 'collection_list'): ?>class="curs"<?php endif; ?>> <?php echo $this->_var['lang']['label_collection']; ?></a></p>

<p><?php if ($this->_var['affiliate']['on'] == 1): ?><a href="user.php?act=affiliate"<?php if ($this->_var['action'] == 'affiliate'): ?>class="curs"<?php endif; ?>><?php echo $this->_var['lang']['label_affiliate']; ?></a><?php endif; ?></p>
</div>
<script type="text/javascript">
//光板停留在所在所在栏目
        var domain='http://www.taobaodeli.com/user.php';
        var url=document.URL;//获取当前地址
        var nav = document.getElementById("menu_nav");//指定id元素
        var a = nav.getElementsByTagName("a");//获得所有a(数组)
        for (var i = 0; i < a.length; i++) {
            var href = a[i].href;//获得a中href
            if (href==url){//为当前地址则增加li属性
                a[i].className="lef_menu";
                }
	
	
			
        }  
</script>