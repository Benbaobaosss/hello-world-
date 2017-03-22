<?php
    require_once 'connect.php';
    $sql="SELECT * FROM library";
    //$temp是个mysqli_result类型的变量；
    $temp=mysqli_query($con, $sql);
    //通过mysqli_fetch_assoc可以将放在$temp中的id,name,content,price调出来；
    while($row=mysqli_fetch_assoc($temp))
    {
        $data[]=$row;
    }
?>
    <a href="add.php ">add</a><br> 
<?php  
    //将$data中的每个元素$everyData中的name和price输出；
    foreach($data as $everyData) 
    { 
        echo $everyData['name'].": ".$everyData['price']; 
        echo $everyData['content']; 
?> 
           <a href="delete.php?name=<?php echo $everyData['name'];?>">delete</a> 
           <a href="modify.php?name=<?php echo $everyData['name']?>&content=<?php echo $everyData['content'];?>">modify</a> 
<?php  
        echo "<br>"; 
    } 
?> 
        