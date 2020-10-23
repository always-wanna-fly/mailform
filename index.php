<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
require_once (dirname(__FILE__) . '/config/main.php');



$item_values = require (dirname(__FILE__) . '/config/item_values.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {



if(!empty($_POST)) {
    $form_val = $_POST['form'];
    $form_contact_validation = require (dirname(__FILE__) . '/config/form_validation.php');

    foreach ($form_contact_validation as $key_valid=>$item_valid) {

        if (empty($form_val[$key_valid])) {
            $error = true;
            $form_error[$key_valid] = $item_values['error_value'][$key_valid.'-empty'];

        }

        if ($item_valid['filter']==='FILTER_VALIDATE_ARRAY') {
            if ($item_valid['filter']==='FILTER_VALIDATE_ARRAY' && count($form_val[$key_valid])<$item_valid['options']) {
                $error = true;
                $form_error[$key_valid] = $item_values['error_value'][$key_valid];
            }
        }
        else {

            if (!filter_var($form_val[$key_valid], FILTER_VALIDATE_REGEXP, $item_valid['options'])) {
                $error = true;
                $form_error[$key_valid] = $item_values['error_value'][$key_valid];
            }
        }
    }


    }
}

?>


<?php
include dirname(__FILE__) . '/templates/form.tpl';


if (!empty($form_val) && count($form_error)==0) {
    require (dirname(__FILE__) . '/send.php');
echo "Вітаю ваше повідомлення відправленно";
}
else{
    echo 'заповніть всі поля';
}
?>

</body>
</html>
