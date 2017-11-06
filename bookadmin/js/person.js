function Person(){
    this.id = ''
    this.name= '';
    this.tel = '';
    this.emil = '';
    this.addr = '';
    this.time = '';
}
Person.prototype={
    bindPersonDom:function(){
        var str = '';
         str +='<tr>'
          str +='<td><input type="checkbox" name="id[]" value="1" />'+this.id+'</td>'
          str +='<td>'+this.name+'</td>'
          str +='<td>'+this.tel+'</td>'
          str +='<td>'+this.emil+'</td> ' 
           str +='<td>'+this.addr+'</td>'        
          str +='<td>这是洪睿，张昊，吴翰达，齐建博做的项目</td>'
          str +='<td>'+this.time+'</td> '
       str += '</tr>'
       return str;
    }
}
$(function () {  
         $.ajax({  
             url: '../lib/customerinfo.php',  
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
             var str ='<tr><th width="120">ID</th><th>姓名</th><th>电话</th><th>邮箱</th><th>地址</th><th width="25%">其他</th><th width="120">注册时间</th></tr>'  

             $.each(json, function (index, item) {  
                 //循环获取数据    
                 var person = new Person();
                 person.id=json[index].ID;
                 person.name = json[index].loginname;  
                 person.addr = json[index].address;
                 person.trl = json[index].phone;
                 //person.description = json[index].description;
                 person.emil= json[index].email;
                 person.time = json[index].joindate;
                 str+=person.bindPersonDom();     
             });  
              $('#usertab').html(str);
         }  
         
          
     });  