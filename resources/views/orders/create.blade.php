<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">
    <h1>ایجاد سفارش</h1>

    <form action="/orders/create" method="post">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger" dir="ltr">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label for="pwd" class="form-label">نام خریدار:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام خریدار را وارد کنید"
                name="buyer_first_name" value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">نام خانوادگی خریدار:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام خانوادگی خریدار را وارد کنید"
                name="buyer_last_name" value="" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label"> جمیل خریدار:</label>
            <input type="email" class="form-control" id="email" placeholder="جمیل خریدار را وارد کنید"
                name="buyer_gmail" value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label"> نام محصول:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام محصول را وارد کنید"
                name="product_name" value="" required>
        </div>
        <div style="padding-left: 95%;">
            <label for="pwd" class="form-label">رنگ:</label>
            <input type="color" class="form-control" id="pwd" placeholder="رنگ محصول را وارد کنید"
                name="color" value="">
        </div>
        <div class="mb-3">
            <h6>نحوه پرداخت</h6>
            <input type="radio" id="male" name="payment_method" value="in_person">
            <label for="male">حضوری </label><br>
            <input type="radio" id="female" name="payment_method" value="online">
            <label for="female">آنلاین</label><br>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">آدرس:</label>
            <input type="password" class="form-control" id="pwd" placeholder="آدرس خود را وارد کنید"
                name="address" value="">
        </div>

        <button class="btn btn-primary">افزودن</button>
    </form>

</body>

</html>
