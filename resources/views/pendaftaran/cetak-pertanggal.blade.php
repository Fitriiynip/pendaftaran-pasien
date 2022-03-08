<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Pendaftaran Pasien</title>
    <style>
        table tr td {
            font-size: 15px;
        }

        table tr .text {
            text-align: right;
            font-size: 15px;
        }

        table tr .text1 {
            text-align: right;
            font-size: 15px;
        }

        table tr .jumlah {
            font-size: 15px;
        }

        table tr .total {
            padding-left: 20px;
            font-size: 15px;
        }

    </style>
</head>

<body>
    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;

    </script>
    <center>
        <table width="710">
            <tr>
                <td><img src="{{ asset('vendor/adminlte/dist/img/logo1.png') }}" width="70" height="70"></td>
                <td>
                    <center>
                        <font size="6"><b>Pendaftaran Pasien</b></font><br>
                        <font size="2">JL. Cibaduyut Komplek, JL. Sauyunan I No.14, Kb. Lega, Kec. Bojongloa Kidul, Kota
                            Bandung, Jawa Barat 40235</font><br>
                        <font size="2"><i>Email: pondokyatim@gmail.com, Telepon: +62 8983529947</i></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table width="710">
            <tr>
                <td class="text1">
                    <script language='JavaScript'>
                        document.write(tanggallengkap);

                    </script>
                </td>
            </tr>
        </table>
        <br>
        <table width="710">
            <tr>
                <td class="text2">
                    <h3>Laporan Pendaftaran Pasien : </h3>
                </td>
            </tr>
        </table>
        <table border="1px" width="710">
            <tr>
                <th>Nomor</th>
                <th>Nama Pasien</th>
                <th>Tanggal daftar</th>
                <th>No Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pemeriksa</th>
                <th>Alamat pasien</th>
                <th>Kamar</th>
                <th>Ruang</th>
                <th>Aksi</th>


            </tr>
            @php $no=1; @endphp
            @foreach ($cetak as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_pasien }}</td>
                <td>{{ $data->tanggal_daftar }}</td>
                <td>{{ $data->telepon }}</td>
                <td>{{ date('d-m-Y', strtotime($data->tanggal)) }}</td>
                <td>Rp. {{ number_format($data->nominal) }}</td>
                <td>{{ $data->keterangan }}</td>
                <td><img src="{{ $data->image() }}" style="width:80px; height:150px;" alt="...">
                </td>
            </tr>
            @endforeach
        </table>
        <table border="1" width="710" height="100">
            <tr>
                <td width="420" class="total"><b>Total Dana : </b></td>
                <td align="center" class="jumlah"><b>Rp. {{ number_format($total) }}</b></td>
            </tr>
        </table>
    </center>
    <script type="text/javascript">
        window.print();

    </script>
</body>

</html>
