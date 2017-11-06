function ShopCart(){
     //购物车图片
    this.image='';
    //产品名字
    this.name ='';
    //产品价格
    this.price='';
    //产品数量
    this.num='';
    //产品总价
    this.sumprice=''
}
ShopCart.prototype={
    bindShopCarDOM:function(){
        var str = '';
                 str+=    '<tr>'
                       str+=    '<td class="checkout-image">'
                           str+=  '<a href="#"><img class="img-responsive" style="width:200px;height:100px;" src="'+this.image+'" alt=""></a>'
                          str+= '</td>'
                          str+= '<td class="checkout-name">'
                            str+= '<h4><a href="#">'+this.name+'</a></h4>'
                         str+= '</td>'
                         str+=  '<td class="checkout-quantity"><span>1</span>'
						 str+=  '</td>'
                         str+=  '<td class="checkout-price">￥<span class="price">'+this.price+'</span></td>'
                         //str+=  '<td class="checkout-total">￥<span class="tprice">'+this.sumprice+'</span></td>'
                    str+= '</tr>'
                     return str;
    },
    bindList:function(){
        var str=''
            str+='<div class="cart_box">'
            str+='<div class="message">'
            str+='<div class="alert-close"></div>'
            str+='<div class="list_img"> <img src="'+this.image+'" class="img-responsive" alt=""/> </div>'
            str+='<div class="list_desc"><h4><a href="#">'+this.name+'</a></h4><span class="actual">'+ this.price+'</span></div>'
            str+='<div class="clearfix"></div>'
            str+='<div class="clearfix"></div>'
            str+='</div>'
            str+='</div>'
            return str;
    }
}
$(function(){
   $.ajax({  
             url: 'lib/basketckafter.php',  
             type: 'GET',  
             dataType: 'json',  
             timeout: 1000,  
             cache: false,  
             async:false,
             beforeSend: LoadFunction, //加载执行方法    
             error: erryFunction,  //错误执行方法    
             success: succFunction //成功执行方法    
         }) ;
         function LoadFunction() {  
            console.log("waiting");
         }  
         function erryFunction() {  
             console.log("error");  
         }  
         function succFunction(tt) {  
             //eval将字符串转成对象数组  
             var json = eval(tt); //数组
             var sumprice = 0;
             var str ='<tr><th class="checkout-image">图片</th><th class="checkout-description" style="margin-left:400px;">名字</th><th class="checkout-quantity">数量</th><th class="checkout-price">价格</th></tr>'         
             $.each(json, function (index, item) {  
                 //循环获取数据    
                 var shopcart = new ShopCart();
                 shopcart.name = json[index].productID;  
                 shopcart.price = parseInt(json[index].price);
                 shopcart.image= json[index].imageaddr;
                 str+=shopcart.bindShopCarDOM(); 
                 sumprice += shopcart.price;   
             });  

              $('#tab').html(str);
              $('#sumprice').html("总价为：￥"+sumprice);
         }  

         

});