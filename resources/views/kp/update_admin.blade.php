@extends('boostrap/dasar')
@section('isi_template')
<head>
    <title>Halaman Update KP - Admin</title>
</head>
<body>
    <div>
        <h1>Ini Halaman Update KP (Khusus Admin)</h1>
    </div>
    <div>
        <h2>Kalem kalo ngedit gan...</h2>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="pb-3">
            <a href='/kp' class="btn btn-primary">kembali</a>
        </div>
        <div class="d-flex justify-content-between pb-3">
            <a href="/kp/update_admin/create" class="btn btn-primary">+++</a>
            {{-- <a href="/kp/update_admin/bin" class="btn btn-info">Recycle Bin</a> --}}
        </div>    
        <form action="/kp/update_admin" method="get">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label for="" class="form-label">Nama Mahasiswa</label>
                    <input name="name" type="text" class="form-control" placeholder="Nama" value="{{isset($_GET['name']) ? $_GET['name'] : ''}}">  
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">NIM Mahasiswa</label>
                    <input name="nim" type="text" class="form-control" placeholder="NIM" value="{{isset($_GET['nim']) ? $_GET['nim'] : ''}}">  
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Tahun</label>
                    <input name="tahun" type="number" class="form-control" placeholder="Tahun" value="{{isset($_GET['tahun']) ? $_GET['tahun'] : ''}}">  
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Judul KP</label>
                    <input name="judul" type="text" class="form-control" placeholder="Judul" value="{{isset($_GET['judul']) ? $_GET['judul'] : ''}}">  
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Nama Perusahaan</label>
                    <input name="perusahaan" type="text" class="form-control" placeholder="Perusahaan" value="{{isset($_GET['perusahaan']) ? $_GET['perusahaan'] : ''}}">  
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Lokasi Perusahaan</label>
                    <input name="lokasi_perusahaan" type="text" class="form-control" placeholder="Lokasi Perusahaan" value="{{isset($_GET['lokasi_perusahaan']) ? $_GET['lokasi_perusahaan'] : ''}}">  
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Jenis Bidang</label>
                    <select name="nama_bidang" class="form-select">
                        <option value="">-</option>
                        <option value="RPL">RPL</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Jaringan">Jaringan</option>
                        <option value="Embedded">Embedded</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="" class="form-label">Dosen Pembimbing</label>
                    <select name="nama_dosen" class="form-select">
                        <option value="">-</option>
                        <option value="Dania Eridani S.T., M.Eng">Dania Eridani S.T., M.Eng</option>
                        <option value="Dr. Adian Fatchur Rochim, S.T., M.T. SMIEEE">Dr. Adian Fatchur Rochim, S.T., M.T. SMIEEE</option>
                        <option value="Eko Didik Widianto S.T., M.T.">Eko Didik Widianto S.T., M.T.</option>
                        <option value="Rinta Kridalukmana, M.Kom., MT., PhD">Rinta Kridalukmana, M.Kom., MT., PhD</option>
                        <option value="Dr. Ir. R. Rizal Isnanto S.T., M.M., M.T., IPM">Dr. Ir. R. Rizal Isnanto S.T., M.M., M.T., IPM</option>
                        <option value="Kurniawan Teguh Martono S.T., M.T.">Kurniawan Teguh Martono S.T., M.T.</option>
                        <option value="Risma Septiana S.T., M.Eng.">Risma Septiana S.T., M.Eng.</option>
                        <option value="Ike Pertiwi Windasari S.T., M.T.">Ike Pertiwi Windasari S.T., M.T.</option>
                        <option value="Adnan Fauzi S.T., M.Kom.">Adnan Fauzi S.T., M.Kom.</option>
                        <option value="Dr. Oky Dwi Nurhayati S.T., M.T.">Dr. Oky Dwi Nurhayati S.T., M.T.</option>
                        <option value="Agung Budi Prasetijo S.T., M.I.T., Ph.D.">Agung Budi Prasetijo S.T., M.I.T., Ph.D.</option>
                        <option value="Patricia Evericho Mountaines, S.T., M.Cs.">Patricia Evericho Mountaines, S.T., M.Cs.</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary mt-4">Search</button>
                </div>
            </div>
        </form>
        <div class="pb-3">
            <a href='/kp/update_admin' class="btn btn-danger btn-sm">Reset</a>
        </div>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Bidang</th>
                    <th>Tahun</th>
                    <th>Judul</th>
                    <th>Perusahaan</th>
                    <th>Pembimbing KP</th>
                    <th>File KP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joins as $join)
                    <tr>
                        <td>{{ $join->name }}</td>
                        <td>{{ $join->nim }}</td>
                        <td>{{ $join->nama_bidang }}</td>
                        <td>{{ $join->tahun }}</td>
                        <td>{{ $join->judul }}</td>
                        <td>{{ $join->perusahaan }}</td>
                        <td>{{ $join->nama_dosen }}</td>
                        <td>
                            @if ($join->file)
                                <a class="btn btn-success btn-sm" href="{{ asset('storage/pdf/kp/'. $join->file)}}">Download</a>
                            @endif
                        </td>
                        <td>
                            <a href='{{ url('/kp/update_admin/edit/'.$join->id_kp) }}' class="btn btn-warning btn-sm">Edit</a>
                            {{-- <form onsubmit="return confirm('Yakin ingin menghapus sementara data ini?')" class="d-inline" method="POST" action="{{ route('kp.softdelete', $join->id) }}">
                                @csrf
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">S.Del</button>
                            </form> --}}
                            <form onsubmit="return confirm('Yakin ingin menghapus permanen data KP ini?')" class="d-inline" action="{{ route('kp.delete', $join->id_kp) }}" method="post">
                                @csrf
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $joins->withQueryString()->links() }}
    </div>
</body>
@endsection
