<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="overall">
        <form action="" method="post">
            <label for="fname">FirstName</label><br/>
            <input type="text" name="fname"><br/>
            <label for="sname">SecondName</label><br/>
            <input type="text" name="sname" ><br/>
            <input type="submit" name="submit"  value="Submit">
            <?php
            if(isset($_POST["submit"])){
                $str1=$_POST["fname"];
                $str2=$_POST["sname"];

                $charCount1 = [];
                $charCount2 = [];
            
                // Count occurrences of each character in the first string
                for ($i = 0; isset($str1[$i]); $i++) {
                    $char = $str1[$i];
                    if (!isset($charCount1[$char])) {
                        $charCount1[$char] = 0;
                    }
                    $charCount1[$char]++;
                }
            
                // Count occurrences of each character in the second string
                for ($j = 0; isset($str2[$j]); $j++) {
                    $char = $str2[$j];
                    if (!isset($charCount2[$char])) {
                        $charCount2[$char] = 0;
                    }
                    $charCount2[$char]++;
                }
            
                // Combine unique characters from both strings
                $uniqueChars = '';
            
                // Add characters from the first string that are not in the second string
                foreach ($charCount1 as $char => $count) {
                    if (!isset($charCount2[$char])) {
                        $uniqueChars .= $char;
                    }
                }
            
                // Add characters from the second string that are not in the first string
                foreach ($charCount2 as $char => $count) {
                    if (!isset($charCount1[$char])) {
                        $uniqueChars .= $char;
                    }
                }
                echo $uniqueChars;
                // $flength=0;
                // $slength=0;
                // $charCount = [];
                // $result = '';
                // while (isset($fname[$flength])) {
                //     $char = $fname[$flength];
                //     if (!isset($charCount[$char])) {
                //         $charCount[$char] = 0;
                //     }
                //     $charCount[$char]++;
                //     $flength++;
                // }
                // while (isset($sname[$slength])) {
                //     $char = $sname[$slength];
                //     if (!isset($charCount[$char])) {
                //         $charCount[$char] = 0;
                //     }
                //     $charCount[$char]++;
                //     $slength++;
                // }
                // print_r($charCount);
                // foreach ($charCount as $char => $count) {
                //     if ($count == 1) {
                //         $result .= $char;
                //     }
                // }
                
                // echo $result;
            }
            ?>
        </form>
    </div>
</body>
</html>