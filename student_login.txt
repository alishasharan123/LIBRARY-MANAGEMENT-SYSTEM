

<?php
session_start();
include("includes/db.php");
?>
<!doctype html>
<html>
<head>
<title>Admin</title>
<style>
body
{backgrond:skyblue;}
.main_wrapper
{
width:1000 px;
height:auto;
margin:auto;
}
#header{
width: 1000 px;
height:120px;
border-bottom:5px groove orange;
}   
#left{
width:795px;
height:600px;
float:left;
}

#right{
width:200px;
height:600px;
float:right;
border:5px groove orange;
background:#187eae;
}
#right a{
text-decoration:none;
color:white;
text-align:left;
font-size:18px;
font-family:palatino;
padding:10px;
margin:6px;
display:block;
}
#right a:hover{
text-decoration:underline;
font-weight:bolder;
color:orange;
}
</style>
</head>
<body>
<div>   
<table width="100" align="center" bgcolor="pink">


<center><h2>VIEW ALL ISSUE REQUESTS HERE</h2></center>

<tr align="center" bgcolor="skyblue">
<th>REQUEST ID</th>
<th>STUDENT_ID</th>
<th>BOOK_ID</th>

<th>BOOK NAME</th>

<th>AUTHOR</th>
<th>EDITION</th>

<th>SUBJECT</th>

<th>AVAIBLE BOOKS</th>
</tr>
<?php
global $db;
$get_c="select * from request";
$run_c=mysql_query($get_c);
$i=0;
while($row_c=mysql_fetch_array($run_c))
{
$l_reqid[$i]=$row_c['b_reqid'];
$l_id[$i]=$row_c['student_id'];
$l_name[$i]=$row_c['book_name'];
$l_auth[$i]=$row_c['author'];
$l_edi[$i]=$row_c['edition'];
$l_sub[$i]=$row_c['subject'];
$lb_id[$i]=$row_c['book_id'];
    
    
$i++;   
}
    
    
    ?>

<?php
    for($j=0;$j<$i;$j++)
    {
        
        if($lb_id[$j]==0 && $l_edi[$j]=='')
        {
        
            $que="select ava_copy,book_id,edition from books where book_name= '$l_name[$j]' and author='$l_auth[$j]' and subject='$l_sub[$j]'";
            $show=mysql_query($que);
            $k=0;
            $total=0;
            while($copy=mysql_fetch_array($show))
            {   
                $total=$total+$copy['ava_copy'];
                $lb_id[$j]=$copy['book_id'];
                $l_edi[$j]=$copy['edition'];
                $k++;
            }
        }
        elseif($lb_id[$j]==0 && $l_edi[$j]!='')
        {
            $que="select ava_copy,book_id,edition from books where book_name= '$l_name[$j]' and author='$l_auth[$j]' and subject='$l_sub[$j]' and edition=$l_edi[$j]";
            $show=mysql_query($que);
            $k=0;
            $total=0;
            while($copy=mysql_fetch_array($show))
            {   
                $total=$total+$copy['ava_copy'];
                $lb_id[$j]=$copy['book_id'];
                $l_edi[$j]=$copy['edition'];
                $k++;
            }
        }
                             ?>
     <tr align='center'>
<td><?php echo $l_reqid[$j]; ?></td>
<td><?php echo $l_id[$j]; ?></td>
<td><?php echo $lb_id[$j]; ?></td>
<td><?php echo $l_name[$j]; ?></td>
<td><?php echo $l_auth[$j]; ?></td>
<td><?php echo $l_edi[$j]; ?></td>
<td><?php echo $l_sub[$j]; ?></td>
<td><?php echo $total; ?></td>
    <td> <?php echo "<form method='GET' action=''>";
        $iss='isuue'.$j;
        $dec='decline'.$j;
    echo "<button type='submit' name='$iss'>ISSUE</button>";
      echo "</form>"; ?></td>
     <td> <?php echo "<form method='GET' action=''>";
    echo "<button type='submit' name='$dec'>DECLINE</button>";
      echo "</form>"; ?> </td>
        
  </tr>
     <?php
        if(isset($_GET[$iss]))
        {
            $check=mysql_query("select book_1,book_2,book_3 from students where student_id=$l_id[$j]");
            $check_row=mysql_fetch_array($check);
            if($check_row['book_1']=='')
            {
               mysql_query("UPDATE students SET book_1 = $lb_id[$j] WHERE student_id = $l_id[$j]"); 
                mysql_query("UPDATE students SET due_date1 = DATE_ADD(NOW(),INTERVAL 45 DAY) WHERE student_id = $l_id[$j];");
            }
            elseif($check_row['book_2']=='')
            {
                mysql_query("UPDATE students SET book_2 = $lb_id[$j] WHERE student_id = $l_id[$j]"); 
                mysql_query("UPDATE students SET due_date2 = DATE_ADD(NOW(),INTERVAL 45 DAY) WHERE student_id = $l_id[$j];");
            }
            elseif($check_row['book_3']=='')
            {
                mysql_query("UPDATE students SET book_3 = $lb_id[$j] WHERE student_id = $l_id[$j]"); 
                mysql_query("UPDATE students SET due_date3 = DATE_ADD(NOW(),INTERVAL 45 DAY) WHERE student_id = $l_id[$j];");
            }
                
            
            
            $query_iss="insert into issue( book_id,book_name,student_id,issue_date) values('$lb_id[$j]','$l_name[$j]','$l_id[$j]',NOW())";
            $run_s=mysql_query($query_iss);
            mysql_query("UPDATE books SET ava_copy = ava_copy-1 WHERE book_id = $lb_id[$j] and ava_copy > -1");
            mysql_query("UPDATE books SET issued = issued+1 WHERE book_id = $lb_id[$j] and ava_copy > -1");
            
            $query_rm="delete from request where b_reqid=$l_reqid[$j]";
            $run_srm=mysql_query($query_rm);
            
             header("Location: view_request.php");
                exit;
        }
            
        if(isset($_GET[$dec]))
        {
           $query_rm="delete from request where b_reqid=$l_reqid[$j]";
            $run_srm=mysql_query($query_rm);
             header("Location: view_request.php");
            exit; 
            
            
        }
        
    }
        
?>   
    
    
    

    <?php 
    ?>
        
         
</table>
    </div>
<div style="position:relative;margin-top:200px;">
<table width="100" align="center" bgcolor="pink">


<center><h2>VIEW ALL RETURN REQUESTS HERE</h2></center>

<tr align="center" bgcolor="skyblue">
<th>REQUEST ID</th>
<th>ISSUE ID</th>
<th>STUDENT_ID</th>
<th>BOOK_ID</th>


</tr>
<?php
global $db;
$qus="select * from ret_req";
$run=mysql_query($qus);
$m=0;
while($row=mysql_fetch_array($run))
{
$b_reqid[$m]=$row['req_id'];
$issue_id[$m]=$row['issue_id'];
$student_id[$m]=$row['student_id'];
$book_id[$m]=$row['book_id'];  
$issue_date[$m]=$row['issue_date'];
$m++;   
} 
    ?>
<?php
    for($k=0;$k<$m;$k++)
    {
        
        ?>
 <tr align='center'>
<td><?php echo $b_reqid[$k]; ?></td>
<td><?php echo $issue_id[$k]; ?></td>
<td><?php echo $student_id[$k]; ?></td>
<td><?php echo $book_id[$k]; ?></td>
    <td> <?php echo "<form method='GET' action=''>";
            $ret='return'.$k;
            echo "<button type='submit' name='$ret'>Return</button>";
        echo "</form>"; ?></td>
    <?php
        if(isset($_GET[$ret]))
        {
            //all data 
           $query1=mysql_query("select book_name from books where book_id=$book_id[$k] ");
            $query2=mysql_fetch_array($query1);
            $book_name=$query2['book_name'];
            $return_date=date_create($issue_date[$k]);
            date_add($return_date,date_interval_create_from_date_string("45 days"));
            $iss_date=date_create($issue_date[$k]);
            $iss_date=$iss_date->format('Y-m-d');
            $return_date=$return_date->format('Y-m-d');
            echo $iss_date;
            // put into return table
            
            $query3=mysql_query("insert into return_all (student_id,issue_id,book_id,book_name,issue_date,return_date)values('$student_id[$k]','$issue_id[$k]','$book_id[$k]','$book_name','$iss_date','$return_date')");
            
            // clear the student table
            
            $clear=mysql_query("select book_1,book_2,book_3 from students where student_id=$student_id[$k]");
            $c_row=mysql_fetch_array($clear);
            if($c_row['book_1']==$book_id[$k])
            {
               mysql_query("UPDATE students SET book_1 = '' WHERE student_id = $student_id[$k]"); 
                mysql_query("UPDATE students SET due_date1 = '' WHERE student_id = $student_id[$k];");
            }
            elseif($c_row['book_2']==$book_id[$k])
            {
                mysql_query("UPDATE students SET book_2 = '' WHERE student_id = $student_id[$k]"); 
                mysql_query("UPDATE students SET due_date2 ='' WHERE student_id = $student_id[$k];");
            }
            elseif($c_row['book_3']==$book_id[$k])
            {
                mysql_query("UPDATE students SET book_3 = '' WHERE student_id = $student_id[$k]"); 
                mysql_query("UPDATE students SET due_date3 = '', WHERE student_id = $student_id[$k];");
            }
            // add no of copies
            mysql_query("UPDATE books SET ava_copy = ava_copy+1 WHERE book_id = $book_id[$k] and ava_copy > -1");
            mysql_query("UPDATE books SET issued = issued-1 WHERE book_id = $book_id[$k] and issued>-1");
            //delte from issue table and return table;
            
            mysql_query("delete from issue where issue_id=$issue_id[$k]");
            mysql_query("delete from ret_req where req_id=$b_reqid[$k]");
            
             header("Location: view_request.php");
            exit;
        }
    }
    ?>
  </tr>
    
    
    
    
    
</table>
</div>
</body>
</html>