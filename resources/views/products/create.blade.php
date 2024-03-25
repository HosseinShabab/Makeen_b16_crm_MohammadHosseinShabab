<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">
    <h1>افزودن محصول</h1>
    <form action="/products/create" method="post">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="pwd" class="form-label">نام محصول :</label>
            <input type="text" class="form-control" id="" placeholder="نام محصول خود را وارد کنید"
                name="product_name" value="" required>
        </div>
        <div style="padding-left: 95%;">
            <label for="pwd" class="form-label">رنگ :</label>
            <input type="color" class="form-control" id="" placeholder="رنگ محصول را وارد کنید"
                name="color" value="" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">شرکت سازنده:</label>
            <input type="text" class="form-control" id="" placeholder="شرکت سازنده را وارد کنید"
                name="manufactorer" value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">تعداد:</label>
            <input type="number" class="form-control" id="" placeholder="تعداد را وارد کنید" name="amount"
                value="" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">قیمت:</label>
            <input type="number" class="form-control" id="" placeholder="قیمت را وارد کنید" name="price"
                value="">
        </div>
        <div class="mb-3">
            <h6>گارانتی</h6>
            <input type="radio" id="male" name="warranty" value="include">
            <label for="male">دارد</label><br>
            <input type="radio" id="female" name="warranty" value="not_include">
            <label for="female">ندارد</label><br>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">گارانتی:</label>
            <input type="password" class="form-control" id="" placeholder="نام شرکت گارانتی را وارد کنید"
                name="warranty_manufactorer" value="">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">تاریخ عرضه:</label>
            <input type="date" class="form-control" id="" placeholder="تاریخ عرضه محصول را وارد کنید   "
                name="date_of_supply" value="">
        </div>
        <button type="submit" class="btn btn-primary">افزودن</button>


    </form>

</body>

</html>
