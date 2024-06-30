<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>SVCFL</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicon -->
      <link href="{{ asset('img/favicon.ico') }}" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
          rel="stylesheet">

      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

      <!-- Libraries Stylesheet -->
      <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
      <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

      <!-- Template Stylesheet -->
      <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('diagnostics') }}">
                @csrf
                
                <h1 class="text-center font-bold text-xl mt-4">Patient Details</h1>
                <div class="col-md-4">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="mname" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="mname">
                </div>
                <div class="col-md-4">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname">
                </div>
                <div class="col-md-6">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age">
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="gender">
                </div>
                <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="orNum" class="form-label">Official Receipts</label>
                    <input type="number" class="form-control" id="orNum">
                </div>
                <h1 class="text-center font-bold text-xl mt-4" >Urinalysis</h1>

                <h5 class="font-medium text-xl mt-4" >Physical</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead >
                            <tr>
                                <th scope="col">Color</th>
                                <th scope="col">Transparency</th>
                                <th scope="col">pH</th>
                                <th scope="col">Sp. Gr.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yellow</td>
                                <td>Slightly Hazy</td>
                                <td>6.0</td>
                                <td>1.020</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="font-medium text-xl mt-4" >Chemical</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead >
                            <tr>
                                <th scope="col">Protein</th>
                                <th scope="col">Glucose</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Negative</td>
                                <td>Negative</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="font-medium text-xl mt-4" >Microscopic</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead >
                            <tr>
                                <th scope="col">Casts</th>
                                <th scope="col">Crystals</th>
                                <th scope="col">Amorphous</th>
                                <th scope="col">Micro Organism</th>
                                <th scope="col">Others</th>
                                <th scope="col">W.B.C / hpf</th>
                                <th scope="col">R.B.C. / hpf</th>
                                <th scope="col">Epithelial Cells</th>
                                <th scope="col">Mucus Threads</th>
                                <th scope="col">Bacteria</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>CALCIUM OXALATE: RARE/HPF</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>1-2</td>
                                <td>2-5</td>
                                <td>Rare</td>
                                <td>Moderate</td>
                                <td>Few</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success float-end my-4">Print Results</button>
                </div>
            </form>
        </div>




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-info btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/dark-mode.js')}}"></script>
    </body>
</html>
