<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gpa_calculator</title>
</head>
<body>
<div class="mainbody">
    <form action="gpacalculator.php" method="get">
        <h2>GPA Calculator</h2>
        <h3>Enter your GPA</h3>
        <div class="col">
            <input type="text" name="gpa" class="form-control" placeholder="Enter your gpa" style="height:30px;width:270px;">
        </div>
       
        <h3>Select your education level</h3> 
        <select class="form-select" name="educational_level" aria-label="Default select example" style="height:30px;width:280px">
            <option selected>Please select your Education level</option>
            <option value="jsc">SSC</option>
            <option value="ssc">JSC</option>
            <option value="hsc">HSC</option>
            <option value="masters">Masters</option>
            <option value="graduation">Graduation</option>
        </select>
        <br><br>
        <button type="submit" name="result" class="btn btn-primary" style="margin:45px 50px;height:30px;width:70px">Result</button>
    </form>
<div class="main-2">
<?php 
if(isset($_GET['result'])){
    $gpa=$_GET['gpa'];
    $educational_level=$_GET['educational_level'];
    if((!empty($gpa))||(!empty($educational_level)&&($gpa>=0.0&&$gpa<=5.0))){
        if($educational_level=='jsc'||$educational_level=='ssc'||$educational_level=='hsc'){
            calculategpa($gpa);
        }
        else if($educational_level=='masters'||$educational_level=='graduation'){
            calculatecgpa($gpa);
        }
        else{
            echo "please enter the valid gpa & eduction level";
        }
    }
}

//GPA function start
function calculategpa($gpa){
    if($gpa<=5.0 && $gpa>=4.8){
        echo "<b>Congratulation! you have got A+</b>";
    }
    else if ($gpa<4.8 && $gpa>=4.5){
        echo "<b>Congratulation! you have got A</b>";
    }
    else if ($gpa<4.5 && $gpa>=4.0){
        echo "<b>Congratulation! you have got A-</b>";
    }
    else if ($gpa<4.0 && $gpa>=3.5){
        echo "<b>Congratulation! you have got B</b>";
    }
    else if ($gpa<3.5 && $gpa>=3.0){
        echo "<b>Congratulation! you have got c</b>";
    }
    else if ($gpa<3.0 && $gpa>=2.50){
        echo "<b>Congratulation! you have got D</b>";
    }
    else if ($gpa<2.50 && $gpa>0.0){
        echo "<b>Sorry,you have to try again.Better luck next time.</b>";
    }
    else{
        echo "<b>please enter the valid GPA</b>";
    }
}


// CGPA function start

function calculatecgpa($gpa){
    if($gpa<=4.0 && $gpa>=3.7){
        echo "<b>Congratulation! you have got A+</b>";
    }
    else if ($gpa<3.7 && $gpa>=3.6){
        echo "<b>Congratulation! you have got A-</b>";
    }
    else if ($gpa<3.6 && $gpa>=3.3){
        echo "<b>Congratulation! you have got B+</b>";
    }
    else if ($gpa<3.33 && $gpa>=3.0){
        echo "<b>Congratulation! you have got B</b>";
    }
    else if ($gpa<3.0 && $gpa>=2.66){
        echo "<b>Congratulation! you have got B-</b>";
    }
    else if ($gpa<2.66 && $gpa>=2.33){
        echo "<b>Congratulation! you have got C+</b>";
    }
    else if ($gpa<2.33 && $gpa>=2.0){
        echo "<b>Congratulation! you have got C</b>";
    }
    else if ($gpa<2.0 && $gpa>=1.6){
        echo "<b>Congratulation! you have got C-</b>";
    }
    else if ($gpa<1.6 && $gpa>=1.0){
        echo "<b>Congratulation! you have got D</b>";
    }
    else if ($gpa<1.0 && $gpa>=0.0){
        echo "<b>Sorry,you have to try again.Better luck next time.</b>";
    }
    else{
        echo "please enter the valid GPA";
    }
}
?>
</div>
</div>




<!-- Internal css part start -->
  <style>
body {
    margin-top: 110px;
    padding: 0;
}
.mainbody{
    height: 400px;
    width: 480px;
    border: 1px solid #000;
    margin:0 auto;

}
form{
    padding-left:100px
}
.main-2 {
    height: 46px;
    width: 279px;
    margin: -5px 90px;
}

  </style> 
  <!-- Internal css  part end -->
</body>
</html>
