                    <?php

if(isset($_POST['submit'])){
    // Subject Letter Grade
    $fast_sub       = $_POST['fast_sub'];
    $second_sub     = $_POST['second_sub'];
    $threed_sub     = $_POST['threed_sub'];
    $four_sub       = $_POST['four_sub'];
    $five_sub       = $_POST['five_sub'];
    $six_sub        = $_POST['six_sub'];

    // Cradit Value
    $fast_cradit    = $_POST['fast_cradit'];
    $scend_cradit   = $_POST['second_cradit'];
    $Three_cradit   = $_POST['Three_cradit'];
    $Four_cradit    = $_POST['Four_cradit'];
    $Five_cradit    = $_POST['Five_cradit'];
    $six_cratit     = $_POST['six_cratit'];


    
    // Total Letter Point with Cradit
    $first_mark     = $fast_sub * $fast_cradit;
    $second_mark    = $second_sub * $scend_cradit;
    $third_mark     = $threed_sub * $Three_cradit;
    $four_mark      = $four_sub * $Four_cradit;
    $five_mark      = $five_sub * $Five_cradit;
    $six_mark       = $six_sub * $six_cratit;
    
    // Total Cradit
    $total_cradit   = $fast_cradit + $second_cradit + $Three_cradit + $Four_cradit + $Five_cradit + $six_cratit ;


    // Total Mark
    $total_mark = $first_mark + $second_mark + $third_mark + $four_mark + $five_mark + $six_mark ;

    // Total CGPA 

    $total_cgpa = $total_mark / $total_cradit;
    
    ;

    header("Location: result.php?cgpa=$total_cgpa");

}

?>
