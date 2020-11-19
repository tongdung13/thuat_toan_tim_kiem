<style>
    fieldset{
        width: 450px;

    }

</style>

    <fieldset>
        <legend>Kiểm tra số điện thoại:</legend>
        <label for="phone"><textarea id="phone" form="checkphone" class="text" cols="50" rows="12" name="nhapso"></textarea></label>
        <form method="post" id="checkphone" name="checkphone">
        <input type="submit" value="submit" >
        </form>
    </fieldset>


<?php

$array = "098,097,096, 032, 033, 034, 035, 036,037, 038, 039";
$viettel = explode(", ",$array);
$array1 = "081,082,083,084,085";
$vinaphone = explode(", ", $array1);
$array2 = "070,076,077,078,079";
$mobiphone = explode("," ,$array2);

$arr = ["viettel" => $viettel, "vinaphone" => $vinaphone, "mobiphone" => $mobiphone];

if (!empty($_POST["nhapso"])) {
    $listphone = $_POST['nhapso'];
    $sophone = explode(",",str_replace(" ", "", $listphone));
    $first3Phone = [];

    foreach ($sophone as $phone)
    {
        $first3Phone[] = substr($phone, 0, 3);
    }

    foreach($first3Phone as $key => $value){
        if (in_array($value,$viettel) == true) {
            echo "$sophone[$key] day la so viettel";
        }
        elseif (in_array($value, $vinaphone) == true) {
            echo "$sophone[$key] day la so vinaphone";
        }
        elseif (in_array($value, $mobiphone) == true){
            echo "$sophone[$key] day la so mobiphone";
        }
    }


}

