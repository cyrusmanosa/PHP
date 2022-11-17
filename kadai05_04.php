<?php

require_once "define.php";

$title = "フォーム処理";

$name = $_POST['name'];
$kana = $_POST['kana'];
$note = $_POST['note'];
$department = $_POST['department'];
$course = $_POST['course'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php SITE_NAME ?> - kadai05_04</title>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once "header.php" ?>

        <section>

            <div class="flex flex-col lg:flex-row mb-20">
                <div class="lg:w-6/12 lg:mr-10">
                    <div class="lg:flex mb-10">
                        <div class="lg:w-1/2 mb-10 lg:mr-5 lg:mb-0">
                            <label class="block" for="department">学科</label>
                            <p class="text-md p-1.5 border-2 border-gray-200 focus:border-green-200 rounded-md"> <?= $department ?> </p>
                        </div>

                        <div class="lg:w-1/2">
                            <label class="block" for="course">コース</label>
                            <p class="text-md p-1.5 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= $course ?></p>
                        </div>
                    </div>

                    <div class="mb-10">
                        <label class="block" for="name">名前</label>
                        <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= htmlspecialchars($name,ENT_QUOTES) ?></p>
                    </div>

                    <div class="mb-10 lg:mb-0">
                        <label class="block" for="kana">フリガナ</label>
                        <p class="w-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= $kana ?></p>
                    </div>
                </div>



                <div class="lg:w-6/12 flex flex-col items-stretch">
                    <label class="w-full" for="freeword">備考</label>
                    <p class="w-full h-full text-md p-2 border-2 border-gray-200 focus:border-green-200 rounded-md"><?= htmlspecialchars($note,ENT_QUOTES) ?></p>
                </div>

            </div>

            <div class="flex justify-end">
                <a href="kadai05_3.php" class="block w-40 h-10 text-white text-center leading-10 bg-gray-500 mr-10 hover:bg-gray-400 rounded-md">入力に戻る</a>
                <a href="#" class="block w-40 h-10 text-white text-center leading-10 bg-pink-600 hover:bg-pink-500 rounded-md">送信する</a>
            </div>

        </section>


    </div>
</body>

</html>