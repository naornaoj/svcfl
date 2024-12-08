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

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

      <!-- html5-qrcode -->
      <script src="html5-qrcode.min.js"></script>
    </head>
    <body >
    <x-app-layout>
        <div class="bg-white mb-2 dark:bg-gray-800 relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="mx-2 my-2">
                <h4 class="text-center text-2xl font-bold dark:text-white mx-auto">Search Patient</h4>
                <div class="grid md:grid-cols-12 md:gap-4 ">
                    <div class="relative z-0 mb-5 group col-span-3">
                        <label for="search_req_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUEST NO</label>
                        <input type="text" id="search_req_no" name="search_req_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-4">
                        <label for="search_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PATIENT NAME</label>
                        <input type="text" id="search_name" name="search_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-3">
                    <button type="button" onclick="getInfo()" class="mt-7 p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div style="width: 500px" id="reader"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-2 bg-white dark:bg-gray-800 relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="mx-2 my-2">
                <h4 class="text-center text-2xl font-bold dark:text-white mx-auto">PATIENT DETAILS</h4>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="grid md:grid-cols-12 md:gap-4 ">
                    <div class="relative z-0 mb-5 group col-span-3">
                        <label for="req_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUEST NO</label>
                        <input type="text" id="requestNo" name="requestNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-6">
                        <label for="patientName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">PATIENT NAME</label>
                        <input type="text" id="patientName" name="patientName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>                
                    <div class="relative z-0 mb-5 group col-span-3">
                        <label for="or_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">OR NO</label>
                        <input type="text" id="or_no" name="or_no" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>
                </div>
                <div class="grid md:grid-cols-12 md:gap-4 ">
                    <div class="relative z-0 mb-5 group col-span-2">
                        <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">AGE</label>
                        <input type="text" id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-2">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GENDER</label>
                        <input type="text" id="gender" name="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-8">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ADDRESS</label>
                        <input type="text" id="address" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>
                </div>
                <div class="grid md:grid-cols-12 md:gap-4 ">
                    <div class="relative z-0 mb-5 group col-span-3">
                        <label for="reqphysician" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">REQUESTING DOCTOR</label>
                        <input type="text" id="reqphysician" name="reqphysician" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-3">
                        <label for="dateTimeRequested" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DATE & TIME REQUESTED</label>
                        <input type="datetime-local" id="dateTimeRequested" name="dateTimeRequested" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" enabled />
                        <!-- <input id="dateTimeRequested" type="datetime-local" name="party-date" value="2017-06-01T08:30" /> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 relative overflow-x-auto shadow-md sm:rounded-lg">
            <form class="row g-3" method="POST" action="">
                <h4 class="text-center text-2xl font-bold dark:text-white mx-auto">BLOOD TYPING</h4>
                <div class="grid md:grid-cols-12 md:gap-4 ">
                    <div class="relative z-0 mb-5 group col-span-3">
                        <label class="text-right block mb-2 text-sm font-medium text-gray-900 dark:text-white">RESULT</label>
                    </div>
                    <div class="relative z-0 mb-5 group col-span-3">
                        <input type="text" id="bloodtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="relative z-0 mb-5 group col-span-3">
                        <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </x-app-layout>

    <script>
        function getInfo() {
            var data = {
                id : $('#search_req_no').val(),
                name : $('#search_name').val()
            };

            console.log(data);
            $.ajax({
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/diagnostics/search',
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        // Handle the response (e.g., update UI)
                        $('#requestNo').val(response[0].id);
                        $('#patientName').val(response[0].name);
                        $('#age').val(response[0].age);
                        $('#gender').val(response[0].gender);
                        $('#address').val(response[0].address);
                        $('#reqphysician').val(response[0].reqphysician);
                        $('#dateTimeRequested').val(response[0].updated_at);

                        console.log(response);
                    }
                });
        }
    </script>
      
    <script>
        function onScanSuccess(decodedText, decodedResult) {
        // Handle on success condition with the decoded text or result.
        console.log(`Scan result: ${decodedText}`, decodedResult);
        }

        function onScanError(errorMessage) {
            // handle on error condition, with error message
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>
    </body>
</html>