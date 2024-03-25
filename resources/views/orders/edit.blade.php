<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">

    <h1>ویرایش سفارشات</h1>
    <form action="/orders/edit/{{ $order->id }}" method="post">
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
            <label for="pwd" class="form-label">نام خریدار:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام خریدار را وارد کنید"
                name="buyer_first_name" value="{{ $order->buyer_first_name }}" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">نام خانوادگی خریدار:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام خانوادگی خریدار را وارد کنید"
                name="buyer_last_name" value="{{ $order->buyer_last_name }}" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label"> جمیل خریدار:</label>
            <input type="email" class="form-control" id="email" placeholder="جمیل خریدار را وارد کنید"
                name="buyer_gmail" value="{{ $order->buyer_gmail }}" required>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label"> نام محصول:</label>
            <input type="text" class="form-control" id="pwd" placeholder="نام محصول را وارد کنید"
                name="product_name" value="{{ $order->product_name }}" required>
        </div>
        <div style="padding-left: 95%;">
            <label for="pwd" class="form-label">رنگ:</label>
            <input type="color" class="form-control" id="pwd" placeholder="رنگ محصول را وارد کنید"
                name="color" value="{{ $order->color }}">
        </div>
        <div class="mb-3">
            <h6>نحوه پرداخت</h6>
            <input type="radio" id="male" name="payment_method" value="online"
                {{ $order->payment_method == 'online' ? 'checked' : '' }}>
            <label for="male">حضوری </label><br>
            <input type="radio" id="female" name="payment_method"
                value="in_person"{{ $order->payment_method == 'in_person' ? 'checked' : '' }}>
            <label for="female">آنلاین</label><br>
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">آدرس:</label>
            <input type="password" class="form-control" id="pwd" placeholder="آدرس خود را وارد کنید"
                name="address" value="{{ $order->address }}">
        </div>
        {{-- <div class="mb-3">
            <label for="pwd" class="form-label">تاریخ ثبت سفارشُ:</label>
            <input type="datetime-local" class="form-control" id="pwd" placeholder="تاریخ ثبت سفارش  " name="order_date" value="" disabled>
        </div> --}}
        <button type="sumbim" class="btn btn-primary">ویرایش</button>
    </form>

</body>

</html>
