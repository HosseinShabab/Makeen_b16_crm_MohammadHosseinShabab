<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">
    <h1>ویرایش محصول</h1>
  <form action="/products/edit/{{$product->id}}" method="post">
    @csrf
        <div class="mb-3">
            <label for="pwd" class="form-label">نام محصول :</label>
            <input type="text" class="form-control" id="" placeholder="نام محصول خود را وارد کنید" name="product_name" value="{{$product->product_name}}" required>
        </div>
        <div style="padding-left: 95%;">
            <label for="pwd" class="form-label">رنگ  :</label>
            <input type="color" class="form-control" id="" placeholder="رنگ محصول را وارد کنید" name="color" value="{{$product->color}}" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">شرکت سازنده:</label>
            <input type="text" class="form-control" id="" placeholder="شرکت سازنده را وارد کنید" name="manufactorer" value="{{$product->manufactorer}}" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">تعداد:</label>
            <input type="number" class="form-control" id="" placeholder="تعداد را وارد کنید" name="amount" value="{{$product->amount}}" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">قیمت:</label>
            <input type="number" class="form-control" id="" placeholder="قیمت را وارد کنید" name="price" value="{{$product->price}}" readonly>
        </div>
        <div class="mb-3">
            <h6>گارانتی</h6>
        <input type="radio" id="waranty" name="warranty" value="include" {{$product->warranty == 'include' ? 'checked' : ""}}>
        <label for="male">دارد</label><br>
        <input type="radio" id="waranty" name="warranty" value="not_include" {{$product->warranty == 'not_include' ? 'checked' : ""}}>
        <label for="female">ندارد</label><br>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">گارانتی:</label>
            <input type="password" class="form-control" id="pwd" placeholder="نام شرکت گارانتی را وارد کنید" name="warranty_manufactorer" value="{{$product->warranty_manufactorer}}">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">تاریخ عرضه:</label>
            <input type="date" class="form-control" id="pwd" placeholder="تاریخ عرضه محصول را وارد کنید   " name="date_of_supply" value="{{$product->date_of_supply}}">
        </div>
        <button type="submit" class="btn btn-primary">ویرایش</button>
    </form>

</body>

</html>
