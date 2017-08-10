<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/zhanghu.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/gr_info.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
</head>
<body>
<div class="content_gr">
  <div class="top">
<span>
  
        <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font><p><a href="/index.php">首&nbsp;页返回</a></p></span>
<a href="/index.php" ><img src="themes/ecmoban_meilishuo/images/yonghu_logo.png" width="201" height="60" /></a>




    <h6>用户中心</h6>
  </div>
  
  <div class="main_info">
  
  <div class="left">
  <?php echo $this->fetch('library/user_menu.lbi'); ?>
<div class="tt_kf">客服</div>
<div class="tel">&nbsp;400-892-1658</div><div class="qq"> &nbsp;2879378309</div>
  </div>
  <div class="right">
  
         <?php if ($this->_var['action'] == 'profile'): ?>
         
         <h3>个人信息</h3>
  <form name="formEdit" action="user.php" method="post" onSubmit="return userEdit()" class="form1" id="gform1">
  <table  border="0">
  <tr>
    <td class="td1" style="font-size:16px; color:#000" align="right">出生年月日：</td>
    <td class="td2" style="font-size:16px; color:#000">
      <?php echo $this->html_select_date(array('field_order'=>'YMD','prefix'=>'birthday','start_year'=>'-60','end_year'=>'+1','display_days'=>'true','month_format'=>'%m','day_value_format'=>'%02d','time'=>$this->_var['profile']['birthday'])); ?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1" style="font-size:16px; color:#000" align="right">性别：</td>
    <td  class="td2" style="font-size:16px; color:#000">
      <input type="radio" name="sex" value="0" <?php if ($this->_var['profile']['sex'] == 0): ?>checked="checked"<?php endif; ?> />
                    <?php echo $this->_var['lang']['secrecy']; ?>&nbsp;&nbsp;
                    <input type="radio" name="sex" value="1" <?php if ($this->_var['profile']['sex'] == 1): ?>checked="checked"<?php endif; ?> />
                    <?php echo $this->_var['lang']['male']; ?>&nbsp;&nbsp;
                    <input type="radio" name="sex" value="2" <?php if ($this->_var['profile']['sex'] == 2): ?>checked="checked"<?php endif; ?> />
                  <?php echo $this->_var['lang']['female']; ?>&nbsp;&nbsp;
      </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1" style="font-size:16px; color:#000" align="right">电子邮箱:</td>
    <td  class="td2"><label for="textfield"></label>
      <input name="email" type="text" value="<?php echo $this->_var['profile']['email']; ?>" size="25" id="past" /></td>
    <td>&nbsp;</td>
  </tr>
    <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
  <tr>
    <td class="td1" style="font-size:16px; color:#000" align="right" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?> ><?php echo $this->_var['field']['reg_field_name']; ?>：</td>
    <td  class="td2"><label for="textfield2"></label>

      <font id="<?php echo $this->_var['field']['id']; ?>" ><a href="javascript:void(0)" onclick="bangd(<?php echo $this->_var['field']['id']; ?>)" style="color:#F15703;background-color:#FFF;margin:0px; padding:0px; display:block;">未绑定</a></font><font id="<?php echo $this->_var['field']['id']; ?>k" style="display:none;"><input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" class="zhifubao" value="<?php echo $this->_var['field']['content']; ?>" id="<?php echo $this->_var['field']['id']; ?>v"/></font>

<?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span>

<?php endif; ?>
      </td>
    <td>&nbsp;</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<script type="text/javascript">
        var zfb=document.getElementById('7v').value;
	var sj=document.getElementById('5v').value;
	var ww=document.getElementById('8v').value;


	if(zfb!=""){
	document.getElementById(7).style.display="none";
	document.getElementById('7k').style.display="block";
		}
    
      if(sj!=""){
      document.getElementById(5).style.display="none";
      document.getElementById('5k').style.display="block";
        }
      if(ww!=""){
      document.getElementById(8).style.display="none";
      document.getElementById('8k').style.display="block";
      }
if(zfb==""||sj==""||ww==""){
alert('您还没有绑定相关信息，请尽快绑定，绑定完所有信息才能提现哦！');
}	
	

function bangd(num){
	
	
	if(num==7){
		document.getElementById(7).style.display="none";
		document.getElementById('7k').style.display="block";
		}
	else if(num==5){
		document.getElementById(5).style.display="none";
		document.getElementById('5k').style.display="block";
		
		}
	else if(num==8){
		document.getElementById(8).style.display="none";
		document.getElementById('8k').style.display="block";
		
		}
	
	
	
	
	}

</script>
<tr>
    <td  style="font-size:14px; color:red;height:50px; text-align:center;" colspan="3"  >支付宝、姓名、手机号不进行绑定，提现时信息验证无法通过，无法进行提现</td>
    
  </tr>
  <tr>
    <td class="td1" style="font-size:16px; color:#000"></td>
    <td  class="td2"> <input name="act" type="hidden" value="act_edit_profile" />
                    <a href="javascript:void(0)" onClick="document.getElementById('gform1').submit()">确&nbsp;认</a></td>
    <td>&nbsp;</td>
  </tr>
 
</table>

</form>

 <h3>修改密码</h3>
 <form name="formPassword" action="user.php" method="post" onSubmit="return editPassword()" class="form1" id="xform">
<table border="0">
  <tr>
    <td class="td1" style="font-size:16px; color:#000">原密码：</td>
    <td class="td2"><input name="old_password" type="password" size="25" id="pass" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1" style="font-size:16px; color:#000">新密码：</td>
    <td class="td2"><input name="new_password" type="password" size="25" id="new_pass"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1" style="font-size:16px; color:#000">确认密码：</td>
    <td class="td2"><input name="comfirm_password" type="password" size="25"  id="con_pass"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="td1">&nbsp;</td>
    <td class="td2"><a href="javascript:void(0)" onClick="document.getElementById('xform').submit()">确认修改</a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
         
         <?php endif; ?>




       <?php if ($this->_var['action'] == 'order_list'): ?>
       <h5><span><?php echo $this->_var['lang']['label_order']; ?></span></h5>
<div  style="color:red; text-align:center;">返利金将在您提交返利初审通过后的第15天返还，期间没有商品的退货</div>
       <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
           
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_addtime']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_status']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_time']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['total_fee']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['order_status']; ?></td>
            <td align="center" bgcolor="#ffffff"><a href="user.php?act=order_detail&order_id=<?php echo $this->_var['item']['order_id']; ?>" class="f6">查看详情</a></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
        <div class="blank5"></div>
       <?php echo $this->fetch('library/pages.lbi'); ?>
       <div class="blank5"></div>
       
        
       <?php endif; ?>
      




     
      <?php if ($this->_var['action'] == order_detail): ?>
        


        <h5><span><?php echo $this->_var['lang']['goods_list']; ?></span>
        
        </h5>
        <div class="blank"></div>
         <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <th width="23%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
            <th width="29%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
            <th width="13%" bgcolor="#ffffff">返利金额</th>
            <th width="13%" align="center" bgcolor="#ffffff">折扣价<?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?></th>
   
         <th width="9%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['number']; ?></th>
            <th width="20%" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['subtotal']; ?></th>
          </tr>
          <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <tr>
            <td bgcolor="#ffffff">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                <?php elseif ($this->_var['goods']['is_gift']): ?>
                <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                <?php endif; ?>
              <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（礼包）</span></a>
                <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                    <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                      <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
              <?php endif; ?>
              </td>
            <td align="left" bgcolor="#ffffff"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['market_price']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_price']; ?></td>
	   
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_number']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['subtotal']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <tr>
            <td colspan="8" bgcolor="#ffffff" align="right">
            <?php echo $this->_var['lang']['shopping_money']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?>: <?php echo $this->_var['order']['formated_goods_amount']; ?>
            </td>
          </tr>
        </table>
         <div class="blank"></div>

       


        <h5><span><?php echo $this->_var['lang']['other_info']; ?></span></h5>
        <div class="blank"></div>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">


         

         
        
         
          
          
          
          <?php if ($this->_var['order']['postscript']): ?>
          <tr>
            
            <td  align="center" bgcolor="#ffffff"><?php echo $this->_var['order']['postscript']; ?></td>
          </tr>
          <?php endif; ?>
          
        </table>
      <?php endif; ?>
    


<?php if ($this->_var['action'] == "account_raply"): ?>
        <form name="formSurplus" method="post" action="user.php" onSubmit="return submitSurplus()">
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr>
            <td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['repay_money']; ?>:</td>
            <td bgcolor="#ffffff" align="left"><input type="text" name="amount" value="<?php echo htmlspecialchars($this->_var['order']['amount']); ?>" class="inputBg" size="30" />
            </td>
          </tr>
          <tr>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_notic']; ?>:</td>
            <td bgcolor="#ffffff" align="left"><textarea name="user_note" cols="55" rows="6" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['user_note']); ?></textarea></td>
          </tr>
          <tr>
            <td bgcolor="#ffffff" colspan="2" align="center">
            <input type="hidden" name="surplus_type" value="1" />
              <input type="hidden" name="act" value="act_account" />
              <input type="submit" name="submit"  class="bnt_blue_1" value="<?php echo $this->_var['lang']['submit_request']; ?>" />
              <input type="reset" name="reset" class="bnt_blue_1" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
            </td>
          </tr>
        </table>
        </form>
        <?php endif; ?>

<?php if ($this->_var['action'] == "account_detail"): ?>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_time']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_pro_type']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['change_desc']; ?></td>
          </tr>
          <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['change_time']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['amount']; ?></td>
            <td bgcolor="#ffffff" title="<?php echo $this->_var['item']['change_desc']; ?>">&nbsp;&nbsp;<?php echo $this->_var['item']['short_change_desc']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <tr>
            <td colspan="4" align="center" bgcolor="#ffffff"><div align="right"></div></td>
          </tr>
        </table>
        <?php echo $this->fetch('library/pages.lbi'); ?>
        <?php endif; ?>

 <?php if ($this->_var['action'] == "account_log"): ?>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tr align="center">
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_time']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['surplus_pro_type']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['money']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['process_notic']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['admin_notic']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['is_paid']; ?></td>
            <td bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
          </tr>
          <?php $_from = $this->_var['account_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
          <tr>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['add_time']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['type']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['amount']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['short_user_note']; ?></td>
            <td align="left" bgcolor="#ffffff"><?php echo $this->_var['item']['short_admin_note']; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['pay_status']; ?></td>
            <td align="right" bgcolor="#ffffff"><?php echo $this->_var['item']['handle']; ?>
              <?php if (( $this->_var['item']['is_paid'] == 0 && $this->_var['item']['process_type'] == 1 ) || $this->_var['item']['handle']): ?>
              <a href="user.php?act=cancel&id=<?php echo $this->_var['item']['id']; ?>" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) return false;"><?php echo $this->_var['lang']['is_cancel']; ?></a>
              <?php endif; ?>
                            </td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <tr>
            <td colspan="7" align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['current_surplus']; ?><?php echo $this->_var['surplus_amount']; ?></td>
          </tr>
        </table>
        <?php echo $this->fetch('library/pages.lbi'); ?>
      <?php endif; ?>
   



  </div>
  <div style="clear:both"></div>
  </div>
</div>




<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
