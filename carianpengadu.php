<!-- filename carianpengadu.php -->
<form action="" method="get">
    <input name="txtsearch"
    placeholder="Carian nama pengadu"
    type="text">
    <input type="submit" value="Cari">
</form>
<?php
//sekiranya ada carian 
if(isset($_GET['txtsearch'])){
    $carian=$_GET['txtsearch'];
    //buat carian
    include "connect.php";//db connection
    $sql="SELECT NoAduan, NamaPengadu,
    AlamatPelapor
    FROM penang 
    WHERE NamaPengadu LIKE '%$carian%' ";
    //run SQL
    $rs=mysqli_query($db, $sql);
    while($rec=mysqli_fetch_array($rs)){
        echo $rec['NoAduan']."<br>";
        echo $rec['NamaPengadu']."<br>";
        echo $rec['AlamatPelapor']."<hr>";
    }//while
}//isset
?>