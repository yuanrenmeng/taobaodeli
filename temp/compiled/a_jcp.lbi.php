
<ul id="jcpbg">
 
 <?php $_from = $this->_var['cat_id_goods_list_688']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_89469500_1441890120');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_89469500_1441890120']):
?>
            <li>
            
            <a href="<?php echo $this->_var['goods_0_89469500_1441890120']['url']; ?>" target="_blank">
<img src="<?php echo $this->_var['goods_0_89469500_1441890120']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods_0_89469500_1441890120']['name']); ?>"  
width="256" height="256" />


</a><a href="<?php echo $this->_var['goods_0_89469500_1441890120']['url']; ?>" class="qg_bt" target="_blank">抢购&nbsp;&nbsp;<font style="color:#FFF721;">奖金:<?php echo $this->_var['goods_0_89469500_1441890120']['market_price']; ?></font></a>
              <p><?php echo sub_str($this->_var['goods_0_89469500_1441890120']['name'],30); ?><!--<img src="themes/ecmoban_meilishuo/images/hb.gif" width="23" height="30" />-->&nbsp;<img src="themes/ecmoban_meilishuo/images/jiang.gif"  /></p>
              <span>已抢<strong><?php echo $this->_var['goods_0_89469500_1441890120']['count']; ?>/<?php echo $this->_var['goods_0_89469500_1441890120']['brief']; ?></strong>份</span>
              <b>
              
          <?php echo $this->_var['goods_0_89469500_1441890120']['shop_price']; ?>
          
         
          </b>
               
              </li> 
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 </ul>


<script type="text/javascript">
        
        var nav = document.getElementById("jcpbg");//指定id元素
        var b = nav.getElementsByTagName("strong");//获得所有li(数组)
		var li = nav.getElementsByTagName("li");
        for (var i = 0; i < b.length; i++) {
            var str = b[i].innerHTML;//获得li中href
			var ar=str.split('/');
            if (parseInt(ar[0]) == parseInt(ar[1])){//为当前地址则增加li属性
			
                li[i].className="libg";
				
                }
        }  
        </script>