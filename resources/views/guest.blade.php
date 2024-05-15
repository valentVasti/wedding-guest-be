<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'figtree', sans-serif;
        }

        .table-container {
            max-width: 70%;
            /* This will make the table scrollable when needed */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            /* This adds a border to table cells */
            padding: 8px;
            /* This adds padding inside the cells */
            text-align: left;
            /* This aligns text to the left */
        }

        th {
            background-color: #f2f2f2;
            /* This gives a background color to the header cells */
        }
    </style>
</head>

<body class="font-sans antialiased bg-white">
    <h1 class="text-xl mb-5">Daftar Tamu</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Sesi</th>
                    <th>Slug</th>
                    <th>Link</th>
                    <th>Copy Link</th>
                    <th>Generate Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guest as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->sesi }}</td>
                    <td>{{ $data->slug }}</td>
                    <td><a href='{{ $base_url.$data->slug }}' target="_blank">{{ $base_url.$data->slug }}</a></td>
                    <td><button onclick="copyToClipboard('{{ $base_url.$data->slug }}')">Copy</button></td>
                    <td><button onclick="generateMessage('{{ $data->name }}', '{{ $data->sesi }}')">Generate</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>