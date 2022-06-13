<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 style="font-size : 30px; text-align:center">Permohonan Pengajuan Dana <br> Universitas Kristen Duta Wacana <br> Fakultas Teknologi Informasi<h3>
                    </div>
                    <div>
                        {{-- <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Kembali</a> --}}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p>Kepada Yth. <br>
                    Pimpinan <br>
                    UP: WR2<br>
                </p>

                <!--<table class="table">
                    <tr>
                        <th>Tanggal Pengajuan</th>
                        <th>:</th>
                        <td>
                            {{ $pengajuan->tanggal_pengajuan }}
                        </td>
                    </tr>
                    <tr>
                        <th>Prodi</th>
                        <th>:</th>
                        <td>
                            {{ $pengajuan->prodi }}
                        </td>
                    </tr>
                    <tr>
                        <th>Pengaju</th>
                        <th>:</th>
                        <td>
                            {{ $pengajuan->user->nama }}
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>:</th>
                        <td>
                            <div class="badge badge-{{ $pengajuan->status == 'selesai' ? 'success' : 'danger' }} text-uppercase">{{ $pengajuan->status }}</div>
                        </td>
                    </tr>
                </table>
                -->

                <div class="card">
                    <div class="card-header">
                        Item Pengajuan
                    </div>
                    <div class="card-body">
                        <table style="width: 100%" border="1">
                            @foreach ($items as $item)
                            <tr>
                                <th>No Akun</th>
                                <th>Nama Akun</th>
                                <th>Nama Kegiatan</th>
                                <th>Jumlah Pengajuan</th>
                                <th>Realisasi</th>
                            </tr>
                            <tr>
                                <th>{{ $item->coa->noakun }}</th>
                                <th>{{ $item->coa->nama_akun }}</th>
                                <th>{{ $item->nama_kegiatan }}</th>
                                <th>Rp.{{ $item->jumlah_pengajuan }}</th>
                                <th>Rp.{{ $item->realisasi }}</th>
                            </tr>
                            @endforeach
                        </table>
                        <br>
                        <table style="width: 100%" border="0">                        
                            <tr>
                                <th>Disetujui Oleh, </th>
                                <th></th>
                                <th></th>
                                <th style="align:right">Pemohon WD 2FTI</th>
                                <th></th>
                            </tr>
                        </table>

                        <br><br><br><br>
                        <table style="width: 100%" border="0">                        
                            <tr>
                                <th>Nama PPA FTI</th>
                                <th></th>
                                <th></th>
                                <th style="align:right">Nama WD 2 FTI</th>
                                <th></th>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>