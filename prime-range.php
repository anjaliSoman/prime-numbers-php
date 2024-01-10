<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prime Numbers within a Given Range</h1>
    <form action="" method="post">
        <input type="text" name="inp1" placeholder="Starting Range">
        <input type="text" name="inp2" placeholder="Ending Range">
        <input type="submit" value="GENERATE">
    </form>

    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $start=$_POST['inp1'];
            $end=$_POST['inp2'];
            $i;$j;
            for($i=$start;$i<=$end;$i++)
            {
                $count=0;
                for($j=2;$j<$i;$j++)
                {
                    if($i%$j==0)
                    {
                        $count++;
                        break;
                    }
                }
                if($count==0)
                {
                    echo "$i<br>";
                }
            }
           
        }
    
    ?>
</body>
</html>