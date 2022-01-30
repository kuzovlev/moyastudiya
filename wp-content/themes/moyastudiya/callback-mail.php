<?php
if ($_POST) {
    $to_Email = "kuzovlev.dm@gmail.com";
    $subject = 'Запрос обратного звонка ' . $_POST["polz_name"];
    $language = $_POST['lang'];
    $user_Name = filter_var($_POST["polz_name"], FILTER_SANITIZE_STRING);
    $user_Phone = filter_var($_POST["polz_tel"], FILTER_SANITIZE_STRING);

    if ($language === 'ru'){
        $errorMessage = 'Возникла ошибка при отправке данных';
        $fillInMess = 'Заполните форму';
        $shortNameMess = 'Имя слишком короткое или пустое';
        $invalidPhone = 'Номер телефона может состоять только из цифр';
        $okResponse = 'Спасибо! ' . $user_Name . ', мы получили Ваш запрос.';
        $errorResponse = 'Не могу отправить почту! Пожалуйста, проверьте ваши настройки PHP почты.';
    } elseif ($language === 'uk') {
        $errorMessage = 'Виникла помилка під час відправки даних';
        $fillInMess = 'Заповніть форму';
        $shortNameMess = "Ім'я закоротке або порожнє";
        $invalidPhone = 'Номер телефону може складатися лише з цифр';
        $okResponse = 'Дякуємо! ' . $user_Name . ', ми отримали Ваш запит.';
        $errorResponse = 'Не можу надіслати пошту! Будь ласка, перевірте налаштування PHP пошти.';
    } else {
        $errorMessage = 'An error occurred while sending data';
        $fillInMess = 'Fill the form';
        $shortNameMess = 'Name is too short or empty';
        $invalidPhone = 'Phone number can only contain numbers';
        $okResponse = "Thanks! " . $user_Name . ", we've received your request.";
        $errorResponse = "Can't send mail! Please check your PHP mail settings.";
    }
    if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) and strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $otvet_serv = json_encode(
            array(
                'text' => $errorMessage
            ));
        die($otvet_serv);
    }

    if (!isset($_POST["polz_name"]) || !isset($_POST["polz_tel"])) {
        $otvet_serv = json_encode(array('type' => 'error', 'text' => $fillInMess));
        die($otvet_serv);
    }

    if (strlen($user_Name) < 3) {
        $otvet_serv = json_encode(array('text' => $shortNameMess));
        die($otvet_serv);
    }
    if (!is_numeric($user_Phone)) {
        $otvet_serv = json_encode(array('text' => $invalidPhone));
        die($otvet_serv);
    }

    $message = "Имя: " . $user_Name . ". Телефон: " . $user_Phone;

    if (!mail($to_Email, $subject, $message, "From: kuzovlev.dm@gmail.com \r\n")) {
        $otvet_serv = json_encode(array('text' => $errorResponse));
        die($otvet_serv);
    } else {
        $otvet_serv = json_encode(array('text' => $okResponse));
        die($otvet_serv);
    }
}
?>