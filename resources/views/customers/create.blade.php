<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuliah WhatsApp PHP Indonesia Mojokerto: Laravel 5.4</title>
</head>
<body>
    <h1>Tambah Data Customer <small><a href="{{ action('CustomersController@index') }}">Kembali</a></small></h1>

    <form action="{{ action('CustomersController@store') }}" method="POST">
        {{ csrf_field() }}
        <table>
            <tbody>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="telp">Telepon</label></td>
                    <td><input type="text" name="telp" id="telp"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td><textarea name="alamat" id="alamat" cols="15" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit">Tambah Data</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
