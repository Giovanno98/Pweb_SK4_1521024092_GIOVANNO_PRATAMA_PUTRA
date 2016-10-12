Listing Program
<html>
    <head>
        <title>Study kasus 4.1</title>
    </head>
    <body>
        <form id="form1" name="form1" method="post" action="">
            <table>
                <tr>
	                <td>
                      Masukan Nilai Anda
     	           </td>
        	        <td>
                        : <input type="text" name="tuas" id="tuas">
            	    </td>
                </tr>
                	<td colspan="2">
                        <input type="submit" name="submit" value="Kirim Data" id="submit">
                    </td>
                </tr>
            </table>
        </form>

<?php
$nilai=$_POST['tuas'];?>

<?php
if ($nilai <= 59 )
{
echo"cukup" ;
}
else if ($nilai <= 85 )
{
echo"baik" ;
}

else if ($nilai <= 100 )
{
echo"Baik Sekali" ;
}
?>
</body>
</html>