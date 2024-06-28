<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengguna</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    @include('components.sidebar')
    <div class="p-4 sm:ml-64">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold mb-4">Daftar Pengguna</h1>
                <table class="min-w-full bg-white mt-4">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-center">ID</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Nama</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Usia</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Jenis Kelamin</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Pekerjaan</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Nomor Telepon</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Email</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Tanggal Dibuat</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="border px-4 py-2 text-center">{{ $user->id }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->name }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->usia }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->jenis_kelamin }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->pekerjaan }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->notlp }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->email }}</td>
                                <td class="border px-4 py-2 text-center">{{ $user->created_at }}</td>
                                <td class="border px-4 py-2 text-center">
                                    <a href="{{ route('user.edit', $user->id) }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
