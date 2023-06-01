<html>
<head></head>
<body>
    

<table>
                <tr>
                <th>book</th>
                
                <th></th>
                </tr>
                <?php
               
                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        
                        echo 
                        "<tr style='text-align:center'>
                        <td style='border:1px solid ; padding: 15px;'>$value[bo1]</td>
                      
                        <td><form action='profile.php' method='post'>
                         <input class='r1' name='remove_item' type='submit' value='Remove'> 
                         <input type='hidden' name='bo1' value='$value[bo1]'> 
                        </form>
                         </td>
                        </tr>";
                    }
                }
                ?>
            </table>
            </body>
            </html>