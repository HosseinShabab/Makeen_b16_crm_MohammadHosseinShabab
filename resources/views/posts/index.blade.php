<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>crm post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container">
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/users/index"> کاربران جدید</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products/index">محصولات </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orders/index"> سفارشات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts/index"> وبلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories/index">دسته بندی</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th><a href="/posts/create"><button>ایجاد وبلاگ جدید</button></a></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

            <tr>
                <td>{{$post ->post_title }}</td>
                <td>{{ $post->category_id }}</td>
                <td>
                    <a href="/posts/edit/{{ $post->id  }}"><button class="btn btn-dark">Edit</button></a>
                    <form action="/posts/delete/{{ $post->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <br>
        <br>

</body>

</html>
