<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="padding: 5%;">
    <h1>افزودن وبلاگ</h1>
    <form action="/posts/create" method="post">
        @csrf
        <div class="mb-3">
            <label for="pwd" class="form-label">عنوان وبلاگ :</label>
            <input type="text" class="form-control"  placeholder="عنوان وبلاگ خود را وارد کنید" name="post_title" value="" required>
        </div>
        <textarea name="post_content"  cols="30" rows="10" placeholder="مطلب را وارد کنید"></textarea>
        <br>
        <hr>
        <select name="category_id" >
            @foreach ($categories_id as $category_id )
                <option value="{{$category_id->category_id}}">{{$category_id->category_id}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">افزودن</button>
    </form>

</body>

</html>
