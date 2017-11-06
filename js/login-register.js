$(document).ready(function(){
    (function(){
        //登录部分的名字
        $("#loginname").focus(function(){
            if( !$(this).val()==""){
                $(this).next().html("");
                $(this).next().css("display","none");
            }
        });
        $("#loginname").blur(function(){
            if( $(this).val()==""){
                $(this).next().html("账号不能为空！");
                $(this).next().css("display","block");
            }
            else if( !$(this).val()==""){
                 $(this).next().css("display","none");
            }
        });
        //登录部分的密码
        $("#loginpwd").focus(function(){
            if( !$(this).val()==""){
                $(this).next().html("");
                $(this).next().css("display","none");
            }
        });
        $("#loginpwd").blur(function(){
            if( $(this).val()==""){
                $(this).next().html("密码不能为空！");
                $(this).next().css("display","block");
            }
            else if( !$(this).val()==""){
                 $(this).next().css("display","none");
            }
        });
        //登录部分的验证码
         $(".code").focus(function(){
            if( !$(this).val()==""){
                $(this).next().html("");
                $(this).next().next().css("display","none");
            }
        });
        $(".code").blur(function(){
            if( $(this).val()==""){
                $(this).next().next().html("请输入验证码！");
                $(this).next().next().css("display","block");
            }
            else if( (this).val().toLowerCase() != "cq7w"){
                 $(this).next().next().html("请输入正确的验证码！");
                 $(this).next().next().css("display","block");
            }
        });
        /**
         * 注册部分验证
         */
         $("#reg-name").blur(function(){
                reg=/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/;
                if(!reg.test($("#reg-name").val()))  
                {  
                    
                    $(this).next().html("格式有误，<br />用户名长度6~12位的数字、字母或特殊字符！");  
                    $(this).next().css("display","block");  
                }  
                else   
                {  
                    $(".error5").empty();  
                
                }  
         });
           $("#reg-pwd").blur(function(){ 
                reg=/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,22}$/;  
                if(!reg.test($("#reg-pwd").val()))  
                {  
                    
                    $(this).next().html("格式有误，<br />请输入6~12位的数字、字母或特殊字符！");  
                    $(this).next().css("display","block");  
                }  
                else   
                {  
                    $(".error5").empty();  
                
                }  
            });
            $("#reg-rpwd").blur(function(){
                var pwd1 = $("#reg-pwd").val();     
                var pwd2 = $(this).val();
                if(pwd1=="" && pwd2==""){
                    return;
                }else if(pwd1 != pwd2){
                    $(this).next().html("两次密码输入不一致！");  
  
                    $(this).next().css("display","block");
                } else   
                {  
                    $(".error5").empty();  
                
                }  
            });
            $("#reg-em").blur(function(){ 
                reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
                if(!reg.test($("#reg-em").val()))  
                {  
                    
                    $(this).next().html("邮箱格式格式有误，<br />请输入重新输入！");  
                    $(this).next().css("display","block");  
                }  
                else   
                {  
                    $(".error5").empty();  
                
                }  
            });
        
    })();
});


