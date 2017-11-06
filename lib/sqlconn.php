<?php
    //连接数据库
    function connect(){
        $link=mysql_connect("localhost","root") or die("数据库连接失败！ERROR：".mysql_errno().":".mysql_error());
        mysql_set_charset("utf-8");
        mysql_select_db("susp") or die ("指定数据库打开失败！");
        return $link;
    }

    //完成记录插入的操作
    function insert($table,$array){
        $keys=join(",",array_keys($array))."'";
        $vals="'".join("','",array_values($array))."'";
        $sql="insert {$table}($keys) values({$vals})";
        mysql_query($sql);
        return mysql_insert_id();
    }
    
    //完成记录更新的操作
    function update($table,$array,$where){
        foreach($array as $key => $val){
            if($str==null){
                $sep=" ";
            }else{
                $sep=",";
            }
            $str.=$sep.$key."='".$val."'";
        }
        $sql="update {$table} set {$str}".($where==null?null:"where".$where);
        mysql_query($sql);
        return mysql_affected_rows();
    }

    //删除记录
    function delete($table,$where=null){
        $where =$where==null?null:"where".$where;
        $sql="delete from {$table} {$where}";
        mysql_query($sql);
        return mysql_affected_rows();
    }


    //得到指定一条记录
    function fetchOne($sql,$sort=1,$result_type=MYSQL_ASSOC){
        $result = mysql_query($sql);
        if($sort==1)
            return $result;
        else
            $row=mysql_fetch_assoc($result,$result_type);
            return $row;
    }

    //得到结果集中的所有记录
    function fetcheAll($sql,$result_type=MYSQL_ASSOC){
        $result=mysql_query($sql);
        while(@$row=mysql_fetch_array($result,$result_type)){
            $rows[]=$row;
        }
        return $rows;
    }

    //得到结果集中的记录条数
    function getResultNum($sql){
        $result=mysql_query($sql);
        return mysql_num_rows($result);
    }
?>