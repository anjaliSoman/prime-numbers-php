<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime or Not?</h1>
    <form action="" method="post" >
        <input type="text" name="inp1" placeholder="Enter a number">
        <input type="submit" value="Check">
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $val=$_POST['inp1'];
            $i;$flag=0;
            for($i=2;$i<$val;$i++)
            {
                if($val%$i==0)
                {
                    $flag++;
                }
            }
            if($flag==0)
            {
                echo "$val is a PRIME NUMBER";
            }
            else
                echo "$val is a CONSONANT NUMBER";
        }
    ?>
</body>
</html>