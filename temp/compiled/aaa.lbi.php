
<script type="text/javascript" src="themes/ecmoban_meilishuo/js/jquery.scrollLoading.js"></script>

<ul id="yzbg">
<?php $_from = $this->_var['cat_id_goods_list_687']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>

          <li><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
  <?php echo $this->_var['goods']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>
<img src="/themes/ecmoban_meilishuo/images/loading_230.gif" data-url="<?php echo $this->_var['goods']['thumb']; ?>"  class="scrollLoading" />

</a>


<a href="<?php echo $this->_var['goods']['url']; ?>" class="qg_bt" target="_blank">抢购&nbsp;&nbsp;<font style="color:#FFF721;">奖金:<?php echo $this->_var['goods']['market_price']; ?></font></a>
              <p><?php echo sub_str($this->_var['goods']['name'],33); ?><!--<img src="themes/ecmoban_meilishuo/images/hb.gif" width="23" height="30" />--></p>
              <span>已抢<strong><?php echo $this->_var['goods']['count']; ?>/<?php echo $this->_var['goods']['brief']; ?></strong>份</span>
              <b>
             
          <?php echo $this->_var['goods']['shop_price']; ?>
          
         
         
</b>
              </li>
            
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
            
            
          </ul>

<script>$(".scrollLoading").scrollLoading();</script>

<script type="text/javascript">
        
        var nav = document.getElementById("yzbg");//指定id元素
        var b = nav.getElementsByTagName("strong");//获得所有li(数组)
		var li = nav.getElementsByTagName("li");
		var a=nav.getElementsByTagName("a");
        for (var i = 0; i < b.length; i++) {
            var str = b[i].innerHTML;//获得li中href
			var ar=str.split('/');
            if (parseInt(ar[0]) == parseInt(ar[1])){//为当前地址则增加li属性
			
                li[i].className="libg";
				
                }
        }  
        </script>