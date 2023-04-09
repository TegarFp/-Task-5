<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('template_dashboard/')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('template_dashboard/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('template_dashboard/')}}/dist/css/adminlte.min.css">
    <title></title>
  </head>
  <body>
      <div id="flashError" data-flash="{{session()->get('error')}}"></div>
    <section class="vh-100" style="background-color: #48AA33;">

    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <p class="text-center text-white fw-700" style="font-family: 'Poppins'; font-size: 70px;">Udacoding</p>
          <div class="card item-center">
            <div class="card-body">
              <form role="form" action="{{url('login')}}" method="post">
                    @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Masukkan Email">
                  </div>
                  <label for="Password">Password</label>
                  <input type="password" class="form-control" id="Password" name="password" placeholder="Masukkan Password">
                  
                  <div class="row mt-5">
                    <button type="submit" class="btn btn btn-block text-white text-bold btn-rounded btn-lg" style="background-color: #48AA33; border-radius: 40px;">Login</button>
                </div>
                <div class="mt-5 text-center">
                  Don't have an account&nbsp<span><a class="mt-5" href="#" style="color: #48AA33; margin-top: 20px; text-decoration: underline;">Sign up</a></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </body>
  <script src="{{asset('template_dashboard/')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('template_dashboard/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('template_dashboard/')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('template_dashboard/')}}/sweetalert2/dist/sweetalert2.all.js"></script>
</body>
</html>
<script type="text/javascript">
          var flashError =$('#flashError').data('flash');
          if (flashError) {
              Swal.fire({
              icon: 'error',
              title: 'Error',
              text: flashError,
            })
          }
            var flash =$('#flash').data('flash');
            if (flash) {
                Swal.fire({
                icon: 'success',
                title: 'success',
                text: flash,
              })
            }
            $(document).on('click', '#btn-hapus', function(e){
              e.preventDefault();
              var link = $(this).attr('href');
              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                confirmButtonColor: '#00a65a',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                showCancelButton: true,
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location = link;
                }
              })
            })
          </script>
</html>
