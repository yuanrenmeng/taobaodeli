// JavaScript Document

	
		 
		 
			  
			  
		  function chdd(){
			  var dd=document.getElementById('dd').value;
			  var str=document.getElementById('gdstype').value;
			  if(dd==""){
				  alert('您还没有填写订单号哦！');
				  } else{
				   alert('恭喜您，订单号已提交！');
				  document.getElementById('ddnum').style.display="none";
				   
				  if(str.indexOf('奖')>0){
			  document.getElementById('jp').style.display="block";
			  document.getElementById('hb').style.display="block";
			  }
			  else
			  {
				 document.getElementById('hb').style.display="block"; 
				  }
				  
				  }
			  
			  }
			  
	function jp(){
		var dd=document.getElementById('dd').value;
		var hbct=document.getElementById('hbct').value;
		var str=document.getElementById('gdstype').value;
		var gdsnum=document.getElementById('gdsnum').value;
		var arstr=str.split('/');
		var num=parseInt(Math.random()*(parseInt(arstr[2])-1)+1);
		var jpnum= parseInt(arstr[3]);
		var cjct="";
		if(num==jpnum){
			cjct="恭喜您，中大奖了,奖品号："+arstr[4];
			alert('恭喜您，中大奖了,奖品号：'+arstr[4]);
			}
			else{
				cjct="谢谢您的抽奖！";
				alert('谢谢您的抽奖！');
				}
	
	 
    
		 document.getElementById('postscript').value="订单号："+dd+"-红包情况："+hbct+"-抽奖情况："+cjct;
		 document.getElementById('jpct').value=cjct;
		 document.getElementById('jp').style.display="none";
		 document.getElementById('jiangpin').innerHTML=cjct;
		document.getElementById('jiangpin').style.display="block";
		document.getElementById('bt').style.display="block";
		}
		
		function openhb(){
			
			var dd=document.getElementById('dd').value;
		   var cjct=document.getElementById('jpct').value;
		   var str=document.getElementById('gdstype').value;
		   var arstr=str.split('/');
		   
		   var num=parseInt(Math.random()*(1000-1)+1);
		   var hbct="";
		   if(arstr[1]=="幸运"){
			   
		   if(num>0&&num<10){
			   hbct="免费红包！";
			   alert('恭喜您获得免费红包！');
			   }
			   
			else if(num>=10&&num<50){
				   hbct="6折红包！";
			   alert('恭喜您获得6折红包！');
				   
				   }
				   
			else if(num>=50&&num<200){
					    hbct="8折红包！";
			   alert('恭喜您获得8折红包！');
					   
					   }
					   
		    else if(num>=200&&num<400){
					    hbct="9折红包！";
			   alert('恭喜您获得9折红包！');
					   
					   }
					   
			else{
				 hbct="谢谢您的参与！";
			   alert('谢您的参与！');
				}
				   
				   
		   }
		   else{
			    
			if(num>0&&num<5){
			   hbct="免费";
			   alert('恭喜您获得免费红包！');
			   }
			   
			 else if(num>=5&&num<20){
				   hbct="6折红包";
			   alert('恭喜您获得6折红包！');
				   
				   }
				   
			else if(num>=20&&num<100){
					    hbct="8折红包！";
			   alert('恭喜您获得8折红包！');
					   
					   }
					   
		    else if(num>=100&&num<200){
					    hbct="9折红包！";
			   alert('恭喜您获得9折红包！');
					   
					   }
					   
			else{
				 hbct="谢谢您的参与！";
			   alert('谢您的参与！');
				}
				   
			   
			   }
			document.getElementById('hbct').value=hbct;
			document.getElementById('postscript').value="订单号："+dd+"-红包情况："+hbct+"-抽奖情况："+cjct;
			document.getElementById('hb').style.display="none";
			document.getElementById('hongbao').innerHTML=hbct;
			document.getElementById('hongbao').style.display="block";
			document.getElementById('bt').style.display="block";
			}
			 
	
		  
