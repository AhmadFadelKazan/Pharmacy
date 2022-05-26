
<div class="view_search add_drug" >
<?php 
include('../admin/connect/connect.php');
@$search =mysqli_real_escape_string($con,trim($_GET['search']));
    echo("<center>");
if (isset($_GET['do']) and $_GET['do']=='query') 
{
    if (empty($search)) 
    {echo"<div class='text'> Please fill in the search field</div>";}
    
    else
    {
        $users=mysqli_query($con,"select * from medicine where drugName LIKE '%$search%' ")
        or die(mysql_error());
        $nums = mysqli_num_rows($users);
        if ($nums<1) {echo("<div class='text'>No result found </div>");}
        else
        {echo("<span> Research results </span><p> Have been found "."<b>".$nums."</b>"." Result </p><br>");
        echo'<center class="mytable" id="me" style="display: none; "><table border="1" cellspacing="0" cellpadding="5">
        <tr class="title"> 
        <td>Medicament name</td> 
        <td>Type </td>
        <td>Origin </td>
        <td>Production Date</td> 
        <td>Expiry date</td> 
        <td>Price </td>
        <td>Quantity </td>
        <td>Medication withdrawal</td> 
        </tr>';
while ($rows = mysqli_fetch_assoc($users))
{
    echo'<tr class="data">
   
    <td>'.$rows['drugName'].'</td>
  
    <td>'.$rows['drugType'].'</td>
  
     <td>'.$rows['drugOriginator'].'</td>

    <td>'.$rows['drugMadeDate'].'</td>
  
     <td>'.$rows['drugEndDate'].'</td>
  
    <td>'.$rows['drugPrice']."  SR" .'</td>
        
     <td>'.$rows['drugcount'].'</td>';
    echo"<td id='active'> <a href='../worker/workers/lose.php?id=$rows[id]'> Withdrawal </a>    </td></tr>";
    
        }echo"</table>";
    }
}
}
echo("</div>");
?>