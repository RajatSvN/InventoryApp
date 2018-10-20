<?php


$link = mysqli_connect("#################","#############","##############","############");

if(mysqli_connect_error()){

  die("Database Connection error!");

}else{
  
  if(isset($_POST['search']) && $_POST['search']!=''){
  
    $query = "SELECT toolname,quantity,price FROM Tools WHERE toolname LIKE "."'".mysqli_real_escape_string($link,'%'.$_POST['search'].'%')."'" ;
    
    
    
    $res = mysqli_query($link,$query);
    
     echo '
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ToolName</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>';
    
    
    while($_row = mysqli_fetch_array($res)){
    
   
  echo '
    <tr>
      <td>'.$_row[0].'</td>
      <td>'.$_row[1].'</td>
      <td>'.$_row[2].'</td>
    </tr> ';
    
    
    }
  
   echo ' </tbody>
</table> ';
  
  
  }
  
}

?>