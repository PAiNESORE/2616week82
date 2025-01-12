<?php include("conn.php") ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- เพิ่มฟอนต์และกำหนดฟอนต์ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mitr:wght@200;300;400;500;600;700&family=Noto+Sans+Thai:wght@100..900&family=Pattaya&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        h1 {
            font-family: "IBM Plex Sans Thai", serif;
            font-weight: 600;
            font-style: normal;
            font-size: 35px;

        }

        body {
            font-family: "IBM Plex Sans Thai", serif;
            font-weight: 400;
            font-style: normal;
            font-size: 20px;
            margin-left: 200px;
            margin-right: 200px;
            margin-top: 40px;
            margin-bottom: 40px;

        }
    </style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มบันทึกข้อมูล</title>
</head>

<body>
    <center>
        <h1>แบบฟอร์มบันทึกข้อมูล</h1>
    </center>
    <center>โดย นายพีรพัฒน์ ทองมี หมู่เรียน 26.16 รหัสนักศึกษา 653485016</center><br>


    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        </div>
        <div class="row mb-2">
            <label for="inputEmail3" class="col-sm-2 col-form-label">รหัสนักศึกษา</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputEmail3" name="stdid">
            </div>

        </div>
        <div class="row mb-2">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ชื่อ</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputEmail3" name="name">
            </div>

        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-2 col-form-label">ชื่อเล่น</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputPassword3" name="nickname">
            </div>
        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-2 col-form-label">หมู่เรียน</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3" name="classno">
            </div>
        </div>
        <div class="row mb-2">
            <label for="inputPassword3" class="col-sm-2 col-form-label">อายุ</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="inputPassword3" name="age">
            </div>
            <label for="inputPassword3" class="col-sm-2 col-form-label">ปี</label>

        </div>
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stdid = $_POST['stdid'];
        $name = $_POST['name'];
        $nickname = $_POST['nickname'];
        $age = $_POST['age'];
        $classno = $_POST['classno'];

        //    ทำการเพิ่มข้อมูล
        $sql = "INSERT INTO student (stdid, name, nickname, classno, age)
VALUES ('$stdid', '$name', '$nickname', '$classno', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}}

$conn->close();
?>
        <center>
            <button type="submit" class="btn btn-primary">บันทึกข้อมูล </button>
            <button type="reset" class="btn btn-danger">ยกเลิก </button>
        </center>
    </form>
</body>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>