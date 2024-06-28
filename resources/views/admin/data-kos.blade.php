@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="overflow-x-auto">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th class="text-truncate">Nama</th>
                            <th class="text-truncate">Pemilik</th>
                            <th class="text-truncate">Lokasi</th>
                            <th class="text-truncate">Harga</th>
                            <th class="text-truncate">Jumlah</th>
                            <th class="text-truncate">Tipe Kos</th>
                            <th class="text-truncate">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datakos as $datakos)
                            <tr>
                                <td>
                                    <h6 class="mb-0 text-truncate text-capitalize">{{ $datakos->pemilikkos->nama }}</h6>
                                </td>
                                <td class="text-truncate">{{ $datakos->nama }}</td>
                                <td class="text-truncate">{{ $datakos->lokasi }}</td>
                                <td class="text-truncate">{{ $datakos->harga }}</td>
                                <td class="text-truncate">{{ $datakos->jumlah_kamar }}</td>
                                <td class="text-truncate">{{ $datakos->notlp }}</td>
                                <td class="text-truncate">
                                    <img src="{{ asset('photos/kos/' . $datakos->foto) }}" alt="Foto Kos"
                                        class="w-24 h-auto" width="100">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
