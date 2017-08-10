<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="themes/ecmoban_meilishuo/xq.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="themes/ecmoban_meilishuo/js/action.js"></script>
<script type="text/javascript" src="themes/ecmoban_meilishuo/js/mzp-packed-me.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
<style type="text/css">
.fshow{ width:100%; height:100%;   background: rgba(255, 255, 255, 0) none repeat scroll 0 0 !important;
  filter: Alpha(opacity=20);
  background: #000;; z-index:4; position:absolute; top:0px; display:none; }
  
.show{width:720px; height:350px; z-index:2; background-color:#fff; margin:280px auto;}


#fshow .show h1 {
	height: 50px;
	padding: 10px 0 0 0;
	position: relative;
	text-align: center;
	font-size: 25px;
	color: #75ad12;
	font-family: "微软雅黑";
	font-weight: normal;
}
#fshow .show h1 img {
	vertical-align:middle;
	margin:0 5px 0 0;
}
#fshow .show p {
	color: #000000;
	font-family: "微软雅黑";
	text-align:center;
	font-size:14px;
}
#fshow .show button {
	width:85px; height:30px;
	margin:20px 40px 0 130px;
	color:#FFF;
	font-family:"微软雅黑";
	text-align:center;
	cursor:pointer;
	border:0;
}
#bt-1{background-color:#03a6f1;}
#bt-2{background-color:#79b215;}

#sq_fl {text-align:center;background-color:#79b215;}
#sq_fl a{font-size:16px; color:#ffffff; font-weight:bold;}
</style>
</head>
<body>


<?php echo $this->fetch('library/page_header.lbi'); ?>

  <?php echo $this->fetch('library/ur_here.lbi'); ?>

<div class="block clearfix">
  
  <div class="AreaL" style="display:none;">
    
<?php echo $this->fetch('library/category_tree.lbi'); ?>



    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="fshow" id="fshow" >
<div class="show"  >
<h1><img src="themes/ecmoban_meilishuo/images/tick.png" width="48" height="51" />恭喜您抢购名额成功！</h1>
<p>得利价：<strong style="color:red;"><?php echo $this->_var['goods']['promote_price']; ?></strong>，下单价：<strong style="color:red;"><?php echo $this->_var['goods']['shop_price_formated']; ?></strong>，奖金：<strong style="color:red;"><?php echo $this->_var['goods']['market_price']; ?></strong>。
</p>
<p>
请您下单完成后复制订单号回来申请奖金，完成交易确认收货后，将返还给您奖金金额。
</p>
<p>
注意：获得抢购名额后<strong style="color:red;">30分钟</strong>内不下单付款和返回填写订单号，本次获取的名额将自动取消。</p>
<button onclick="onshow(2)" id="bt-1">继续购物</button>
<font style="display:none;" id="sq_fl">
       <a href="javascript:viod(0)" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="sqfl" id="sqfl" target="_blank" >申请奖金</a>
      </font>
<button onclick="xiadan()" id="bt-2">马上抢购</button>
</div>

</div>
<script type="text/javascript">
function onshow(num){
	
	if(num==2){
		document.getElementById('fshow').style.display="none";
		}
	
	
	}


</script>
  
  
  <div class="AreaR" style=" width:1200px; background-color:#FFF;">
  <div style="display:none;">
        <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font></div>
   
   <div id="goodsInfo" class="clearfix">
    
     
     <div class="imgInfo">
     <a href="<?php echo $this->_var['goods']['suppliers_desc']; ?>" id="zoom1" class="MagicZoom MagicThumb" title="<?php echo $this->_var['goods']['goods_style_name']; ?>" target="_blank">
      <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="360px;" height="360px" onclick="jun()"/>
     </a>
     <div class="blank5"></div>
    <div style="text-align:center; position:relative; width:100%;">
         <?php if ($this->_var['prev_good']): ?>
      <a href="<?php echo $this->_var['prev_good']['url']; ?>"><img style="position: absolute; left:0;" alt="prev" src="themes/ecmoban_meilishuo/images/up.gif" /></a>
      <?php endif; ?>
      <a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"><img alt="zoom" src="themes/ecmoban_meilishuo/images/zoom.gif" /></a>
      <?php if ($this->_var['next_good']): ?>
      <a href="<?php echo $this->_var['next_good']['url']; ?>"><img style="position: absolute;right:0;"  alt="next" src="themes/ecmoban_meilishuo/images/down.gif" /></a>
      <?php endif; ?>
      </div>
     <input type="hidden" id="junurl" value="<?php echo $this->_var['goods']['suppliers_desc']; ?>">
<script type="text/javascript">
	
	
	
	
	function jun(){
		var strkc=document.getElementById('junurl').value;
		window.open(strkc);
		
		

		}

	</script> 



         <div class="blank"></div>
           
     <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
     
         

     </div>
     
     <div class="textInfo">
     
      <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
<div class="middle">
      <h1><?php echo $this->_var['goods']['goods_name']; ?></h1>
      <p>浏览次数<?php echo $this->_var['goods']['click_count']; ?>&nbsp;次&nbsp;&nbsp;<font style="color:#F15703;"></font></p>
      
      <div class="xl">限量份数：
      <?php if ($this->_var['goods']['goods_brief'] != ""): ?>
      <strong><?php echo $this->_var['goods']['goods_brief']; ?></strong><input id="max_num" type="hidden" value="<?php echo $this->_var['goods']['goods_brief']; ?>" />
       <?php endif; ?>
       份  剩余份数：
      <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
      <?php if ($this->_var['goods']['goods_number'] == 0): ?>
      <b>活动结束 </b>
       <?php else: ?>
      <b><?php echo $this->_var['goods']['goods_number']; ?> </b>
       <?php endif; ?>
<input id="kc" type="hidden" value="<?php echo $this->_var['goods']['goods_number']; ?>" />
       <?php endif; ?>
       份 <font style="display:none;">剩余抢购名额：<b id="buynum">0</b>个</font></div>
       
      <div class="xl" >
      <div class="xl" style="display:none;" id="sw_time">
      <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
      剩余时间：<span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span>
      <input id="time" type="hidden" value="1" />
      <?php else: ?>
      <span >活动已结束</span>
      <?php endif; ?>
     </div>
     
      </div>
        <?php if ($this->_var['cfg']['show_goodssn']): ?>
                
      <a id="hhnum" style="display:none;"><?php echo $this->_var['goods']['goods_sn']; ?></a>
<input id="hhflag" type="hidden" value="<?php echo $this->_var['goods']['goods_sn']; ?>">
       <?php endif; ?>
       
      <div class="match">
       <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
      下单价：<b><?php echo $this->_var['goods']['shop_price_formated']; ?></b>
       <?php endif; ?>

      <img src="themes/ecmoban_meilishuo/images/hb1.gif" width="23" height="30" />
      <?php if ($this->_var['goods']['suppliers_desc']): ?>
	<font  id="yl"><a href="<?php echo $this->_var['goods']['suppliers_desc']; ?>" target="_blank"  style=background-color:#f37b3a;display:none; class="hqme"  >预览</a></font>
      <font id="stsw2"  style="display:none"><a href="javascript:void(0)"  id="show"  onclick="xiadan()" style=background-color:#f15703;>进入下单</a></font>
	<span id="sqfl2" style="display:none;"><a href="javascript:viod(0)" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="sqfl"  target="_blank" >申请奖金</a></span>
<input type="hidden" value="<?php echo $this->_var['goods']['suppliers_desc']; ?>" id="xdurl"/>
       <font id="start2" style=" display:none; float:right; "><a  style="background-color:#666; color:#FFF;  "  href="<?php echo $this->_var['goods']['suppliers_desc']; ?>" target="_blank" >活动结束</a></font>
       <?php endif; ?>
     <font id="yugao" style=" display:none; " ><a href="<?php echo $this->_var['goods']['seller_note']; ?>"  style="background-color:#666; color:#FFF;  " target="_blank" >查看商品</a></font>
      </div>
     <script type="text/javascript">
	
	var strkc=document.getElementById('kc').value;
	if(strkc==0){
document.getElementById('stsw2').style.display="none";
document.getElementById('start2').style.display="block";
document.getElementById('yl').style.display="none";
		}
	
	function xiadan(){
		var str=document.getElementById('xdurl').value;
		document.getElementById('bt-1').style.display="none"
		document.getElementById('bt-2').style.display="none"
		document.getElementById('fshow').style.display="none";
		document.getElementById('sq_fl').style.display="block"
		
		window.open(str);
		window.location.reload();
		

		}

	</script>
      
      <div class="match2">
      <?php if ($this->_var['cfg']['show_marketprice']): ?>
      <span>购买奖励<strong><?php echo $this->_var['goods']['market_price']; ?></strong>
       <?php endif; ?>
      </span> </div>
       <?php if ($this->_var['cfg']['show_goodsweight']): ?>
      <div class="match2" style="font-size:14px; background:url(themes/ecmoban_meilishuo/images/db.png) no-repeat; border:none; padding-left:33px; display:none;">担保金：商家<strong><?php echo $this->_var['goods']['goods_weight']; ?></strong>担保金，请放心购买! </div>
       <?php endif; ?>  
       
     
      <div class="share">
      <table  border="0" >
      <tr>
      <td>分享</td>
      <td>


<div class="bdsharebuttonbox"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_fx" data-cmd="fx" title="分享到飞信"></a><a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","fx","tieba","mshare"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","fx","tieba","mshare"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

</td>

      <td> <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" >收藏</a> </td>
      <td>
	  <?php if ($this->_var['affiliate']['on']): ?>
      <a href="user.php?act=affiliate&goodsid=<?php echo $this->_var['goods']['goods_id']; ?>" >推荐</a>
      <?php endif; ?>
	  </td>
      </tr>
       </table>
     
      </div>
       
        
    </div>
    <ul class="bnt_ul" style="display:none;">
     
      
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
      <li class="padd loop">
      <strong><?php echo $this->_var['spec']['name']; ?>：</strong>
        
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                        <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
                        <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        <?php else: ?>
                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()" >
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?>
                    <?php else: ?>
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      
           <li class="clearfix">
       <dd>
       <strong><?php echo $this->_var['lang']['number']; ?>：</strong>
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/> <strong><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="f1"></font>
       </dd>
       </li>
      
     
     
      </ul>
    
</form>
     </div>
     
    <div class="sp_right" id="sp_right">

<div class="sjxx" style="border: 1px solid #d3dad3;">
      <h1 id="dptt"><?php echo $this->_var['goods']['seller_note']; ?></h1>
<input type="hidden" id="dpct" value="<?php echo $this->_var['goods']['seller_note']; ?>"/>
      <p >商家已经过淘宝得利认证
        请放心购买！</p>
      <a href="javascript:void(0)" id="lianjie" target="_blank" onclick="checkdp()"> 没了我还想抢</a>
</div>

<div  >
<div id="ECS_COMMENT"> <?php 
$k = array (
  'name' => 'comments',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>

</div>



<div style=" clear:both;"></div>
</div>
    




  </div>
  <script type="text/javascript">
var str=document.getElementById('dpct').value;

var strar=str.split('-');

document.getElementById('dptt').innerHTML=strar[0];

function checkdp(){
var str=document.getElementById('dpct').value;

var strar=str.split('-');

document.getElementById('dptt').innerHTML=strar[0];

if(strar[1]==undefined){
alert('对不起，该商品商家没有另上活动');
}
else{
window.open(strar[1]); 
}
}

</script>
   <div class="blank"></div>
   
  <div class="ad">
    <div style="width:946px; margin:0 auto;"><img src="themes/ecmoban_meilishuo/images/ad.gif" width="946" height="85" /></div>
  </div>
   <div class="blank"></div>
   </div>
  
   
   
   
   
    <div class="main3" style=" background-color:#FFF;" id="main3show">
    <div class="left">
   
    <div class="box" style="float:left; width:864px;">
<div class="detail" style=" width:864px; margin:0px auto;">
    <div class="dttt">活动详情</div>
<div style="height:330px;  width:864px;">
<?php echo $this->_var['goods']['goods_desc']; ?>
</div>
<div style="width:864px;"><a href="http://taobaodeli.com/article.php?id=9" target="_blank">点击查看买家规则</a></div>
</div>
 <a id="qgou" name="qgou"></a>
      <div style="padding:0 0px;">
        <div id="com_b" class="history clearfix" >
        <div style="width:660px; margin:0px auto;text-align:center;">
	
        <h2 class="h2bg" align="center" ><span>申请返利（</span><span id="ffnum">100</span><span>）</span></h2>
        <h2 class="h2bg" align="center" style="display:none;"><span>名额抢购区[</span><span id="qiangnum"></span><span>]</span></h2>   
        <?php if ($this->_var['package_goods_list']): ?>
        <h2 class="h2bg" style="color:red;"><?php echo $this->_var['lang']['remark_package']; ?></h2>
<div style="clear:both;"></div>
        <?php endif; ?>

        </div>
        
        </div>
      </div>    <div class="box_1">
      <div id="com_v" class="  " style="padding:6px;"></div>
      <div id="com_h">
	  <input type="hidden" value="" id="isgou"/>
	 <input type="hidden" value="" id="istime"/>
	   
       
       
       <blockquote>
     
<?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
     </blockquote>
<blockquote>
  
 <?php echo $this->fetch('library/comments.lbi'); ?>

     </blockquote>




<input type="hidden" value="" id="com_name"/>
<input type="hidden" value="" id="com_time"/>  
     <script type="text/javascript">

var hhflag=document.getElementById('hhflag').value;
	if(hhflag.indexOf("预告")>0){

document.getElementById('leftTime').style.display="none";
document.getElementById('yugao').style.display="block";
document.getElementById('main3show').style.display="none";
document.getElementById('sp_right').style.display="none";

}

//是否为特色区显示限时
var hhnum=document.getElementById('hhnum').innerHTML

if(hhnum.indexOf('普通')<0){
document.getElementById('sw_time').style.display="block";

}

//购买人数
var a=document.getElementById('sc_num').value;
document.getElementById('ffnum').innerHTML=a;

var qiangnum=document.getElementById('plnum').value;

document.getElementById('qiangnum').innerHTML=qiangnum;

//抢购名额
 var maxnum=document.getElementById('max_num').value;
	 var maxnum=parseInt(maxnum);
var kcnum=document.getElementById('kc').value;
 var plnum=document.getElementById('plnum').value;
 
 if(parseInt(plnum)<maxnum){

	 document.getElementById('buynum').innerHTML=maxnum-parseInt(plnum)
	 }
	 else if(parseInt(plnum)==maxnum){
		
	 document.getElementById('buynum').innerHTML=0;
		 }
		 
	 else{
var extnum=document.getElementById('buynum').innerHTML;
if(parseInt(extnum)<=0){
	document.getElementById('buynum').innerHTML=0;
	}

	else{
var g=parseInt(plnum)-1;
for(var g;g<parseInt(plnum);g++ ){
	document.getElementById('buynum').innerHTML=parseInt(extnum)-1;
	
	}
}
	
	 }
 
 
	
 



 //名额检查
 var username=document.getElementById('user_name').value;
 
	
	 var ul= document.getElementById('comments');
	 var input = ul.getElementsByTagName("input");
	 var valnum="";
	 var i=0;
	 var str="";
	for(i;i<=parseInt(plnum);i++){
		valnum= input[i].value;
		str=str+valnum+'/';
		//alert(str);
		document.getElementById('com_name').value=str;
		if(valnum==username){
			
			//document.getElementById('isgou').value=1;

			document.getElementById('sqfl2').style.display="block";
			
			} 
		
		}
	

</script>
 
 <script type="text/javascript">






 var com_name=document.getElementById('com_name').value;
	   var jgtime=30*60*1000;
	   var ul= document.getElementById('comments');
      var spannum = ul.getElementsByTagName("span");
		
	for(var k=spannum.length-1;k>=0;k--){
		
		var oldtime=spannum[k].innerHTML;
		var starttime = oldtime.replace(new RegExp("-","gm"),"/");
		var starttimeHaoMiao = (new Date(starttime)).getTime();
		var timestamp = (new Date()).valueOf();
		var matime=parseInt(timestamp)-parseInt(starttimeHaoMiao);
		

		if(matime>=parseInt(jgtime)){
			
			
			check_backname(com_name,1);
			
           }
		else{

	check_backname(com_name,0);
}

		}



 //当抢购人数大于抢购数时
 var maxnum=document.getElementById('max_num').value;
	 var maxnum=parseInt(maxnum);
 var plnum=document.getElementById('plnum').value;
 //alert(plnum);
if(parseInt(plnum)>maxnum){
var extnum=document.getElementById('buynum').innerHTML;

if(parseInt(extnum)<=0){
	document.getElementById('buynum').innerHTML=0;
	}
	else{
var g=parseInt(plnum)-1;
for(var g;g<parseInt(plnum);g++ ){
	
	document.getElementById('buynum').innerHTML=parseInt(extnum)-1;
	
	}
}

}
	

//成单检查函数
 function check_backname(com_name,com_time){

var maxnum=document.getElementById('plnum').value;
	 var maxnum=parseInt(maxnum);
	
var suc_buy= document.getElementById("suc_buy1");

if(com_time==1&&suc_buy==undefined){
	
	 var backnum=document.getElementById('buynum').innerHTML;
	 var kcnum=document.getElementById('kc').value;
	 if(parseInt(backnum)>parseInt(kcnum)){
		 document.getElementById('buynum').innerHTML=kcnum;
		 }
		 else
		 {
	 document.getElementById('buynum').innerHTML=parseInt(backnum)+1;
		 }
	}

if(com_time==0&&suc_buy==undefined){
document.getElementById('istime').value=1;


}

var username=document.getElementById('user_name').value;


if(suc_buy!=undefined){
	
var input = suc_buy.getElementsByTagName("input");

for(var j=0;j<=input.length;j++){
	
	suc_name= input[j].value;
	
	var strsuc=suc_name+"/";
	
	 if(com_name.indexOf("'"+strsuc+"'")<0&&com_time==1){
		
		 var backnum=document.getElementById('buynum').innerHTML;
		var kcend=document.getElementById('kc').value;
		if(parseInt(backnum)<parseInt(kcend)){
		  document.getElementById('buynum').innerHTML=parseInt(backnum)+1;
			}else{
			document.getElementById('buynum').innerHTML=kcend;
  }


		  
		 }

	if(com_name.indexOf("'"+strsuc+"'")<0&&com_time==0){

		document.getElementById('istime').value=1;

	}


		
	if(suc_name==username){
		 
		document.getElementById('sqfl2').style.display="none";	
		document.getElementById('qiang').style.display="none";
			
       } 
	   
	 
	}
	
}

   
 }  


  </script>
     

<script type="text/javascript">


var bigbuynum=document.getElementById('buynum').innerHTML
var strkc1=document.getElementById('kc').value;
	if(strkc1==0){
document.getElementById('qiang').style.display="none";
}
if(bigbuynum==0){
document.getElementById('qiang').style.display="none";
}
</script>
      </div>
     </div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
  
  <div class="blank"></div>
  
  </div>
  
  
   <div class="right">
    
      <?php echo $this->fetch('library/recommend_best.lbi'); ?>
      
    </div>
 
  
  <div style="clear:both;">
  </div>


   
<?php echo $this->fetch('library/bought_goods.lbi'); ?>
 


  </div>
  
  
</div>

</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</html>
