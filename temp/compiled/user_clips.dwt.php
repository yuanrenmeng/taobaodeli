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


<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js')); ?>
</head>
<body>
<div class="content_gr">
  <div class="top">
  <span>欢迎回来，<strong><?php echo $this->_var['info']['username']; ?></strong>！<a href="user.php?act=logout">退出</a><p><a href="/index.php">返回首页</a></p></span>
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
  
   <?php if ($this->_var['action'] == 'default'): ?>
  <p>上次登录时间：<?php echo $this->_var['info']['last_time']; ?></p>
  <p>注册等级：<?php echo $this->_var['info']['username']; ?></p>
  <p>账户余额：<strong><?php echo $this->_var['info']['surplus']; ?></strong></p>
  <p><a href="/user.php?act=account_raply"><img src="themes/ecmoban_meilishuo/images/yonghu_bt.gif" width="54" height="29" /></a></p>
  <div class="zhanghu"><ul><li><a href="/user.php?act=account_detail">帐户明细</a></li><li><a href="/user.php?act=account_log">提现记录</a></li><li>本月提交返利次数：<strong><?php echo $this->_var['info']['order_count']; ?></strong></li>
   <?php if ($this->_var['info']['is_validate'] == 0): ?>
  <li>邮箱认证<a href="javascript:sendHashMail()">（认证）</a></li>
   <?php endif; ?>
  </ul></div>
  
   <?php endif; ?>
   
   
    <?php if ($this->_var['action'] == 'collection_list'): ?>
   <h3><?php echo $this->_var['lang']['label_collection']; ?></h3>
      <table  border="0">
        <tr>
          <td class="td1" align="center"><strong>商品名称</strong></td>
          <td class="td2" align="center"><strong>价格</strong></td>
          <td class="td3" align="center"><strong>操作</strong></td>
        </tr>
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <tr>
          <td class="td1" align="center"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></td>
          <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <td class="td2" align="center"><?php echo $this->_var['goods']['promote_price']; ?></td>
          <?php else: ?>
           <td class="td2" align="center"><?php echo $this->_var['goods']['shop_price']; ?></td>
          <?php endif; ?>
          <td class="td3" align="center"><a href="<?php echo $this->_var['goods']['url']; ?>">查看</a></td>
          </tr>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
    <?php endif; ?>
    
    
      
<div style="width:605px;">
    <?php if ($this->_var['affiliate']['on'] == 1): ?>
     <?php if ($this->_var['action'] == 'affiliate'): ?>
      <?php if (! $this->_var['goodsid'] || $this->_var['goodsid'] == 0): ?>
      <h5><span><?php echo $this->_var['lang']['affiliate_detail']; ?></span></h5>
      <div class="blank"></div>
     <div style="padding-left:10px;"><?php echo $this->_var['affiliate_intro']; ?></div>
    <?php if ($this->_var['affiliate']['config']['separate_by'] == 0): ?>
    
    <div class="blank"></div>
    <h5><span align="center"><a name="myrecommend"><?php echo $this->_var['lang']['affiliate_member']; ?></a></span></h5>
    <div class="blank"></div>
   <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_lever']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_num']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['level_point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['level_money']; ?></td>
    </tr>
    <?php $_from = $this->_var['affdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('level', 'val');$this->_foreach['affdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['affdb']['total'] > 0):
    foreach ($_from AS $this->_var['level'] => $this->_var['val']):
        $this->_foreach['affdb']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['level']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['num']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['money']; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

<?php else: ?>


<?php endif; ?>

<div class="blank"></div>
<h5><span align="center">分成规则</span></h5>
<div class="blank"></div>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_money']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_mode']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_status']; ?></td>
    </tr>
    <?php $_from = $this->_var['logdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['logdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['logdb']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['logdb']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['order_sn']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['money']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['point']; ?></td>
      <td bgcolor="#ffffff"><?php if ($this->_var['val']['separate_type'] == 1 || $this->_var['val']['separate_type'] === 0): ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['val']['separate_type']]; ?><?php else: ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['affiliate_type']]; ?><?php endif; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_stats'][$this->_var['val']['is_separate']]; ?></td>
    </tr>
    <?php endforeach; else: ?>
<tr><td colspan="5" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_records']; ?></td>
</tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['logdb']): ?>
    <tr>
    <td colspan="5" bgcolor="#ffffff">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
  <div id="pager"> <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
    <select name="page" id="page" onchange="selectPage(this)">
    <?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
    </select>
    <input type="hidden" name="act" value="affiliate" />
  </div>
</form>
    </td>
    </tr>
    <?php endif; ?>
  </table>
 <script type="text/javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>

<div class="blank"></div>
<h5><span align="center"><?php echo $this->_var['lang']['affiliate_code']; ?></span></h5>
<div class="blank"></div>
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
<tr>
<td width="30%" bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>&quot; target=&quot;_blank&quot;&gt;<?php echo $this->_var['shopname']; ?>&lt;/a&gt;" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_webcode']; ?></td>
</tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" title="<?php echo $this->_var['shopname']; ?>"  class="f6"><img src="<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>" /></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="&lt;a href=&quot;<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>&quot; target=&quot;_blank&quot; title=&quot;<?php echo $this->_var['shopname']; ?>&quot;&gt;&lt;img src=&quot;<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>&quot; /&gt;&lt;/a&gt;" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_webcode']; ?></td>
</tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="[url=<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>]<?php echo $this->_var['shopname']; ?>[/url]" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_bbscode']; ?></td>
</tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" title="<?php echo $this->_var['shopname']; ?>" class="f6"><img src="<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>" /></a></td>
<td bgcolor="#ffffff"><input size="40" onclick="this.select();" type="text" value="[url=<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>][img]<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>[/img][/url]" style="border:1px solid #ccc;" /> <?php echo $this->_var['lang']['recommend_bbscode']; ?></td>
</tr>
</table>

        <?php else: ?>
        
        <style type="text/css">
        .types a{text-decoration:none; color:#006bd0;}
        </style>
    <h5><span align="center"><?php echo $this->_var['lang']['affiliate_code']; ?></span></h5>
    <div class="blank"></div>
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_view']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_code']; ?></td>
    </tr>
    <?php $_from = $this->_var['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['types'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['types']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['types']['iteration']++;
?>
    <tr align="center">
    
  
<td bgcolor="#ffffff" colspan="2">
javascript <?php echo $this->_var['lang']['affiliate_codetype']; ?><br>
<textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>" style="border:1px solid #ccc;">
<script src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>"></script>
</textarea>

[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]

<br>iframe <?php echo $this->_var['lang']['affiliate_codetype']; ?><br>
<textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_iframe"  style="border:1px solid #ccc;">
<iframe width="250" height="270" src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>&display_mode=iframe" frameborder="0" scrolling="no">
</iframe>
</textarea>
[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_iframe').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');" class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]

<br /><?php echo $this->_var['lang']['bbs']; ?>UBB <?php echo $this->_var['lang']['affiliate_codetype']; ?><br />
<textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_ubb"  style="border:1px solid #ccc;"><?php if ($this->_var['val'] != 5): ?>[url=<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>][img]<?php if ($this->_var['val'] < 3): ?><?php echo $this->_var['goods']['goods_thumb']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>[/img][/url]<?php endif; ?>

[url=<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>][b]<?php echo $this->_var['goods']['goods_name']; ?>[/b][/url]
<?php if ($this->_var['val'] != 1 && $this->_var['val'] != 3): ?>[s]<?php echo $this->_var['goods']['market_price']; ?>[/s]<?php endif; ?> [color=red]<?php echo $this->_var['goods']['shop_price']; ?>[/color]</textarea>

[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_ubb').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]

<?php if ($this->_var['val'] == 5): ?><br /><?php echo $this->_var['lang']['im_code']; ?> <?php echo $this->_var['lang']['affiliate_codetype']; ?><br />
<textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_txt"  style="border:1px solid #ccc;"><?php echo $this->_var['lang']['show_good_to_you']; ?> <?php echo $this->_var['goods']['goods_name']; ?>

<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?></textarea>[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_txt').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]<?php endif; ?>

</td>
</tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
<script language="Javascript">
copyToClipboard = function(txt)
{
 if(window.clipboardData)
 {
    window.clipboardData.clearData();
    window.clipboardData.setData("Text", txt);
 }
 else if(navigator.userAgent.indexOf("Opera") != -1)
 {
   //暂时无方法:-(
 }
 else if (window.netscape)
 {
  try
  {
    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
  }
  catch (e)
  {
    alert("<?php echo $this->_var['lang']['firefox_copy_alert']; ?>");
    return false;
  }
  var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
  if (!clip)
    return;
  var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
  if (!trans)
    return;
  trans.addDataFlavor('text/unicode');
  var str = new Object();
  var len = new Object();
  var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
  var copytext = txt;
  str.data = copytext;
  trans.setTransferData("text/unicode",str,copytext.length*2);
  var clipid = Components.interfaces.nsIClipboard;
  if (!clip)
  return false;
  clip.setData(trans,null,clipid.kGlobalClipboard);
 }
}
                </script>
            
            <?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>
</div>
  
   
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
