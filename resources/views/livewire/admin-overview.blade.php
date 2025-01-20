<div class="mx-2">
  <div class="row">
    <div class="col-lg-4">
      <div class="dashstat">
        <i class="fa-solid fa-cart-shopping"></i>
        <div class="dashstat_content">
          <h3>{{ $totalOrders }}</h3>
          <p>Total Orders</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="dashstat">
        <i class="fa-solid fa-tag"></i>
        <div class="dashstat_content">
          <h3>{{ $totalProducts }}</h3>
          <p>Total Products</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="dashstat">
        <i class="fa-solid fa-list-ul"></i>
        <div class="dashstat_content">
          <h3>{{ $totalCategories }}</h3>
          <p>Total Categories</p>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-2 navicards">
    <div class="row">
      <div class="col-lg-6">
        <a href="{{route('admin.orders')}}">
          <div class="navcard">
            <div class="nc_left">
              <i class="fa-solid fa-cart-shopping"></i>
              <p>Check Order History</p>
            </div>

            <div class="nc_right">
              <i class="fa-solid fa-arrow-right-long"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-6">
        <a href="{{route('admin.add-product')}}">
          <div class="navcard">
            <div class="nc_left">
              <i class="fa-solid fa-tag"></i>
              <p>Add New Product</p>
            </div>

            <div class="nc_right">
              <i class="fa-solid fa-arrow-right-long"></i>
            </div>
          </div>
        </a>
      </div>
    </div>
   </div>
</div>