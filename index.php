<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi mata uang</title>

    <style>
        .form-control {
            width: 100px;
            height: 30px;
            background-color: lightcoral;
            color: black;
            border-radius: 10px;
            margin-left: 10px;
            margin-top: 10px;
        }

        .btn-convert {
            width: 100px;
            height: 30px;
            background-color: lightgreen;
            color: black;
            border-radius: 10px;
            margin-left: 10px;
            margin-top: 10px;
        }

        .form-option {
            width: 150px;
            height: 30px;
            background-color: lightseagreen;
            color: black;
            border-radius: 10px;
            margin-left: 10px;
            margin-top: 10px;
            color: white;
        }
    </style>

</head>

<body>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">Harri Hidayat - 191011402561</h3>
        <form method="GET" action="">
            <div class="form-inline">
                <label>RUPIAH:</label>
                <input class="form-control" type="text" name="txt_digit" />
                <label>Select Currency: </label>
                <select name="currency" class="form-option">
                    <option value="">Pilih mata uang</option>
                    <option value="Dollar">Dollar</option>
                    <option value="Euro">Euro</option>
                    <option value="Pound">Pound</option>
                </select>
                <button type="submit" name="btn_submit" class="btn-convert">Konversi</button>
                <br />
            </div>
        </form>
    </div>

    <?php
    if (isset($_GET['btn_submit'])) {
        $digit = $_GET['txt_digit'];
        $currency = $_GET['currency'];
        if ($digit != "") {
            switch ($currency) {
                case "Dollar":
                    $output = $digit / 14500;
                    echo "<center><label class='text-success' style='font-size:25px;'>$" . $output . "</label></center>";
                    break;

                case "Euro":
                    $output = $digit / 15500;
                    echo "<center><label class='text-success' style='font-size:25px;'>&#8364;" . $output . "</label></center>";
                    break;

                case "Pound":
                    $output = $digit / 18500;
                    echo "<center><label class='text-success' style='font-size:25px;'>&#163;" . $output . "</label></center>";
                    break;
            }
        }
    }
    ?>
</body>

</html>