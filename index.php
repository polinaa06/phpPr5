<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr5</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="content">
        
        <form method="post" action="">
            <img src="assets\media\foto.png" alt="">
            <label for="cookie_type">Введите вид печенья:</label>
            <input type="text" id="cookie_type" name="cookie_type">

            <?php
            class Cookie
            {
                private $type;

                public function setType($newType)
                {
                    $availableTypes = ['шоколадное', 'ореховое', 'ванильное', 'кокосовое', 'клубничное'];

                    if (in_array($newType, $availableTypes)) {
                        $this->type = $newType;
                    } else {
                        echo "Вид печенья '{$newType}' не доступен. Пожалуйста, выберите другой вид.<br><br>";
                    }
                }

                public function getType()
                {
                    return $this->type ? $this->type : "Тип печенья не установлен";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $cookie = new Cookie();
                $cookie->setType($_POST['cookie_type']);
                echo  "Установленный вид печенья: " . $cookie->getType();
            }

            ?>

            <input class="btn" type="submit" value="Установить тип печенья">
        </form>
    </div>
</body>

</html>