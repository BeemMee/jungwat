<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form</title>
    <style>
        body {
            background-color: #f4f9fd;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        h2 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #0d6efd;
        }

        .form-label {
            margin-bottom: 6px;
        }

        .form-control, .form-select {
            border-radius: 6px;
            padding: 10px;
            font-size: 15px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            border-radius: 6px;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: #0a58ca;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>แบบฟอร์มข้อมูลผู้รับ</h2>
        <form class="row g-3">
            <div class="form-group">
                <label for="namerub" class="form-label">ชื่อผู้รับ</label>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="ชื่อ" aria-label="First name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="นามสกุล" aria-label="Last name" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inputCity" class="form-label">เบอร์ติดต่อ</label>
                <input type="tel" class="form-control" id="phonenumber" required>
            </div>
            <div class="form-group">
                <label for="province" class="form-label">จังหวัด</label>
                <select class="form-select" id="province" required onchange="updateDistricts()">
                    <option selected disabled value="">เลือกจังหวัด</option>
                    <option value="bangkok">กรุงเทพมหานคร</option>
                </select>
            </div>
            <div class="form-group">
                <label for="district" class="form-label">อำเภอ/เขต</label>
                <select class="form-select" id="district" required onchange="updateSubdistricts()">
                    <option selected disabled value="">เลือกอำเภอ/เขต</option>
                </select>
            </div>
            <div class="form-group">
                <label for="subdistrict" class="form-label">ตำบล</label>
                <select class="form-select" id="subdistrict" required>
                    <option selected disabled value="">เลือกตำบล</option>
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="บ้านเลขที่" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="รหัสไปรษณีย์" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputCity" class="form-label">รายละเอียดที่อยู่</label>
                <input type="text" class="form-control" id="teeyu" required>
            </div>
            <div class="form-group">
                <label for="birthday">วันที่สั่ง</label>
                <input type="date" id="birthday" name="daterub" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Next</button>
        </form>
        <button class="btn btn-primary" type="button" onclick="location.href='form2.php'">สำหรับผู้ส่ง</button>

    </div>
    <?php include 'jungwat.php';?>
</body>
</html>

