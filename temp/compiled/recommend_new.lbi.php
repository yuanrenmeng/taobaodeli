<?php if ($this->_var['new_goods']): ?>
 
 <ul>
        
        
        
        
       <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_90509000_1441890120');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_90509000_1441890120']):
?>
        
        <li><a href="<?php echo $this->_var['goods_0_90509000_1441890120']['url']; ?>">

<img src="<?php echo $this->_var['goods_0_90509000_1441890120']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods_0_90509000_1441890120']['name']); ?>"   
width="265" height="270" />


</a>
			<font >奖金：<s style="text-decoration:none;"><?php echo $this->_var['goods_0_90509000_1441890120']['market_price']; ?></s></font>
          <p><?php echo sub_str($this->_var['goods_0_90509000_1441890120']['name'],30); ?><!--<img src="themes/ecmoban_meilishuo/images/hb.gif" width="23" height="30" />--></p>
          <span>已抢<b><?php echo $this->_var['goods_0_90509000_1441890120']['count']; ?>/<?php echo $this->_var['goods_0_90509000_1441890120']['brief']; ?></b>件</span><strong> 
          <?php echo $this->_var['goods_0_90509000_1441890120']['shop_price']; ?>
          
         
         </strong></li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        <div style="clear:both;"></div>
      </ul>
  
  
  
<?php endif; ?>
