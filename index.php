<!DOCTYPE html>
<head><title>Lester Cardoz | MD5 Cracker</title></head>
<body>
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash of 4-digit PIN and 
attempts to hash all 4-Digit combinations to determine the original PIN characters.</p>
<pre>
<?php
$goodtext = "Not found";

if ( isset($_GET['md5']) ) {
    $time_pre = microtime(true);
    $md5 = $_GET['md5'];

    $txt = "0123456789";
    $show = 15;

    for($i=0; $i<strlen($txt); $i++ ) {
        $num1 = $txt[$i];  

        for($j=0; $j<strlen($txt); $j++ ) {
            $num2 = $txt[$j]; 

            for($k=0; $k<strlen($txt); $k++ ) {
                $num3 = $txt[$k];  

                for($l=0; $l<strlen($txt); $l++ ) {
                    $num4 = $txt[$l]; 

                    // Concatenate digits together 
                    $try = $num1.$num2.$num3.$num4;

                    // Run the hash and then check to see if we match
                    $check = hash('md5', $try);
                    if ( $check == $md5 ) {
                        $goodtext = $try;
                        break;   // Exit the inner loop
                    }

                    // Debug output until $show hits 0
                    if ( $show > 0 ) {
                        print "$check $try\n";
                        $show = $show - 1;
                }
            }
            }
        }
    }
    // Compute elapsed time
    $time_post = microtime(true);
    print "Elapsed time: ";
    print $time_post-$time_pre;
    print "\n";
}
?>
</pre>
<!-- Use the very short syntax and call htmlentities() -->
<p>PIN: <?= htmlentities($goodtext); ?></p>
<form>
<input type="text" name="md5" size="40" />
<input type="submit" value="Crack MD5"/>
</form>
<p><a href="index.php">Reset</a></li></p>
</body>
</html>

