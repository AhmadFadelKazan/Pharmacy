
<div class="view_search add_drug" >
<?php 
include('connect/connect.php');
@$search =mysqli_real_escape_string($con,trim($_GET['search']));
    echo("<center>");
if (isset($_GET['do']) and $_GET['do']=='query') 
{
    if (empty($search)) {echo"<div class='text'>يرجى ملئ حقل البحث</div>";}
        
        else
        {
            $users=mysqli_query($con,"SELECT * from medicine where drugName LIKE '%".$search."%' ")
            or die(mysql_error());
            $nums = mysqli_num_rows($users);
            if ($nums<1) {echo("<div class='text'>لم يتم العثور على اي نتيجة</div>");}
            else
            {
                echo("<span>نتائج البحث</span><p>تم العثور على "."<b>".$nums."</b>"." نتيجة </p><br>");
                echo'<center class="mytable"><table border="1" cellspacing="0" cellpadding="5">';
                        echo'<tr class="title"> 
                            <td>name grug</td> 
                            <td>type </td>
                            <td>المنشأ </td>
                            <td>Production Date</td> 
                            <td>Expiry date</td> 
                            <td>the price </td>
                            <td>Quantity </td>
                            <td>Edit information</td>
                            <td>delete information</td>
                        </tr>';
                        while ($row = mysqli_fetch_assoc($users))
                        {
                            echo'<tr class="data">';
                            echo'<td>'.$row['drugName'] .'</td>';
                            echo'<td>'.$row['drugType'].'</td>';
                            echo'<td>'.$row['drugOriginator'] .'</td>';
                            echo'<td>'.$row['drugMadeDate'] .'</td>';
                            echo'<td>'.$row['drugEndDate'] .'</td>';
                            echo'<td>'.$row['drugPrice']."  SR" .'</td>';
                            echo'<td>'.$row['drugcount'] .'</td>';
                            echo"<td  id='active'> <a href='medicine/edit_medicine.php?id=$row[id]'>Edit information</a></td>";
                            echo"<td  id='active'> <a href='medicine/delete_medicine.php?id=$row[id]'>delete information</a></td>";
                            echo'</tr>';
                        } 
                echo"</center></table>";
            }
        }
}
echo("</div>");
?>