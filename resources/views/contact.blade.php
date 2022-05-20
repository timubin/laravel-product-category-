<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact us</title>
  </head>
  <body>
   

    <div class="">
        <ul class="bd-highlight border list-unstyled d-flex flex-row bd-highlight mb-3">
            <li class='p-2 bd-highlight'><a class="text-decoration-none" href="/">Home</a></li>
            <li class='p-2 bd-highlight'><a class="text-decoration-none" href="about">About</a></li>
            <li class='p-2 bd-highlight'><a class="text-decoration-none" href="contact">Contact</a></li>
        </ul>

        <div class="container mt-20 ">
          <div class="row">
            <div class="com-md-6 mx-auto">
            <form action="{{route('student.store')}}" method="POST">
              @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
          </div>
        
        </div>
        
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
