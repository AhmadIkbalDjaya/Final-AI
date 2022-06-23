<?php
    $V=0;
    $A=0;
    $R=0;
    $K=0;
    $gayaBelajar = "Gaya Belajar Tidak Diketahui";
    if(isset($_POST['submit'])){
        for($x=1; $x<=16; $x++){
            if($_POST["pil-soal-$x"]=='V'){
                $V = $V + 6.25;
            }
            else if($_POST["pil-soal-$x"]=='A'){
                $A = $A + 6.25;
            }
            else if($_POST["pil-soal-$x"]=='R'){
                $R = $R + 6.25;
            }
            else if($_POST["pil-soal-$x"]=='K'){
                $K = $K + 6.25;
            }
        }
        if($V>$A AND $V>$R AND $V>$K){
            $gayaBelajar = "Anda termasuk gaya belajar Visual";
        }
        if($A>$V AND $A>$R AND $A>$K){
            $gayaBelajar = "Anda termasuk gaya belajar Aural";
        }
        if($R>$V AND $R>$A AND $R>$K){
            $gayaBelajar = "Anda termasuk gaya belajar Read/Write";
        }
        if($K>$V AND $K>$A AND $K>$R){
            $gayaBelajar = "Anda termasuk gaya belajar Visual";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <div class="container">
        <table border=1>
            <tr>
                <td>Visual</td>
                <td><?=$V?>%</td>
            </tr>
            <tr>
                <td>Aural</td>
                <td><?=$A?>%</td>
            </tr>
            <tr>
                <td>Read/Write</td>
                <td><?=$R?>%</td>
            </tr>
            <tr>
                <td>Khinestetik</td>
                <td><?=$K?>%</td>
            </tr>
        </table>
        <?=$gayaBelajar?>
    </div>
</body>
</html>