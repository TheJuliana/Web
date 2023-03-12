<!--3. Файлы
a. Написать доску объявлений. Пользователь указывает свой
email, текст объявления, заголовок объявления (форма),
категория. Для хранения объявлений использовать файлы.
i. Создать несколько папок категорий.
ii. Необходимо чтобы на странице была форма с полями
(email, выбор категории(название выше созданных
папок), заголовок объявления и текст объявления,
кнопка Добавить).
iii. После формы список уже загруженных объявлений в
виде таблички.
iv. После того, как пользователь нажал кнопку “добавить”,
необходимо создать новый текстовый файл
категория/заголовок_объявления.txt, содержимое
файла - Текст объявления-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <form method="POST" action="index5.php">
            <table>
                <tr>
                    <td>Email</td>
                    <td>Category</td>
                    <td>Header</td>
                    <td>Text</td>
                </tr>
                <tr>
                    <td><input type="email" name="email" required></td>
                    <td>
                        <select name='category' required>
                            <?php
                            $dir = opendir("Categories");
                            while ($file = readdir($dir)) {
                                if (is_dir("Categories/".$file) && $file != "." && $file !="..") {
                                    echo "<option value=$file >$file</option>";
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="text" name="header" required></td>

                    <td><textarea rows="3" name="text"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <input type = "submit" value="Отправить">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="table">
        <table>
            <caption>TABLE</caption>
            <thead>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>

            <?php
                $dir = opendir("Categories");
                while ($file = readdir($dir)) {
                    if (is_dir("Categories/".$file) && $file != "." && $file !="..") {
                       $files = scandir("Categories/".$file);
                       foreach ($files as &$i) {
                           if ($i != "." && $i !="..") {
                               echo "<tr>";
                               //$dec = readfile("Categories/$file/".$i);
                               $desc = file("Categories/$file/".$i);
                               echo "<td>$file</td><th>$i</th>";
                               foreach($desc as &$symbol) {
                                   echo " <td>$symbol</td>";
                               }
                               echo "</tr>";
                           }
                       }
                    }
                }
            ?>

        </table>
    </div>
</body>
</html>
