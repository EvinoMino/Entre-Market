
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawnShop</title>
</head>
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
    </header>
    <a href="/list/create">Add</a>
    <div>
    <table border="1" class="head">
        <th class="head">
            <td class="head1">No</td>
            <td class="head1">Nama</td>
            <td class="head1">Nim</td>
            <td class="head1">Email</td>
            <td class="head1">Jenis Kelamin</td>
        </th class="head">
        @foreach($mahasiswa as $w)
            <tr >
                <td ></td>
                <td>{{$w->id}}</td>
                <td>{{$w->nama}}</td>
                <td>{{$w->nim}}</td>
                <td>{{$w->email}}</td>
                <td>{{$w->jenis_kelamin}}</td>
                <td >
                    <form action="/list/{{$w->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

</body>
</html><link rel="stylesheet" href="css/add.css">
