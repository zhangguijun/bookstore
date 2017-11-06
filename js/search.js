$(function(){
    

    $('#submit').click(function(){
         a = $('#search').val();
        console.log(a);
        window.location="lib/searchproduct.php?productID="+a+"";
        
        // $.ajax({
        //     type: "GET",
        //     url: "lib/searchproduct.php",
        //     data: {productID: a},
        //     //dataType:'json',
        //     cache: false,  
        //      async:false,
        //      beforeSend: LoadFunction, //加载执行方法    
        //      error: erryFunction,  //错误执行方法    
        //      success: succFunction //成功执行方法   

        // })
       

        // function LoadFunction() {  
        //     console.log("waiting");
        //  }  
        //  function erryFunction() {  
        //      console.log("error");  
        //  }  
        //   function succFunction(tt) {
        //       console.log("haha");
        //      console.log(a);
        //       var json = eval(tt); //数组
                
        //          //循环获取数据    
        //          var book = new Book();
        //          book.id = json.ID;
        //          book.name = json.productID;  
        //          book.carid = json.catid;
        //          book.price = parseInt(json.price);
        //          book.description = json.description;
        //          book.images= [
        //              {small:json.imageaddra,big:json.imageaddra},
        //              {small:json.imageaddrb,big:json.imageaddrb},
        //              {small:json.imageaddrc,big:json.imageaddrc}
        //              ];

        //         /*使用对象中的方法属性*/
        //         book.bindDOMDetail()
        //         book.bindDOMImage()

        //           /*绑定事件*/
        //         $('#btnaddcart').click(function(){
        //             /*购物车新增一个产品*/
        //             cart.books.push(book)
        //             ///*更新购物车 - 重新绑定购物车*/
        //             /*如果不封装，这里就可能产生代码重复*/
        //             cart.bindBasic();
        //             cart.bindList();
        //             $(window).scrollTop(0);
        //             console.log("添加到购物车");
        //              URLL= 'lib/basketcherk.php?type=1&&ID='+id+'';
        //              console.log(id);
        //              console.log(URLL);
        //             $.ajax({
        //                 url:URLL,
        //                 type: 'GET',   
        //                 timeout: 1000,  
        //                 cache: false,  
        //                 async:false,
        //                 beforeSend: LoadFunction,    
        //                 error: erryFunction,    
        //                 success: succFunction 
        //             });
        //              function LoadFunction() {  
        //                 console.log("waiting");
        //             }  
        //             function erryFunction() {  
        //                 alert("error");  
        //             } 
        //             function succFunction(){
        //                 console.log("成功了");
        //             }

        //         });

        //         /*实例购物车*/
        //         var cart =  new Cart()
        //         cart.sum=0
        //         cart.allPrice=0
        //         /*使用对象中的方法属性*/
        //         cart.bindBasic()
        //         cart.bindList()
        //   }
        //   }
    });
});