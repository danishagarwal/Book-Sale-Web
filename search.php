<?php  
 $connect = mysqli_connect("localhost", "root", "", "danish");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM bookname WHERE book_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul  class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["book_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Book Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  