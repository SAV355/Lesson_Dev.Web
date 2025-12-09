<?php
//Объявление переменных
$name = "Anna";
$age = 30;
$is_student = false;


//Использование операторов
$birth_year = date("Y") - $age;
$greeting = "Здравствуйте, " . $name. "!";


//Условная конструкция 
$status = $is_student ? "Студент" : "Не студент";


//Вывод информации
echo $greeting. "Вам" . $age . "лет . Статус: " . $status;


// Демонстрраия дополнительных возможностей РНР
$hobbies = ["чтение", "путешествия", "праграммирование"];
echo "<br>Увлечения: " . implode(", ", $hobbies);

echo "<br> Увлечения подробно: ";

foreach ($hobbies as $index => $hobby) {
    echo "<br>" .  ($index + 1) . ". " . $hobby;
}

function getBirthdayYear($age) {
    return date("Y") - $age;
}
echo "<br>Год рождения (вычисленно в функции): " . getBirthdayYear($age);

// Исправленный класс с объявенными свойствами
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getinfo() {
        return "Объект: {$this->name}, {$this->age} лет";
    }
}

$person = new Person($name, $age);
echo "<br>" . $person->getinfo();

$birthday = new DateTime("$birth_year-06-15");
echo "<br>День рождения: " . $birthday->format('d.m.Y');

if ($age >= 18) {
    echo "<br> Совершеннолетний(яя)"; 
} else {
    echo "<br> Несовершеннолетний(яя)";
}

//Функция для работы с кириллицей без "mbstring"
function count_utf8_chars($str) {
    return preg_match_all('/./us', $str, $matches);
}

echo "<br>Имя в верхнем регистре: " . ($name) . "(функция strtoupper() с кирилицей не совместима, вызывает ошибки)";
echo "<br>Длина имени в байтах: " . strlen($name);
echo "<br>Длина имени в символах: " . count_utf8_chars($name);

//JSON спредставление с сохранением кириллицы
$jsonData = json_encode(["name" => $name, "age" => $age]);
echo "<br>JSON представление: " . $jsonData;

echo "<br>через 5 лет будет: " . ($age + 5) . "лет";


//Работу с файлами
file_put_contents( 'user_data.txt', "Имя: $name, Возраст: $age");
echo "<br>Данные записаны в файл user_data.txt";

//Работ с сессиями (если запущенна сессия)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['user_name'] = $name;
$_SESSION['user_age'] = $age;
echo "<br>Имя пользователя сохраннено в сессии: ";

// Обработка форм
echo '<br><br><h3>Пример формы:</h3> 
<form method="POST">
    <input type="text" name="test_input" placeholder="Введите текст">
    <input type="submit" value="Отправить">
</form>';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['test_input'])){
    $input = htmlspecialchars($_POST['test_input']);
    echo "<br>Вы ввели: " . $input;

//Сохраняем введенные данные в сессию
    $_SESSION['last_input'] = $input;
    echo "<br> Данные сохранены в сессии. Последний вывод: " . $_SESSION['last_input'];
}

//Добавление вывода информации о сессии
echo "<br><br> Информация о сессии: ";
echo "<br> о сессии: " . session_id();
echo "<br> исзенения в сессии: " . print_r($_SESSION, true);

//Добавим пример работы с cookies
$cookie_name = "user_visit"; //! проверить на валидность
$coolie_value = date("Y-m-d H:i:s");
setcookie($cookie_name, $coolie_value, time() + (86400 * 30), "/"); //86400 => равняется 1-м суткам
echo "<br>Куки установленыю Последнее посещение: " . ($_COOKIE[$cookie_name] ?? 'Первое посещение');

//exmple working with array -> пример работы с массивами 
$numbers = [1,2,5,8,9,4];
echo "<br><br> Работа с масивами: ";
echo "<br> Исходный масивами: " . implode(", " , $numbers);
sert($numbers);
echo "<br> Отсортированный масивами: " . implode(", " , $numbers);
echo "<br> Максимальное значение: " . max($numbers);
echo "<br> Минимальное значение: " . min($numbers);

//Добавляем пример работы с фильтрацией данных
$email = "anna.cos@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br><br>Email $email - валидный";
} else {
    echo "<br><br>Email $email - невалидный";
}

//Закроем сессию
//session_write_close();
?> 

