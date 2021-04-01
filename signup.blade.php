<!DOCTYPE html>
<head>
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="assets/signup.css">
</head>
<body>
    <section class="container-fluid">
        <section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3">

    <form action= "{{route('new_signup')}}" method="POST" class="form-container" style="margin-bottom: 20px;">
        @csrf


        <div class="mb-6">
            <h2><img src="assets/log.png">
          Loans</h2>

          </div>
        <div class="mb-6">
          <label for="exampleInputEmail1" class="form-label">First Name</label>
          <input type="text" name="fname" class="form-control" id="" placeholder="Enter First Name">

        </div>

        <div class="mb-6">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="" placeholder="Enter Last Name">

          </div>
          <div class="mb-6">
            <label for="exampleInputEmail1" class="form-label">ID Number</label>
            <input type="text" name="idno" class="form-control" id="" placeholder="Enter ID">

          </div>
          <div class="mb-6">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" id="" placeholder="Enter Password">

          </div>
        <div class="mb-6">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="password" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email Address">
        </div>
       <div class="text-mb-3">
           <a href="/login">Login here.</a>
       </div>

            <button type="submit" class="block">Submit</button>
            <script>
              function myOnClickFn(){
                document.location.href="/login";
              }
          </script>

          </div>
      </form>
</section>
</section>
</section>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>
