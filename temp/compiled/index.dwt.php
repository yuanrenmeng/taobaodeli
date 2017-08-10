<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="baidu-site-verification" content="HJgRI5jyZj" />
<meta name="360-site-verification"content="b64ea8121b75b1df776a7adfba2027a1" />
<meta name=”renderer” content=”webkit|ie-comp|ie-stand”>


<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />

<link href="themes/ecmoban_meilishuo/show_activity.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js,js.js,jquery.SuperSlide.2.1.1.js')); ?>
 <script type="text/javascript">
/*$(document).ready(function(){
 $(".ad1").show(1000);
 
  $(".guangbi").click(function(){
  $(".ad1").hide(1000);
  });
});*/
</script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?04eb71b44a571b9ac9d46e24f942fc27";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</head>

<body class="index_page" style="min-width:1200px;">
<div class="top1">

  <div class="ad1" style="display:none;"><a  class="guangbi" ><img src="themes/ecmoban_meilishuo/images/guangbi.png" width="43" height="46" /></a>
    <h3><a href="/article.php?id=10" target="_blank">买家规则</a> <a href="/article.php?id=24" target="_blank">平台介绍</a> <a href="/article.php?id=9" target="_blank">得利流程</a></h3>

    <div style="height:30px; margin-top:54px;"> <a href="#">特惠馆</a></div>
    <div style="height:30px;margin-top:83px;"> <a href="#">一折到底</a></div>
    <div style="height:80px;margin-top:70px;"> <a href="#">奖彩品</a></div>
    </div>

</div>
<a name="top" id="top"></a>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="blank"></div>
<div class="middle"> 
  
  
  <div class="fenlei_nav ">
   <?php echo $this->fetch('library/category_tree_index.lbi'); ?>
  </div>
  
  <div class="ad">
    <div class="area">
      <?php echo $this->fetch('library/index_ad.lbi'); ?>
    </div>
  </div>
  
  <div class="right">
    <div class="login">
      <h3>Hi，您好，欢迎来到淘宝得利！</h3>
<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

       </div>
    <div class="gg">
      <h3>公告</h3>
      <p>
      <?php 
$k = array (
  'name' => 'shop_notice',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
      <p> 
    </div>
    <a href="http://taobaodeliseller.com/" target="_blank"><img src="themes/ecmoban_meilishuo/images/rk.gif" width="264" height="99" /></a> </div>
</div>



<div class="main"> 
  
  
  
  <div class="right">
    
<?php echo $this->fetch('library/new_articles.lbi'); ?>
 
 <?php echo $this->fetch('library/jcp.lbi'); ?>
 <?php echo $this->fetch('library/a_sq.lbi'); ?>
 



     
    
    
   
    
  </div>
  
  
  <div class="left">
    <div class="container">
      <ul class="mtab">
        <li class="current"><a href="javascript:void();">优品汇</a></li>
        
        <li><a href="javascript:void();">特惠馆</a></li>
	<li><a href="javascript:void();">奖彩品</a></li>
      </ul>
      <div class="cmenu">
        <div class="fb">
		
        <?php echo $this->fetch('library/aaa.lbi'); ?>

          
        </div>


         
        
        
        <div class="fn">
		
		<?php echo $this->fetch('library/a_xyhb.lbi'); ?>
		
		
          
        </div>


        <div class="fn">
		
<?php echo $this->fetch('library/a_jcp.lbi'); ?>

        
         
        </div>
      </div>
      
    </div>
    <script type="text/javascript">
  $(function(){
     $(".mtab").find('li').click(function(){
         var obj = $(this).parent().nextAll();
         var index = $(this).index();
         $(this).addClass('current').siblings().removeClass('current');
         obj.find('div').eq(index).css('display','block').siblings().css('display','none');
                      
     }) 
  })
</script> 
  </div>
  <div style="clear:both;"></div>
</div>
 

<?php echo $this->fetch('library/a_newad.lbi'); ?>




<div class="main2">
  <div class="slideTxtBox2">
    <div class="hd">
      <ul>
        <li><a href="search.php?intro=new">今日最新上线</a></li>
         <li><a href="category.php?id=684">新品预告</a></li>

      </ul>
    </div>
    <div class="bd" >
	
	
	<?php echo $this->fetch('library/recommend_new.lbi'); ?>
	<?php echo $this->fetch('library/a_new.lbi'); ?>
	
      
      
      
    </div>
  </div>
  <script>
jQuery(".slideTxtBox2").slide({effect:"fold",autoPlay:true,easing:"easeOutCirc",delayTime:200});
</script> 
</div>
 

<div class="blank"></div>

<?php echo $this->fetch('library/a_lcad.lbi'); ?>
        
    





<div class="lc">
  <div class="slideTxtBox3">
    <div class="hd">
     
<?php echo $this->fetch('library/a_lctt.lbi'); ?>
        
    


    </div>
    <div class="bd">
      
<?php echo $this->fetch('library/a_lctwo.lbi'); ?>
  <?php echo $this->fetch('library/a_lcnz.lbi'); ?>
  <?php echo $this->fetch('library/a_lcthree.lbi'); ?>
    <?php echo $this->fetch('library/a_lcfour.lbi'); ?>
 <?php echo $this->fetch('library/a_lcfive.lbi'); ?>
  <?php echo $this->fetch('library/a_lcsix.lbi'); ?>
 <?php echo $this->fetch('library/a_lcseven.lbi'); ?>
  <?php echo $this->fetch('library/a_lceight.lbi'); ?>
  <?php echo $this->fetch('library/a_lcnine.lbi'); ?>

      
      
     
     
     
     
    </div>
  </div>
  <script>
jQuery(".slideTxtBox3").slide({effect:"fold",autoPlay:true,easing:"easeOutCirc",delayTime:200,interTime:8000});
</script> 
</div>




<?php echo $this->fetch('library/a_yzad.lbi'); ?>
        
    




<?php echo $this->fetch('library/a_yzseller.lbi'); ?>



  
  
  
 


   
 <div class="return-top"><a href="#top" target="_self" ><img src="themes/ecmoban_meilishuo/images/return-top.png" width="56" height="55" /></a></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>
