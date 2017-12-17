<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script> -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.printPage.js')}}"></script>
    <title>Print Document</title>
</head>
<body>
    <a href="{{URL::to('printer/print')}}" class="btnPrint">Print</a>

    <script>
        $(document).ready(function() {
            // $('.btnPrint').printPage();
            $(".btnPrint").printPage({
                message:"Silahkan Tunggu Sebentar...";
            });
        });
    </script>
</body>
</html>