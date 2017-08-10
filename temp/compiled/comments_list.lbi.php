
     <div class="box">
     <div class="box_1">
      <h3 style="display:none;"><span class="text" ></span>(<?php echo $this->_var['lang']['total']; ?><font class="f1"><?php echo $this->_var['pager']['record_count']; ?><input id="plnum" type="hidden" value="<?php echo $this->_var['pager']['record_count']; ?>"></font><?php echo $this->_var['lang']['user_comment_num']; ?>)</h3>
      <div class="boxCenterList clearfix" style="height:1%;">
       
      <div class="commentsList">
      <form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm" style="border:none;">
       <table width="710" border="0" cellspacing="5" cellpadding="0" style="display:none;">
        <tr>
          <td width="64" align="right"><?php echo $this->_var['lang']['username']; ?>：</td>
          <td width="631"<?php if (! $this->_var['enabled_captcha']): ?><?php endif; ?>><?php if ($_SESSION['user_name']): ?><?php echo $_SESSION['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></td>
        </tr>
        <tr>
          <td align="right">E-mail：</td>
          <td>
          <input type="text" name="email" id="email"  maxlength="100" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" class="inputBorder"/>
          </td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['comment_rank']; ?>：</td>
          <td>
          <input name="comment_rank" type="radio" value="1" id="comment_rank1" /> <img src="themes/ecmoban_meilishuo/images/stars1.gif" />
          <input name="comment_rank" type="radio" value="2" id="comment_rank2" /> <img src="themes/ecmoban_meilishuo/images/stars2.gif" />
          <input name="comment_rank" type="radio" value="3" id="comment_rank3" /> <img src="themes/ecmoban_meilishuo/images/stars3.gif" />
          <input name="comment_rank" type="radio" value="4" id="comment_rank4" /> <img src="themes/ecmoban_meilishuo/images/stars4.gif" />
          <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5" /> <img src="themes/ecmoban_meilishuo/images/stars5.gif" />
          </td>
        </tr>
        <tr>
          <td align="right" valign="top"><?php echo $this->_var['lang']['comment_content']; ?>：</td>
          <td>
          <input name="content"  type="text" class="inputBorder" style="height:50px; width:620px;" id="content" value="抢购名额成功">
          <input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
          <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <?php if ($this->_var['enabled_captcha']): ?>
          <div style="padding-left:15px; text-align:left; float:left;">
          <?php echo $this->_var['lang']['comment_captcha']; ?>：<input type="text" name="captcha"  class="inputBorder" style="width:50px; margin-left:5px;"/>
          <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" onClick="this.src='captcha.php?'+Math.random()" class="captcha">
          </div>
          <?php endif; ?>
          
              
          </td>
        </tr>
      </table>
      <style type="text/css">
      .qiang input:hover{
		  cursor:pointer;
		  
		  }
      </style>
      <div style=" text-align:center" >
       <?php if ($_SESSION['user_name']): ?>欢迎您<?php echo $_SESSION['user_name']; ?><?php else: ?>您还没有登录！<?php endif; ?>

       <div style="  " class="qiang" id="qiang" >
      
       <input name="" type="submit"  value="立即抢购"   style=" width:110px;  height:35px;  margin:10px 10px; background-color:#f37b3a; color:#FFF; font-size:18px; border:none;" >
       </div>
       </div>
      </form>
      </div>
      
   <div class="blank5"></div>
       <ul class="comments" id="comments" style="display:none;">
       <?php if ($this->_var['comments']): ?>
       <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment_0_44188200_1453278862');if (count($_from)):
    foreach ($_from AS $this->_var['comment_0_44188200_1453278862']):
?>
        <li class="word"> 
        <font class="f2"><?php if ($this->_var['comment_0_44188200_1453278862']['username']): ?><?php echo htmlspecialchars($this->_var['comment_0_44188200_1453278862']['username']); ?><input id="<?php echo $this->_var['pager']['record_count']; ?>" type="hidden" value="<?php echo htmlspecialchars($this->_var['comment_0_44188200_1453278862']['username']); ?>"><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></font> <font class="f3">( <?php echo $this->_var['comment_0_44188200_1453278862']['add_time']; ?><span style="display:none;"><?php echo $this->_var['comment_0_44188200_1453278862']['add_time']; ?></span> )</font><br />
        <img src="themes/ecmoban_meilishuo/images/sing.gif" alt="<?php echo $this->_var['comment_0_44188200_1453278862']['comment_rank']; ?>" />
        <p><?php echo $this->_var['comment_0_44188200_1453278862']['content']; ?></p>
				<?php if ($this->_var['comment_0_44188200_1453278862']['re_content']): ?>
        <p><font class="f1"><?php echo $this->_var['lang']['admin_username']; ?></font><?php echo $this->_var['comment_0_44188200_1453278862']['re_content']; ?></p>
				<?php endif; ?>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php else: ?>
        <li><?php echo $this->_var['lang']['no_comments']; ?></li>
        <?php endif; ?>
       </ul>
       
       
       <div id="pagebar" class="f_r" style="display:none;">
        <form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <?php if ($this->_var['pager']['styleid'] == 0): ?>
        <div id="pager">
          <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44333900_1453278862');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44333900_1453278862']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44333900_1453278862']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <?php else: ?>

        
         <div id="pager" class="pagebar">
          <span class="f_l f6" style="margin-right:10px;"><?php echo $this->_var['lang']['total']; ?> <b><?php echo $this->_var['pager']['record_count']; ?></b> <?php echo $this->_var['lang']['user_comment_num']; ?></span>
          <?php if ($this->_var['pager']['page_first']): ?><a href="<?php echo $this->_var['pager']['page_first']; ?>">1 ...</a><?php endif; ?>
          <?php if ($this->_var['pager']['page_prev']): ?><a class="prev" href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a><?php endif; ?>
          <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44397900_1453278862');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44397900_1453278862']):
?>
                <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
                <span class="page_now"><?php echo $this->_var['key']; ?></span>
                <?php else: ?>
                <a href="<?php echo $this->_var['item_0_44397900_1453278862']; ?>">[<?php echo $this->_var['key']; ?>]</a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          <?php if ($this->_var['pager']['page_next']): ?><a class="next" href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_last']): ?><a class="last" href="<?php echo $this->_var['pager']['page_last']; ?>">...<?php echo $this->_var['pager']['page_count']; ?></a><?php endif; ?>
          <?php if ($this->_var['pager']['page_kbd']): ?>
            <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44476300_1453278862');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44476300_1453278862']):
?>
            <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44476300_1453278862']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <kbd style="float:left; margin-left:8px; position:relative; bottom:3px;"><input type="text" name="page" onkeydown="if(event.keyCode==13)selectPage(this)" size="3" class="B_blue" /></kbd>
            <?php endif; ?>
        </div>
        

        <?php endif; ?>
        </form>
        <script type="Text/Javascript" language="JavaScript">
        <!--
        
        function selectPage(sel)
        {
          sel.form.submit();
        }
        
        //-->
        </script>
      </div>
      
      <div class="blank5"></div>
     
      </div>
     </div>
    </div>
    <div class="blank5"></div>
  
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44506000_1453278862');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44506000_1453278862']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_44506000_1453278862']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/
function submitComment(frm)
{
	
	var sig=document.getElementById('isgou').value;
	var sigtime=document.getElementById('istime').value;
	
			  if(sig==1){
				  alert('您已经有名额啦，快去下单吧.如果不尽快下单名额将在30分钟后自动取消了哦!');
				  }
				  else
				  {
					  
					
			  
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert('您还没有登录哦亲！');
		location.href='user.php';
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + cmt.toJSONString(), commentResponse, 'POST', 'JSON');
  
   return false;
   
     }
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
//alert('dsfdsf');
    if (result.message)
    {
      //alert(result.message);

	
document.getElementById('fshow').style.display="block";
 
    }

    if (result.error == 0)
    {
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>