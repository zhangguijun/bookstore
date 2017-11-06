/*定义购物车对象*/
function Cart(){
    this.books=[];
    this.sum=0;
    this.allPrice=0;
}
Cart.prototype={
    bindBasic:function(){
        //绑定
        $('.cartsum').html(this.getSum())
        $('#cartprice').html(this.getAllPrice())
    },
    //绑定产品列表,每次点击到购物车执行的方法
    bindList:function(){
        var str=''
        for(var i= 0,len=this.books.length;i<len;i++){
            str+='<div class="cart_box">'
            str+='<div class="message">'
            str+='<div class="alert-close"></div>'
            str+='<div class="list_img"> <img src="'+this.books[i].images[0].small+'" class="img-responsive" alt=""/> </div>'
            str+='<div class="list_desc"><h4><a href="#">'+this.books[i].name+'</a></h4><span class="actual">'+ this.books[i].price+'</span></div>'
            str+='<div class="clearfix"></div>'
            str+='<div class="clearfix"></div>'
            str+='</div>'
            str+='</div>'
        }
        $('.shopping_cart').html(str)

    },
    /*结算*/
    calcalate:function(){},
    /*获取产品个数*/
    getSum:function(){
        this.sum=this.books.length;
        return this.sum;
    },
    /*获取产品总价*/
    getAllPrice:function(){
         var len=this.books.length;
         this.allPrice=0;
        for(var i= 0;i<len;i++){
            this.allPrice+=this.books[i].price; 
        }
        return this.allPrice;
    }

}