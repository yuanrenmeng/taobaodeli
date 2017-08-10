 
<div class="area">
      <div id=js class="js">
        <div class="box01"> 
        <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_86166400_1441890120');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_86166400_1441890120']):
        $this->_foreach['myflash']['iteration']++;
?>
        <img onClick="location.href='<?php echo $this->_var['flash_0_86166400_1441890120']['url']; ?>'"  alt=""  src="<?php echo $this->_var['flash_0_86166400_1441890120']['src']; ?>"  >         
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </div>
        <div class="bg"></div>
        <div id=jsNav class=jsNav> <a class="trigger imgSelected" href="javascript:void(0)">1</a> <a class="trigger" href="javascript:void(0)">2</a> <a class="trigger" href="javascript:void(0)">3</a> <a class="trigger" href="javascript:void(0)">4</a> <a class="trigger" href="javascript:void(0)">5</a> </div>
      </div>
    </div>
    

 
 
 
 
 
 <div class="blank5"></div>
<div class="blank"></div>