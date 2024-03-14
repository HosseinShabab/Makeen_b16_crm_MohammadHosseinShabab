<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatUser</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">

    <h1>افزودن کاربر</h1>

    <form action="/users/create" method="post">
        @csrf
        <div class="mb-3">
            <label for="pwd" class="form-label">نام :</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام خود را وارد کنید"
                name="first_name" , value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">نام خانوادگی:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام خانوادگی خود را وارد کنید"
                name="last_name" value="" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">جمیل:</label>
            <input type="email" class="form-control" id="email" placeholder="جمیل خود را وارد کنید" name="gmail"
                value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">رمز عبور:</label>
            <input type="password" class="form-control" id="pwd" placeholder="رمز عبور خود را وارد کنید"
                name="password" value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">سن:</label>
            <input type="number" class="form-control" id="pwd" placeholder="سن خود را وارد کنید" name="age"
                value="">
        </div>
        <div class="mb-3">
            <h6>جنسیت خودرا مشخص کنید</h6>
            <input type="radio" id="male" name="jender" value="male">
            <label for="male">نر</label><br>
            <input type="radio" id="female" name="jender" value="female">
            <label for="female">ماده</label><br>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">آدرس:</label>
            <input type="text" class="form-control" id="pwd" placeholder="آدرس خود را وارد کنید"
                name="address">
        </div>
        {{-- <div class="mb-3">
            <label for="pwd" class="form-label">تاریخ ثبت نام:</label>
            <input type="datetime-local" class="form-control" id="pwd" placeholder="تاریخ ثبت نام "
                name="date_of_registration" value="" disabled>
        </div> --}}
        <div class="mb-3">
            <label for="pwd" class="form-label">تاریخ تولد:</label>
            <input type="date" class="form-control" id="pwd" placeholder="تاریخ تولد خود را وارد کنید   "
                name="birth_day" value="">
        </div><div class="mb-3">
            <label for="pwd" class="form-label">کشور :</label>
            <input type="text" class="form-control" id="pwd" placeholder=" کشور خود را وارد کنید"
                name="country" value="">
        </div>
        <button type="submit" class="btn btn-primary">افزودن</button>

    </form>


</body>

</html>
