<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* Background & body */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    background: 
      linear-gradient(135deg,#0000 20.5%,#ffffff 0 29.5%,#0000 0) 0 20px,
      linear-gradient( 45deg,#0000 8%,#ffffff 0 17%, #0000 0 58%) 40px 0,
      linear-gradient(135deg,#0000 8%,#ffffff 0 17%, #0000 0 58%,#ffffff 0 67%,#0000 0),        
      linear-gradient( 45deg,#0000 8%,#ffffff 0 17%, #0000 0 58%,#ffffff 0 67%,#0000 0 83%,#ffffff 0 92%,#0000 0),
      #40d9cc;
      background-size: 80px 80px;
    margin: 0;
    width: 100%;
    height: 100vh;
    font-family: 'Nunito', sans-serif;
}

/* Container utama */
.container {
    display: flex;
    flex-direction: column; /* Tambahkan ini agar item dalam container ditata secara vertikal */
    justify-content: center;
    align-items: center;
    background: #eff1a6;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    padding: 20px;
}

/* Center QR Code */
.row {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Pastikan QR Code berada di tengah */
}

/* Form styling */
form {
    display: flex;
    flex-wrap: wrap;
    gap: 25px; /* Menambahkan jarak antar elemen */
    justify-content: center;
    padding-bottom: 10px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 5px;
    font-size: 14px;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    outline: none;
    margin: 5px 0; /* Memberikan jarak atas-bawah untuk input */
}

.form-group input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

button {
    background-color: #ff0050;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.3s;
}

button:hover {
    background-color: #810029;
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    overflow: hidden;
}

th, td {
    padding: 10px;
    text-align: center;
    color: white;
}

th {
    background-color: #ff0050;
    color: white;
}

td a {
    text-decoration: none;
    color: white;
    background-color: #ff0050;
    padding: 5px 10px;
    border-radius: 5px;
    transition: 0.3s;
}

td a:hover {
    background-color: #810029;
}

h2 {
    color: white;
    text-align: center;
}

/* Responsif untuk layar kecil */
@media (max-width: 600px) {
    .container {
        width: 90%;
    }

    form {
        flex-direction: column;
    }

    .form-group input {
        width: 100%;
    }
}

        </style>
    </head>
    <body>
        <div class="container">
            <h2>Scan QR Code Here</h2>
            <div class="row mt-5">
                {!! $qrcode !!}
            </div>
        </div>
    </body>
</html>