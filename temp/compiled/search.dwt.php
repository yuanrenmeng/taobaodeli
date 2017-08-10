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
<link href="themes/ecmoban_meilishuo/xinyunhongbao.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/mingyiyugao.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/yzdd.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/jp.css" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/jcp.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block clearfix">
 <?php echo $this->_var['lang']['cat_id']; ?>
  
  <div class="AreaR" style=" width:100%;">
  
         
        <div class="slideTxtBox1" style="margin:0px auto;">
        <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
        <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr']):
?>
    <div class="hd_tt">
    
      <ul>
      <li>&nbsp;&nbsp;<?php echo htmlspecialchars($this->_var['filter_attr']['filter_attr_name']); ?> :</li>
      <?php $_from = $this->_var['filter_attr']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
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
   
    
        
<div class="box">
 <div class="box_1">
  <h3 style="display:none;">
  <span><?php echo $this->_var['lang']['goods_list']; ?></span>
  <form method="GET" class="sort" name="listform">
  <?php echo $this->_var['lang']['btn_display']; ?>：
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/ecmoban_meilishuo/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/ecmoban_meilishuo/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/ecmoban_meilishuo/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>&nbsp;&nbsp;
  
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/ecmoban_meilishuo/images/goods_id_<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['goods_id']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><img src="themes/ecmoban_meilishuo/images/shop_price_<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['shop_price']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/ecmoban_meilishuo/images/last_update_<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['last_update']; ?>"></a>

  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
  </h3>

    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li class="thumb"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></li>
    <li class="goodsName">
    <div class="div_name">
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6">
        <?php if ($this->_var['goods']['goods_style_name']): ?>
        <?php echo $this->_var['goods']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     <?php if ($this->_var['goods']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?>
    <?php endif; ?>
     </div>
     <div>
     <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" ><img src="themes/ecmoban_meilishuo/images/goumai.gif"></a>
    <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);"><img src="themes/ecmoban_meilishuo/images/shoucang.gif"></a> 
    
    </div>
    </li>

    <li class="action">
      <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market" style="padding-right:10px;"><?php echo $this->_var['goods']['market_price']; ?></font> <br/>
    <?php endif; ?>
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font> 
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods']['shop_price']; ?></font> 
    <?php endif; ?>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
    <div class="ls_xyhb" style="width:1300px;">
     <ul id="seclbg">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
     <li >
			<a href="<?php echo $this->_var['goods']['url']; ?>" class="g_bt" alt="<?php echo $this->_var['goods']['goods_name']; ?>" title="<?php echo $this->_var['goods']['goods_name']; ?>" id="shangmian">抢购&nbsp;&nbsp;<font style="color:#FFF721;">奖金:<?php echo $this->_var['goods']['market_price']; ?></font></a>
             <div class="shangmian" ><a href="#"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="256" height="256" /></a>
            <p style="font-size:18px;"><?php echo $this->_var['goods']['goods_name']; ?><!--<img src="themes/ecmoban_meilishuo/images/hb1.png" width="23" height="30" id="shangmian2" />--></p>

          </div>
          <div class="dibu" id="shangmian1"><span> 已抢<b><?php echo $this->_var['goods']['count']; ?>/<?php echo $this->_var['goods']['goods_brief']; ?></b>份</span>
          
          <strong><?php echo $this->_var['goods']['shop_price']; ?></strong>
          
          </div>
            <input type="hidden" value="<?php echo $this->_var['goods']['goods_name']; ?>" id="sc_jp"/> 
        </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <div style="clear:both;"></div>
    </ul>

<script type="Text/Javascript" language="JavaScript">
var str=document.getElementById("sc_jp").value;
if(str.indexOf("jcp")>0){
	document.getElementById("shangmian").style.display="none"
	document.getElementById("shangmian1").style.display="none"
document.getElementById("shangmian2").style.display="none"
	}

var nav = document.getElementById("seclbg");//指定id元素
        var b = nav.getElementsByTagName("b");//获得所有li(数组)
		var li = nav.getElementsByTagName("li");
        for (var i = 0; i < b.length; i++) {
            var str = b[i].innerHTML;//获得li中href
			var ar=str.split('/');
            if (parseInt(ar[0]) == parseInt(ar[1])){//为当前地址则增加li属性
			
                li[i].className="libg";
				
                }
        }  

</script>


    </div>




    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
    <div class="goodsList">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
     <ul class="clearfix bgcolor"<?php if (($this->_foreach['goods_list']['iteration'] - 1) % 2 == 0): ?>id=""<?php else: ?>id="bgcolor"<?php endif; ?>>
    <li style="margin-right:15px;">
    <a href="javascript:;" id="compareLink" onClick="Compare.add(<?php echo $this->_var['goods']['goods_id']; ?>,'<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>','<?php echo $this->_var['goods']['type']; ?>')"
 class="f6"><?php echo $this->_var['lang']['compare']; ?></a>
    </li>
    <li class="goodsName">
    <div class="div_name">
    <a href="<?php echo $this->_var['goods']['url']; ?>" class="f6 f5">
        <?php if ($this->_var['goods']['goods_style_name']): ?>
        <?php echo $this->_var['goods']['goods_style_name']; ?><br />
        <?php else: ?>
        <?php echo $this->_var['goods']['goods_name']; ?><br />
        <?php endif; ?>
      </a>
     
     <?php if ($this->_var['goods']['goods_brief']): ?>
    <?php echo $this->_var['lang']['goods_brief']; ?><?php echo $this->_var['goods']['goods_brief']; ?><br />
    <?php endif; ?> 
    </div>
     <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);" class="bnt_blue">加入收藏</a>
    <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="bnt_blue">立即购买</a>
    </li>
    <li>
   
    </li>
    <li class="action">
     <?php if ($this->_var['show_marketprice']): ?>
    <?php echo $this->_var['lang']['market_price']; ?><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font><br />
    <?php endif; ?>
    <?php if ($this->_var['goods']['promote_price'] != ""): ?>
    <?php echo $this->_var['lang']['promote_price']; ?><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
    <?php else: ?>
    <?php echo $this->_var['lang']['shop_price']; ?><font class="shop"><?php echo $this->_var['goods']['shop_price']; ?></font><br />
    <?php endif; ?>
    </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['category'] > 0): ?>
  </form>
  <?php endif; ?>

 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
  


 </div>
  </div>  
  
</div>
<div class="blank5"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
