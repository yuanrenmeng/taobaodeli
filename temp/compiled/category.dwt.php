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
<link href="themes/ecmoban_meilishuo/xinyunhongbao.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/mingyiyugao.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/yzdd.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/jp.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/jcp.css" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />


<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

  

<div class="block clearfix">
 <?php echo $this->_var['lang']['cat_id']; ?>
  
  <div class="AreaR" style=" width:100%;">
  <div class="ad" style="display:none;" id="xyad"><a href="http://taobaodeli.com/goods.php?id=1012" target="_blank"><img src="themes/ecmoban_meilishuo/images/1_01.jpg"></a> </div>
  <div class="ad" style="display:none;" id="jccp"><a href="http://taobaodeli.com/goods.php?id=1065" target="_blank"><img src="themes/ecmoban_meilishuo/images/1_02.jpg"></a> </div>
  <div class="ad" style="display:none;" id="yzdd"><a href="http://taobaodeli.com/goods.php?id=1066" target="_blank"><img src="themes/ecmoban_meilishuo/images/1_03.jpg"></a> </div>
   <div class="ad" style="display:none;" id="xp"><a href="http://taobaodeli.com/goods.php?id=1074" target="_blank"><img src="themes/ecmoban_meilishuo/images/1_04.jpg"></a> </div>

   <div class="explain" id="jpsm" style="display:none;"><img src="themes/ecmoban_meilishuo/images/1_13.gif" width="136" height="38" />
  <p>该栏目里展示的是“奖彩品”栏目里活动商品的奖品，只有购买“奖彩品”里对应的活动商品，才有几率得到该奖品，该奖品活动商品被抢购下单完后必定被送出，买家可以通过“活动商品编号”放到导航搜索里搜索找到相应的活动商品进行抢购,抢购完在提交返利时会有抽奖。</p>
</div>
         
        <div class="slideTxtBox1">
        <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
        <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_35522200_1441891488');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_35522200_1441891488']):
?>
    <div class="hd_tt">
    
      <ul>
      <li>&nbsp;&nbsp;<?php echo htmlspecialchars($this->_var['filter_attr_0_35522200_1441891488']['filter_attr_name']); ?> :</li>
      <?php $_from = $this->_var['filter_attr_0_35522200_1441891488']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
        <li><?php echo $this->_var['attr']['attr_value']; ?></li>
				<?php else: ?>
				<li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </ul>
      <div style="clear:both;"></div>
    </div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <?php endif; ?>   
   
    
        
	 
   
   <div id="ptlist" style="display:none">
<?php echo $this->fetch('library/goods_listpt.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>

</div>
   <div id="xyad1" style="display:none">
<?php echo $this->fetch('library/goods_list.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>

</div>
   <div id="mryg1" style="display:none">
<?php echo $this->fetch('library/goods_listmryg.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>

</div>
   <div id="yzdd1" style="display:none">
<?php echo $this->fetch('library/goods_listyzdd.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>

</div>
   <div id="jp_ls" style="display:none">
<?php echo $this->fetch('library/goods_listjp.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>

</div>
   <div id="jcp_ls" style="display:none">
<?php echo $this->fetch('library/goods_listjcp.lbi'); ?>
<?php echo $this->fetch('library/pages.lbi'); ?>

</div>

<script type="text/javascript">
        
        var url=document.URL;//获取当前地址
       var xyhb="id=686";
	   var jccp="id=688";
	   var yzdd="id=687";
	   var jp="id=683";
	   var xp="id=684";
	   if(url.indexOf(xyhb)>0)
		{
		document.getElementById('xyad').style.display="block";
		document.getElementById('xyad1').style.display="block";
		}
		if(url.indexOf(jccp)>0)
		{
		document.getElementById('jccp').style.display="block";
		document.getElementById('jcp_ls').style.display="block";
		}
		if(url.indexOf(yzdd)>0)
		{
		document.getElementById('yzdd').style.display="block";
		document.getElementById('yzdd1').style.display="block";
		}
		if(url.indexOf(jp)>0)
		{
		document.getElementById('jpsm').style.display="block";
		document.getElementById('jp_ls').style.display="block";
		}
		if(url.indexOf(xp)>0)
		{
		document.getElementById('xp').style.display="block";
		document.getElementById('mryg1').style.display="block";
		}
		if(url.indexOf(xyhb)<0&&url.indexOf(jccp)<0&&url.indexOf(yzdd)<0&&url.indexOf(jp)<0&&url.indexOf(xp)<0){
			document.getElementById('ptlist').style.display="block";
			}
		
		
        
        </script>
 </div>
  </div>  
  
</div>
<div class="blank5"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
