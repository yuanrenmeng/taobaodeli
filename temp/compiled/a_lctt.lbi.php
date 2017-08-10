

   
      <ul>
      <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_92097100_1441890120');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_92097100_1441890120']):
        $this->_foreach['no']['iteration']++;
?>
        <li> <a href="<?php echo $this->_var['cat_0_92097100_1441890120']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat_0_92097100_1441890120']['name']); ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
   
    