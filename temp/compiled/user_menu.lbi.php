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
//���ͣ��������������Ŀ
        var domain='http://www.taobaodeli.com/user.php';
        var url=document.URL;//��ȡ��ǰ��ַ
        var nav = document.getElementById("menu_nav");//ָ��idԪ��
        var a = nav.getElementsByTagName("a");//�������a(����)
        for (var i = 0; i < a.length; i++) {
            var href = a[i].href;//���a��href
            if (href==url){//Ϊ��ǰ��ַ������li����
                a[i].className="lef_menu";
                }
	
	
			
        }  
</script>