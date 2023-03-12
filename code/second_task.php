<!--2. Форма. Сессии и Куки
a. Дан текстареа и кнопка. В текстареа вводится текст. По
нажатию на кнопку выведите количество слов и количество
символов в тексте.
b. На одной странице с помощью формы спросите у
пользователя фамилию, имя и возраст. Запишите эти данные
в сессию. При заходе на другую страницу выведите эти
данные на экран.
c. На одной странице с помощью формы спросите у
пользователя имя, возраст, зарплату и еще что-нибудь.
Запишите эти данные в одну переменную сессии в виде
массива. При заходе на другую страницу переберите
сохраненные данные циклом и выведите каждый элемент
массива в своем теге li тега ul.-->

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Подпункт А</h2>
    <form method="POST" action="index2.php">
        <div>
            <input type="text" name='text'>
        </div>
        <input type = "submit" value="Рассчитать">
    </form>
    <h2>Подпункт В</h2>
    <form method="POST" action="index3.php">
        <table>
            <caption>Введите свои данные: </caption>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Дата рождения</th>
            </tr>
            <tr>
                <td><input type="text" name="surname"></td>
                <td><input type="text" name="name"></td>
                <td><input type="date" name="birth"></td>
            </tr>
            <tr><td><input type = "submit" value="Отправить"></td></tr>

        </table>
    </form>
    <h2>Подпункт С</h2>
    <form method="POST" action="index4.php">
        <table>
            <caption>Введите свои данные: </caption>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Возраст</th>
                <th>З/П</th>
                <th>Телефон</th>
            </tr>
            <tr>
                <td><input type="text" name="surname"></td>
                <td><input type="text" name="name"></td>
                <td><input type="number" name="age"></td>
                <td><input type="number" name="money"></td>
                <td><input type="tel" name="phone"></td>
            </tr>
            <tr><td><input type = "submit" value="Отправить"></td></tr>
        </table>
    </form>
</body>
</html>
