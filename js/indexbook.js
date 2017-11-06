
 $(function () {  
         $.ajax({  
             url: 'lib/sqlquery.php?type=1',  
             type: 'GET',  
             dataType: 'json',  
             timeout: 1000,  
             cache: false,  
             beforeSend: LoadFunction, //加载执行方法    
             error: erryFunction,  //错误执行方法    
             success: succFunction //成功执行方法    
         })  
         function LoadFunction() {  
            console.log("waiting");
         }  
         function erryFunction() {  
             console.log("error");  
         }  
         function succFunction(tt) {  
             //eval将字符串转成对象数组  
             var json = eval(tt); //数组
             var str =''         
             $.each(json, function (index, item) {  
                 //循环获取数据    
                 var book = new Book();
                 book.id=json[index].ID;
                 book.name = json[index].productID;  
                 book.carid = json[index].catid;
                 book.stock = json[index].stock;
                 book.price = json[index].price;
                 book.description = json[index].description;
                 book.image= json[index].imageaddr;
                 str+=book.bindDom();     
             });  
              $('#content-book').html(str);
         }  
          $('#szero').click(function(){
               $.ajax({  
             url: 'lib/sqlquery.php?type=4',  
             type: 'GET',  
             dataType: 'json',  
             timeout: 1000,  
             cache: false,  
             beforeSend: LoadFunction, //加载执行方法    
             error: erryFunction,  //错误执行方法    
             success: succFunction //成功执行方法    
         })  
         function LoadFunction() {  
            console.log("waiting");
         }  
         function erryFunction() {  
             alert("error");  
         }  
         function succFunction(tt) {  
             //eval将字符串转成对象数组    
             var json = eval(tt); //数组
             var str =''         
             $.each(json, function (index, item) {  
                 //循环获取数据    
                 var book = new Book();
                 book.id=json[index].ID;
                 book.name = json[index].productID;  
                 book.carid = json[index].catid;
                 book.price = json[index].price;
                 book.stock = json[index].stock;
                 book.description = json[index].description;
                 book.image= json[index].imageaddr;
                 str+=book.bindDom();                
             });  
              $('#content-book').html(str);
         }  
          });
          $('#shopcartrequst').mouseover(function(){
               $.ajax({  
                    url: 'lib/basketckafter.php',  
                    type: 'GET',  
                    dataType: 'json',  
                    timeout: 1000,  
                    cache: false,  
                    beforeSend: LoadFunction, //加载执行方法    
                    error: erryFunction,  //错误执行方法    
                    success: succFunction //成功执行方法    
                })  
                function LoadFunction() {  
                    console.log("waiting");
                }  
                function erryFunction() {  
                    console.log("fuck");  
                }  
                function succFunction(tt){
                    var json = eval(tt); //数组
                    var str ='';
                     $.each(json, function (index, item) {  
                 //循环获取数据    
                    var shopcart1 = new ShopCart();
                    shopcart1.name = json[index].productID;  
                    shopcart1.price = json[index].price;
                    shopcart1.image= json[index].imageaddr;
                    str+=shopcart1.bindList();    
                });  
                $('.shopping_cart').html(str);
                }
          });
 
     });  
