<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">
    <h1>افزودن دسته</h1>
    <form action="/categories/create" method="post">
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
            <label for="pwd" class="form-label">نام دسته :</label>
            <input type="text" class="form-control" id="" placeholder="نام دسته خود را وارد کنید"
                name="category_name" value="" required>
        </div>
        <div style="padding-left: 95%;">
            <label for="pwd" class="form-label">عدد دسته:</label>
            <input type="number" class="form-control" id="" placeholder=" عدد دسته را وارد کنید"
                name="category_id" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">افزودن</button>
    </form>

</body>

</html>
