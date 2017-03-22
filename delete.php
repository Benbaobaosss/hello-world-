<?php
    require_once 'connect.php';
    $name1=$_GET['name'];
    $sql="DELETE FROM library WHERE name='$name1'"; 
    if(mysqli_query($con, $sql))
    {
        echo "<script>alert('delete success!');window.location.href='add.php';</script>";
        }else{
                echo "<script>alert('delete failed!');window.location.href='select.php';</script>";
              }//删除插入的 数据 并提示 成功与否;删除成功，跳转到add.php继续添加数据；
?>              
