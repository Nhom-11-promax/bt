<html>

<body>
    <h1>Tìm sách</h1>
    <form action="" method="get">
        Nhập : <input type="text" name="txtTuKhoa">
        <input type="submit" value="Tim">
    </form>
    <?php
    $sTukhoa = $_REQUEST["txtTuKhoa"];
    ?>
    <h1>Tìm sách</h1>
    Từ khóa tìm là : <?php echo $sTukhoa; ?>
</body>

</html>