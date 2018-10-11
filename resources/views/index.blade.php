<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dictionary</title>
    <meta charset="UTF-8">

</head>
<body>

        <form method="post" action="{{ route('search') }}">
            @csrf
            <label>Nhập từ cần tìm</label>
            <input name="search" placeholder="input a word">
            <input type="submit">
        </form>

<?php
if (isset($flag)) {
    if ($flag == 0) {
        echo "Không tìm thấy từ cần tra cứu";
    }elseif ($flag !== 0) {
        echo "Nghĩa từ " . $word . " là: " . $result;
    }
}
?>

</body>
</html>
