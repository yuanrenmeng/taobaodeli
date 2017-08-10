<div class="flowBox">
<div style="display:none;">
<h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h6>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,transport.js')); ?>
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['country_province']; ?>:</td>
    <td colspan="3" bgcolor="#ffffff">
    <select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
         <option value="1" selected>中国</option>
      </select>
      <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="3" selected>安徽</option>
      </select>
      <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;">
        <option value="37" selected>蚌埠</option>
      </select>
      <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
        <option value="409" selected>中市区</option>
      </select>
    <?php echo $this->_var['lang']['require_field']; ?> </td>
  </tr>
  <?php endif; ?>
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
    <td bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="淘宝得利" />
    <?php echo $this->_var['lang']['require_field']; ?> </td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
    <td bgcolor="#ffffff"><input name="email" type="text" class="inputBg"  id="email_<?php echo $this->_var['sn']; ?>" value="865545763@qq.com" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
    <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg"  id="address_<?php echo $this->_var['sn']; ?>" value="淘宝得利" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
    <td bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg"  id="zipcode_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>:</td>
    <td bgcolor="#ffffff"><input name="tel" type="text" class="inputBg"  id="tel_<?php echo $this->_var['sn']; ?>" value="88888888888" />
    <?php echo $this->_var['lang']['require_field']; ?></td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
    <td bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg"  id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /></td>
  </tr>
  <?php if ($this->_var['real_goods_count'] > 0): ?>
  
  <tr>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
    <td bgcolor="#ffffff"><input name="sign_building" type="text" class="inputBg"  id="sign_building_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>" /></td>
    <td bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
    <td bgcolor="#ffffff"><input name="best_time" type="text"  class="inputBg" id="best_time_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?>" /></td>
  </tr>
  <?php endif; ?>
  <tr>
    <td colspan="4" align="center" bgcolor="#ffffff">
    <input type="submit" name="Submit" class="bnt_blue_2" value="<?php echo $this->_var['lang']['shipping_address']; ?>" />
      <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee']['address_id'] > 0): ?>
      
      <input name="button" type="button" onclick="if (confirm('<?php echo $this->_var['lang']['drop_consignee_confirm']; ?>')) location.href='flow.php?step=drop_consignee&amp;id=<?php echo $this->_var['consignee']['address_id']; ?>'"  class="bnt_blue" value="<?php echo $this->_var['lang']['drop']; ?>" />
      <?php endif; ?>
      <input type="hidden" name="step" value="consignee" />
      <input type="hidden" name="act" value="checkout" />
      <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
      </td>
  </tr>
</table>
</div>
<style type="text/css">
.main_one {
	width: 974px;
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
	background-repeat: no-repeat;
	height: 594px;
}


.main_one p {
	text-align: center;
	color: #bb351a;
	font-family: "微软雅黑";
	letter-spacing: 5px;
	font-size: 18px;
	font-weight: bold;
}
.main_one p a {
	font-size: 14px;
	color: #FFF;
	text-decoration: none;
	background-color: #099fb5;
	line-height: 100px;
	padding: 10px 30px 10px 30px;
}

.main_one p a:hover{background-color:#0ec2dc;}

</style>

<div class="main_one">
<div style="height:250px;"></div>
  <p>          欢迎您第一次参加活动抢购，祝您开出大红包、抽出大奖，抢购愉快！</p>
<p> <a  href="javascript:void(0)" onClick="document.getElementById('theForm').submit()">进入返利</a></p>
  <div style="clear:both"></div>
 
</div>


</div>