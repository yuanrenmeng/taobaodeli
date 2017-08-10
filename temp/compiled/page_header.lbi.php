<link href="themes/ecmoban_suning/qq/images/qq.css" rel="stylesheet" type="text/css" />
 <link href="themes/ecmoban_meilishuo/index.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<style type="text/css">

.libg{background-color:#CCC}


</style>
 

<div class="top_nav">
	<script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="top">


  <div style="width:1200px; margin:0 auto;"><div class="phone">全国热线：400-892-1658</div><p>欢迎来到淘宝得利！</p>
  <font id="ECS_MEMBERZONE" ><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
  </div>
</div>

<div class="logo_nav"> 
  
  <div class="logo1">
    <div style="width:1200px; margin:0 auto;"><img src="themes/ecmoban_meilishuo/images/logo.jpg" width="193" height="62" />
      <div class="search">多、快、好、省，轻松拿奖金!
        <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
          <input name="keywords" type="text" id="keyword" value="输入商品名、关键词、奖品号" onfocus="if(this.value=='输入商品名、关键词、奖品号')this.value='';" onblur="if(this.value=='')this.value='输入商品名、关键词、奖品号';" style="color:#999; padding-left:3px;"  />
          <div class="s_bn"><a href="javascript:void(0)" onClick="document.getElementById('searchForm').submit()">搜索</a></div>
        </form>
      </div>
      <img src="themes/ecmoban_meilishuo/images/tb.jpg" width="367" height="60" />
      <div style="clear:both;"></div>
    </div>
  </div>
  <div class="nav" >
    <div id="nav_menu"><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['lang']['home']; ?><span></span></a>
    <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>>
<?php echo $this->_var['nav']['name']; ?>
 <span id="<?php echo $this->_var['nav']['name']; ?>"><img src="themes/ecmoban_meilishuo/images/hot<?php echo $this->_var['nav']['name']; ?>.gif" width="35" height="23" /></span>
</a>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
       <script type="text/javascript">
	  document.getElementById('新品预告').style.display="none";
	  document.getElementById('奖品展示').style.display="none";
	  document.getElementById('成名馆').style.display="none";
        //光板停留在所在所在栏目
        var domain='http://www.taobaodeli.com/index.php';
        var url=document.URL;//获取当前地址
        var nav = document.getElementById("nav_menu");//指定id元素
        var a = nav.getElementsByTagName("a");//获得所有a(数组)
        for (var i = 0; i < a.length; i++) {
            var href = a[i].href;//获得a中href
            if (href==url){//为当前地址则增加li属性
                a[i].className="navg";
                }
			else if(href.indexOf("683")>0&&url.indexOf("683")>0){
				  a[i].className="navg";
				}
			else if(href.indexOf("684")>0&&url.indexOf("684")>0){
				  a[i].className="navg";
				}
			else if(href.indexOf("687")>0&&url.indexOf("687")>0){
				  a[i].className="navg";
				}
			else if(href.indexOf("686")>0&&url.indexOf("686")>0){
				  a[i].className="navg";
				}
			else if(href.indexOf("688")>0&&url.indexOf("688")>0){
				  a[i].className="navg";
				}
        }  
		
		
		

        </script>
  </div>
</div>





 


