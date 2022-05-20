@include('includes.header')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-3 ">
              <div class="d-inline">
              <a href="{{route('category-wise-products', ['category_id' => $category['id']])}}" class="btn btn-link text-decoration-none">
                    <div class="card card-body">
                    <h4>{{$category['name']}}</h4>
                    </div>
                </a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


@include('includes.footer')