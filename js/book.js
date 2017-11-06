//书籍对象
function Book(){
    /*属性 行为*/
    this.id='';
    this.name ='';
    this.price='';
    this.description = '';
    this.sales = '';
    this.images='[]';
    this.stock = '';
   
}
Book.prototype={
    bindDom:function(){
        var str=''
            str +='<div class="col-xs-12 col-sm-6 col-lg-3 book">'
                       str += '<dl>'
                           str += '<dt><a href="single.html?id='+this.id+'"><img class="img-responsive" src="'+this.image+'" width="384" height="225" /></a></dt>'
                           str += '<dd>'
                               str+='<span><a>'+this.name+'</a></span>'
                            str+='</dd>'
                            str+='<dd>'
                                str+='<a href="#">'
                            str+='</dd>'
                            str+='<dd class="price">'
                                str+='<em>￥'+this.price+'</em>'
                                str+='<i>售量：'+this.stock+'</i>'
                            str+='</dd>'
                        str+='</dl>'
            str+='</div>'
            return str;
    },
     bindEvents:function(){
        /*绑定事件*/
        $('#btnaddcart').onclick=function(){
        }
        $('#btnbuy').onclick=function(){}
    },
        /*添加到购物车*/
        
    bindDOMDetail:function(){
        /*绑定元素*/
        $('#pname').html(this.name)
        $('#description').html(this.description)
        $('#price').html(this.price)
    },
    bindDOMImage:function(){
        var str=''
        for(var i= 0,len=this.images.length;i<len;i++) {
            str+='<li>'
            str+='<img class="etalage_thumb_image" src="'+ this.images[i].big+'" class="img-responsive" />'
            str+='<img class="etalage_source_image" src="'+ this.images[i].small+'" class="img-responsive" />'
            str+='</li>'
        }
        $('#etalage').html(str);

        /*jquery插件实现的幻灯片特效*/
        $('#etalage').etalage({
            thumb_image_width: 250,
            thumb_image_height: 300,
        });
    }
}