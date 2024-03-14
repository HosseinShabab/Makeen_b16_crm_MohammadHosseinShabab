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
          <a class="nav-link" href="http://localhost/projects/crm/user/user.php"> کاربران جدید</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/projects/crm/product/product.php">محصولات </a>
        </li>
        <div class="dropdown">
          <button type="button" class="btn btn-light  dropdown-toggle" data-bs-toggle="dropdown">
            دسته بندی محصولات
          </button>
          <ul class="dropdown-menu">
            <li> ایرانی</li>
            <ul>
              </li><a class="dropdown-item" href="#">سایپا</a></li>
              </li><a class="dropdown-item" href="#">ایران خودرو</a></li>
            </ul>
            <li>خارجی</li>
            <ul>
              <li>هاچ بک</li>
              <ul>
                </li><a class="dropdown-item" href="#">citron</a></li>
                </li><a class="dropdown-item" href="#">BMW</a></li>
                </li><a class="dropdown-item" href="#">alfaromeo</a></li>
              </ul>
              <li>suv</li>
              <ul>
                <li>HWD</li>
                <ul>
                  </li><a class="dropdown-item" href="#">hyundai</a></li>
                  </li><a class="dropdown-item" href="#">kia</a></li>
                </ul>
                <li>AWD</li>
                <ul>
                  </li><a class="dropdown-item" href="#">kia </a></li>
                  </li><a class="dropdown-item" href="#">hyundai</a></li>
                </ul>
              </ul>
              <li>سدان</li>
              <ul>
                </li><a class="dropdown-item" href="#">mitsubishi</a></li>
                </li><a class="dropdown-item" href="#">kia</a></li>
              </ul>
              <li>کوپه</li>
              <ul>
                </li><a class="dropdown-item" href="#">maserati</a></li>
                </li><a class="dropdown-item" href="#">ford</a></li>
                </li><a class="dropdown-item" href="#">astonmartin</a></li>
                </li><a class="dropdown-item" href="#">lamborghini</a></li>
                </li><a class="dropdown-item" href="#">jaguar</a></li>

              </ul>
            </ul>
          </ul>

        </div>

        <li class="nav-item">
          <a class="nav-link" href="http://localhost/projects/crm/order/order.php"> سفارشات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/projects/crm/post.html"> وبلاگ</a>
        </li>
      </ul>
    </div>

  </nav>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>نام محصول</th>
        <th>جمیل خریدار</th>
        <th>رنگ</th>
        <th>آدرس</th>
        <th><a href="/orders/create"><button>ایجاد سفارش</button></a></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order )

        <tr>
            <td>{{$order->product_name}}</td>
            <td>{{$order->buyer_gmail}}</td>
            <td>{{$order->color}}</td>
            <td>{{$order->address}}</td>
            <td>
                <a href="/orders/edit/{{$order->id}}"><button class="btn btn-dark">Edit</button></a>
                <form action="/orders/delete/{{$order->id}}" method="POST">
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
