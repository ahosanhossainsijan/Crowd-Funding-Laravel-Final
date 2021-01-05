<html>
<head>
    <title>Report Page</title>
        <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <style>
            table{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            table td, table thead{
                border: 1px solid #ddd;
                padding: 8px;
            }
            table tr:nth-child(even){
                background-color: aqua;
            }
            table thead{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: #fff;
            }
        </style>
</head>
    <body>
        
        <br>
            <h1 class="text-white bg-dark text-center">
                User's Count
            </h1>
            <table>
                <tbody>
                    <tr>
                        <td>Total User</td>
                        <td>:</td>
                        <td>{{$countsOf}}</td>
                    </tr>
                    <
                </tbody>
            </table>
        

        
        <br>
    </body>
</html>