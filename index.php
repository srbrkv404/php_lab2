<?php

// require 'vendor/autoload.php';

// use App\MagicClass;

// echo "1. Создание объекта (вызов __construct):\n";
// $magic = new MagicClass();
// echo "\n";

// echo "2. Вызов несуществующего метода (вызов __call):\n";
// $magic->undefinedMethod('test');
// echo "\n";

// echo "3. Вызов несуществующего статического метода (вызов __callStatic):\n";
// MagicClass::undefinedStaticMethod('static_test');
// echo "\n";

// echo "4. Обращение к несуществующему свойству (вызов __get):\n";
// $test = $magic->undefinedProperty;
// echo "\n";

// echo "5. Запись в несуществующее свойство (вызов __set):\n";
// $magic->undefinedProperty = 'value';
// echo "\n";

// echo "6. Проверка существования несуществующего свойства (вызов __isset):\n";
// isset($magic->undefinedProperty);
// echo "\n";

// echo "7. Удаление несуществующего свойства (вызов __unset):\n";
// unset($magic->undefinedProperty);
// echo "\n";

// echo "8. Сериализация объекта (вызов __sleep или __serialize):\n";
// $serialized = serialize($magic);
// echo "\n";

// echo "9. Десериализация объекта (вызов __wakeup или __unserialize):\n";
// unserialize($serialized);
// echo "\n";

// echo "10. Преобразование объекта в строку (вызов __toString):\n";
// echo $magic;
// echo "\n\n";

// echo "11. Вызов объекта как функции (вызов __invoke):\n";
// $magic(42);
// echo "\n";

// echo "12. Клонирование объекта (вызов __clone):\n";
// $clone = clone $magic;
// echo "\n";

// echo "13. Экспорт объекта через var_export (вызов __set_state):\n";
// eval('$exported = ' . var_export($magic, true) . ';');
// echo "\n";

// echo "14. Уничтожение объекта (вызов __destruct):\n";
// unset($magic);
// echo "\n";

// echo "15. Вывод отладочной информации (вызов __debugInfo - нужно добавить в класс):\n";
// var_dump(new MagicClass());

require_once 'src/PointClass.php';
require_once 'src/VectorClass.php';

$T1 = new Point(rand(-10, 10), rand(-10, 10));

$v1_x = rand(-5, 5);
$v1_y = rand(-5, 5);
$V1 = new Vector($v1_x, $v1_y);

$V2 = new Vector(0, 0);

if (!$V1->isZero()) {
    $V3 = new Vector(-$V1->getY(), $V1->getX());
}
else {
    echo "Невозможно создать перпендикулярный вектор к нулевому вектору\n";
}

echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n";

if ($V1->isPerpendicular($V3)) {
    echo "Перпендикулярны" . "\n";
}
else {
    echo "Неперпендикулярны" . "\n";
}

$T1->moveX($v1_x);
$T1->moveY($v1_y);

?>