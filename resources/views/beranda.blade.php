<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kos-Pedia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @auth
        @if (Auth::user()->role === 'pencari')
            @include('components.navbar')

            <div class="h-24"></div>

            <div class="mx-auto mt-8 p-6">
                <h1 class="text-3xl font-bold mb-4">Selamat datang di <span class="text-blue-600">Kos Pedia</span></h1>
                <p class="text-lg mb-2">Cari kos idaman kini tak perlu susah, Klik saja di sini, semuanya jadi mudah.
                    Temukan
                    tempat nyaman, buat hati senang, bersama kami, hidup jadi riang.</p>
                <p id="kos" class="text-lg mb-2">Selamat mencari kos yang pas, di sini semua jadi lebih bebas!</p>
            </div>
            <div
                class="grid gap-6 mt-8 overflow-hidden text-gray-700 shadow-md rounded-xl bg-clip-border sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @include('datakos.card')
            </div>
        @elseif(Auth::user()->role === 'admin')
            {{-- @extends('layouts.admin')
            @section('content')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2 text-capitalize">Welcome to Admin {{ Auth::user()->name }}</h5>
                        </div>
                        <p class="mt-3"><span class="fw-medium">Dashboard Admin</p>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-success rounded shadow">
                                            <i class="mdi mdi-account-outline mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Data Pengguna</div>
                                        <h5 class="mb-0">{{ $countuser }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-warning rounded shadow">
                                            <i class="mdi mdi-cellphone-link mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Data Kos</div>
                                        <h5 class="mb-0">{{ $count }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="d-flex align-items-center">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-info rounded shadow">
                                            <i class="mdi mdi-account-outline mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="ms-3">
                                        <div class="small mb-1">Data Pemilik</div>
                                        <h5 class="mb-0">{{ $countpemilik }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection --}}
        @endif
    @else
        @include('components.navbar')

        <div class="h-24"></div>

        <div class="mx-auto mt-8 p-6">
            <h1 class="text-3xl font-bold mb-4">Selamat datang di <span class="text-blue-600">Kos Pedia</span></h1>
            <p class="text-lg mb-2">Cari kos idaman kini tak perlu susah, Klik saja di sini, semuanya jadi mudah.
                Temukan tempat nyaman, buat hati senang, bersama kami, hidup jadi riang.</p>
            <p id="kos" class="text-lg mb-2">Selamat mencari kos yang pas, di sini semua jadi lebih bebas!</p>
        </div>
        <div
            class="grid gap-6 mt-8 overflow-hidden text-gray-700 shadow-md rounded-xl bg-clip-border sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @include('datakos.card')
        </div>
    @endauth
</body>

</html>
