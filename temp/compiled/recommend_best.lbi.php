
<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<h3>特别推荐</h3>
<?php endif; ?>
      <div class="right_1" id="right_1">
        <ul>
        <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_32161900_1441895117');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_32161900_1441895117']):
?>
          <li>
<a href="<?php echo $this->_var['goods_0_32161900_1441895117']['url']; ?>"><img src="<?php echo $this->_var['goods_0_32161900_1441895117']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_32161900_1441895117']['name']); ?>" width="221" height="219" /></a>

            <p> <?php echo $this->_var['goods_0_32161900_1441895117']['name']; ?></p>
            <div class="fs_rg" style="display:none">已抢<b><?php echo $this->_var['goods_0_32161900_1441895117']['count']; ?>/<?php echo $this->_var['goods_0_32161900_1441895117']['brief']; ?></b>份</div>
			<span><?php if ($this->_var['goods_0_32161900_1441895117']['promote_price'] != ""): ?>
        <b>  <?php echo $this->_var['goods_0_32161900_1441895117']['promote_price']; ?></b>
         
         
          <?php endif; ?></span>


	
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
 <?php endif; ?>



