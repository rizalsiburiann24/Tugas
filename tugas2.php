<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas Kelompok</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <ul class="menu">
            <li><a href="tugas2.php">Customise Your Website</a></li>
        </ul>
        <div class="content">
            Welcome. <br>
            Let's go to customise. <br> <br>
            <form method="post">
                <table class="table">
                    <tr>
                        <td>Header</td>
                        <td>
                            <select name="cHeader" class="input">
                                <option>-----</option>
                                <option value="1">Green</option>
                                <option value="2">Yellow</option>
                            </select>
                        </td>
                        <td><input type="submit" name="proses" value="Proses" class="btnProses"></td>
                    </tr>
                    <tr>
                        <td>Body</td>
                        <td>
                            <select name="cBody" class="input">
                                <option>-----</option>
                                <option value="1">Grey</option>
                                <option value="2">Black</option>
                            </select>
                        </td>
                        <td><input type="submit" name="proses2" value="Proses" class="btnProses"></td>
                    </tr>
                    <tr>
                        <td>Footer</td>
                        <td>
                            <select name="cFooter" class="input">
                                <option>-----</option>
                                <option value="1">Green</option>
                                <option value="2">Yellow</option>
                            </select>
                        </td>
                        <td><input type="submit" name="proses3" value="Proses" class="btnProses"></td>
                    </tr>
                    <tr>
                        <td>Font Color</td>
                        <td>
                            <select name="cFont" class="input">
                                <option>-----</option>
                                <option value="1">Grey</option>
                                <option value="2">Black</option>
                            </select>
                        </td>
                        <td><input type="submit" name="proses4" value="Proses" class="btnProses"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><a href="tugas2.php"><input type="submit" name="reset" value="Reset" class="btnReset"></a></td>
                    </tr>
                </table>
            </form>
            <?php
                if(isset($_POST['proses'])){
                    $warna = $_POST['cHeader'];
                    if($warna == '1'){
                        echo "
                            <style>
                                .menu {
                                    background-color : #03a334;
                                }
                            </style>";
                    }else if($warna == '2'){
                        echo "
                            <style>
                                .menu {
                                    background-color : #ecef04;
                                }
                            </style>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['proses2'])){
                    $warna = $_POST['cBody'];
                    if($warna == '1'){
                        echo "
                            <style>
                                .content {
                                    background-color : #b1b1ae;
                                }
                            </style>";
                    }else if($warna == '2'){
                        echo "
                            <style>
                                .content {
                                    background-color : #050505;
                                }
                            </style>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['proses3'])){
                    $warna = $_POST['cFooter'];
                    if($warna == '1'){
                        echo "
                            <style>
                                .footer {
                                    background-color : #03a334;
                                }
                            </style>";
                    }else if($warna == '2'){
                        echo "
                            <style>
                                .footer {
                                    background-color : #ecef04;
                                }
                            </style>";
                    }
                }
            ?>
            <?php
                if(isset($_POST['proses4'])){
                    $warna = $_POST['cFont'];
                    if($warna == '1'){
                        echo "
                            <style>
                                .menu li a{
                                    color: #8e8e8d;
                                }
                                .content {
                                    color: #8e8e8d;
                                }
                                .footer {
                                    color: #8e8e8d;
                                }
                            </style>";
                    }else if($warna == '2'){
                        echo "
                            <style>
                                .menu li a{
                                    color: #000;
                                }
                                .content {
                                    color: #000;
                                }
                                .footer {
                                    color: #000;
                                }
                            </style>";
                    }
                }
            ?>
        </div>
        <div class="footer">
            &copy; Copyright @2019. Rizal Siburian, Rifal Ghurofan, Rizki Fakhri
        </div>
    </body>
</html>