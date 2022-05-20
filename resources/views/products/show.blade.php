@include('includes.header')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($products as $porduct)
            <div class="col-md-3 ">
              <div>
              <a href="javascritp:void(0)" class="btn btn-link text-decoration-none">
                    <div class="card ">
                        <img src="{{asset($porduct['image'])}}" class="card-img-top" alt="">
                        <div class="card-body">
                        <h3>Product Name: {{$porduct['name']}}</h3>
                        <h5>Product Price: {{$porduct['price']}}</h5>
                        <p>Product Description: {{$porduct['description']}}</p>
                        </div>
                    </div>
                </a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@include('includes.footer')