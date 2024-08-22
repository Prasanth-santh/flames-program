<!-- <?php  error_reporting(0); ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>
<body>
    <div class="overall">
        <form action="" method="post">
            <label for="fname">FirstName</label><br/>
            <input type="text" name="fname"><br/>
            <label for="sname">SecondName</label><br/>
            <input type="text" name="sname" ><br/>
            <input type="submit" name="submit" id="submit" value="Submit"><br/>
            <?php
            if(isset($_POST["submit"])){
                $fname=$_POST["fname"];
                $sname=$_POST["sname"];
            
                if($fname==null && $sname==null){
                    echo "Enter the name";
                }
                if($fname==$sname && $fname1=="" && $sname!==""){
                    echo "Enter different name";
                }
                $flength=0;
                $slength=0;
                $x=0;
                while($fname[$x]){
                    $flength++;
                        $x++;
                }
                $y=0;
                while($sname[$y]){
                    $slength++;
                    $y++;
                }
                // echo $flength;
                // echo $slength;
                $diff='';
                $fdiff='';
                $sdiff='';
               $arr='';
                for($i=0;$i<$flength;$i++){
                    $found=false;
                    $k=0;
                    for($j=$k;$j<$slength;$j++){
                        if($fname[$i]==$sname[$j]){
                            $found=true;
                            $fname[$i]=$sname[$j]='-';
                            break;
                        }
                       
                    }
                    if(!$found){
                        $fdiff.=$fname[$i];
                    }
                    
                }

                
                //  print_r($arr);
                for($i=0;$i<$slength;$i++){
                    $found=false;
                    $j;
                    for($j=0;$j<$flength;$j++){
                        if($sname[$i]==$fname[$j]){
                            $found=true;
                            break;
                        }
                    }
                    if(!$found){
                        $sdiff.=$sname[$i];
                    }
                }
                $diff=$fdiff.$sdiff;
                // echo $diff;
                $difflength=0;
                $z=0;
                while($diff[$z]){
                    $difflength++;
                        $z++;
                }
                // echo $difflength;
                if($difflength!=0){
                    $flames="FLAMES";
                    $v=0;
                    $flameslength=0;
                    while($flames[$v]){
                        $flameslength++;
                            $v++;
                    }
                    // echo $flameslength;
                    $flamesArray = [];
                    for ($i = 0; $i < $flameslength; $i++) {
                        $flamesArray[] = $flames[$i];
                    }
                    // print_r($flamesArray);
                    $index = 0;
                    while($flameslength>1){
                        $index=($index+$difflength-1)%$flameslength;
                        for($i=$index;$i<=$flameslength-1;$i++){
                            $flamesArray[$i] = $flamesArray[$i + 1];
                        }
                        $flameslength--;
                    }
                    // print_r($flamesArray);
                    $ans=$flamesArray[0];
                    if($ans=="F"){
                        echo "<h1>This Relationship is FRIEND</h1>";
                    }
                    else if($ans=="L"){
                        echo "<h1>This Relationship is LOVE</h1>";
                    }
                    else if($ans=="A"){
                        echo "<h1>This Relationship is Affection</h1>";
                    }
                    else if($ans=="M"){
                        echo "<h1>This Relationship is MARRIAGE</h1>";
                    }
                    else if($ans=="E"){
                        echo "<h1>This Relationship is ENEMY</h1>";
                    }
                    else if($ans=="S"){
                        echo "<h1>This Relationship is SIBLINGS</h1>"; 
                    }
                }
                
            }
            ?>
        </form>
    </div>
</body>
</html>