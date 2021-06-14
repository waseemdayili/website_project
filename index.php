<?php
session_start();
include ("db.php"); //include db.php file to connect to DB
$pagename="Crazy Outfits"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";

include ("headfile.html");
include ("detectlogin.php");
echo "<center><h4>About my Store</h4></center>";
echo "<h5>I am the designer Elaf. The store was established in November 2007 . It is a women's online store that provides its services directly to customers .It focuses on women's tools only, such as accessories, shoes, bags and other fashion products. style girls store targets mainly from Europe and America, in addition to other consumer markets.</h5>";
echo "<h2>Best Some Our Products!</h2>";
// echo ' 
// <html>
// <img src="img1.jpg" width="500" height="350" title="product1" alt="Logo of a company" />
// <br>
// </html>
// ';
// echo ' 
// <html>
// <img src="img2.jpg" width="500" height="350" title="product2" alt="Logo of a company" />
// <br>
// </html>
// ';
// echo ' 
// <html>
// <img src="img3.jpg" width="500" height="350" title="product3" alt="Logo of a company" />
// <br>
// </html>
// ';
// echo ' 
// <html>
// <img src="img4.jpg" width="500" height="350" title="product4" alt="Logo of a company" />
// <br>
// </html>
// ';
// echo ' 
// <html>
// <img src="img5.jpg" width="500" height="350" title="product5" alt="Logo of a company" />
// <br>
// </html>
// ';
// echo ' 
// <html>
// <img src="img6.jpg" width="500" height="350" title="product6" alt="Logo of a company" />
// <br>
// </html>
// ';
echo "<h4>".$pagename."</h4>";
//create a $SQL variable and populate it with a SQL statement that retrieves product details
$SQL="select proId, prodName, prodPicNameSmall,prodDescripShort,prodPrice from Product";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($data=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<a href=prodbuy.php?u_prod_id=".$data['proId'].">";
echo "<img src=images/".$data['prodPicNameSmall']." height=200 width=200></a>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$data['prodName']."</h5>"; //display product name as contained in the array
echo "<p>".$data['prodDescripShort']."</p>";
echo "<p><b>&dollar;".$data['prodPrice']."</b></p>";

echo "</td>";



echo "</tr>";
}
echo "</table>";
// echo "<a href=aboutus.php?test='test'>";
include ("footfile.html");
echo "</body>";
?>