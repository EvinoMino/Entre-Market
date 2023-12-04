
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawnShop</title>
</head>
<link rel="stylesheet" href="/css/add.css">
<body>
    <header>
<nav>
        <ul class="nav_link">
            <li><a class="navbar" href="/">home</a></li>
            <li><a class="navbar" href="/room">room</a></li>
            <li><a class="navbar" href="https://linktr.ee/pawnshop.binus">contact</a></li>
            <li><a class="navbar" href="/list">list</a></li>
            <li><a class="navbar" href="">bonus</a></li>
        </ul>
    </nav>
    <header>

    <div class="center">
    <h1>Create Mahasiswa</h1><br>

<form action="/list/store" method="POST">
@csrf
<label for="product-name">Nama:</label>
<input type="text" placeholder="Your name" id="product-name" name="nama" required><br><br>

<label for="product-name">Nim:</label>
<input type="text" placeholder="NIM" id="product-name" name="nim" required><br><br>
        
<label for="product-detail">Email:</label>
<input type="text" placeholder="@binus.ac.id" id="product-name" name="email" required><br><br>

<label for="">Jenis Kelamin</label>
<select name="jenis_kelamin" id="">
    <option value="">Pilih Jenis Kelamin</option>
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
</select><br><br>

<input type="submit" name="submit" value="Save">

    </div>

</form>

</body>
