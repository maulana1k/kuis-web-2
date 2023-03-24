<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            h1 {
                margin-bottom: 40px;
            }

            label {
                color: #333;
            }

            .btn-send {
                font-weight: 300;
                text-transform: uppercase;
                letter-spacing: 0.2em;
                width: 80%;
                margin-left: 3px;
            }
            .help-block.with-errors {
                color: #ff5050;
                margin-top: 5px;
            }

            .card {
                margin-left: 10px;
                margin-right: 10px;
            }
            /* .card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
}
.blue-text {
    color: #00bcd4;
}
.form-control-label {
    margin-bottom: 0;
}
input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300;
}
input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00bcd4;
    outline-width: 0;
    font-weight: 400;
}
.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer;
}
.btn-block:hover {
    color: #fff !important;
}
button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0;
} */
        </style>
        <title>Pegawai</title>
    </head>
    <body>
        <div class="p-5">@yield('content')</div>
    </body>
</html>
