
    
      <ul >
      <?php $_from = $this->_var['cat_id_goods_list_215']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_95722900_1441890120');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_95722900_1441890120']):
?>
        <li><a href="<?php echo $this->_var['goods_0_95722900_1441890120']['url']; ?>" target="_blank">
<img src="<?php echo $this->_var['goods_0_95722900_1441890120']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods_0_95722900_1441890120']['name']); ?>"   
width="261" height="287" />

</a><a href="<?php echo $this->_var['goods_0_95722900_1441890120']['url']; ?>" class="qg_bt " target="_blank">抢购&nbsp;&nbsp;<font style="color:#FFF721;">奖金:<?php echo $this->_var['goods_0_95722900_1441890120']['market_price']; ?></font></a>
          <p><?php echo sub_str($this->_var['goods_0_95722900_1441890120']['name'],28); ?><!--<img src="themes/ecmoban_meilishuo/images/hb.gif" width="23" height="30" />--></p>
          <span>已抢<b><?php echo $this->_var['goods_0_95722900_1441890120']['count']; ?>/<?php echo $this->_var['goods_0_95722900_1441890120']['brief']; ?></b>件</span><strong>
          <?php echo $this->_var['goods_0_95722900_1441890120']['shop_price']; ?>
         
          
          </strong>  </li>
          
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <div style="clear:both;"></div>
      </ul>
     
