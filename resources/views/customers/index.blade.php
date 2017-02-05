<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuliah WhatsApp PHP Indonesia Mojokerto: Laravel 5.4</title>
</head>
<body>
    <h1>Data Customer <small><a href="{{ action('CustomersController@create') }}">Tambah data</a></small></h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $customer->nama }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->telp }}</td>
                    <td>{{ $customer->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
