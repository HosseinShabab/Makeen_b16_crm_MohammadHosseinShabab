<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="http://localhost/projects/crm/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container">
  <!-- A grey horizontal navbar that becomes vertical on small screens -->
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
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>نام محصول</th>
        <th>قیمت </th>
        <th>شرکت</th>
        <th><a href="/products/create"><button>ایجاد محصول</button></a></th>
      </tr>
    </thead>
    <tbody>
        @foreach ( $products as $product )

        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->manufactorer}}</td>

            <td>
                <a href="/products/edit/{{$product->id}}"><button class="btn btn-dark">Edit</button></a>
                <form action="/products/delete/{{$product->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>

</html>
