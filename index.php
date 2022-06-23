<?php
    $v=0;
    if(isset($_POST['submit'])){
        if($_POST['pilihan-soal-1']=='nice'){
            $v = $v + 6.25;
        }
        if($_POST['pilihan-soal-2']=='nice'){
            $v = $v + 6.25;
        }
        echo "$v%";
    }

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Pakar Gaya Belajar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <table>
                    <span class="no-1">
                        <tr>
                            <td>1.</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>A. <input type="radio" name="pilihan-soal-1" value="" id="" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>B. <input type="radio" name="pilihan-soal-1" value="" id="" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>C. <input type="radio" name="pilihan-soal-1" value="" id="" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>D. <input type="radio" name="pilihan-soal-1" value="" id="" required></td>
                        </tr>
                    </span>
                    <span class="tombol submit">
                        <tr>
                            <td colspan="2">
                                <span><button type="submit" name="submit" class="btn btn-primary">Masukkan Pilihan</button></span>
                            </td>
                        </tr>
                    </span>
                </table>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>