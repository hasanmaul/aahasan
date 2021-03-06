<!DOCTYPE html>
<html>
<head>
<title>Pengeluaran</title>
<meta charset='utf-8'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
body{font-size:14px; margin:0; padding:0; font-family:'Helvetica'}
.titpdf{font-size:16px; text-align:center; margin-bottom:30px}
table{width:100%; border-collapse:collapse}
tr{background:#fff}
th{background:#5F9EA0; color:#000; font-weight:400;}
td,th{padding:12px 6px; border:1px solid #222; text-align:center}
td{color:#000}
.status{background:#0073B7; color:#fff; padding:5px 0; width:100px; text-align:center; margin:auto}
</style>
</head>
<body>
    <h2 style="text-align:center">Accounting Assistent</h2>
    <h5 style="text-align:center;font-weight:1000px;">Pengeluaran</h5>
    <br>
<table>
    <tr>
    <b>
    <th>No.</th>
    <th>Username</th>
    <th>Nama Nasabah</th>
    <th>Jenis Kelamin</th>
    <th>Tanggal Pengeluaran</th>
    <th>No Rekening</th>
    <th>Jenis Rekening</th>
    <th>Jumlah Pengeluaran</th>
    </b>
    </tr>
    @foreach($pdf as $pdf)
    <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $pdf->username }}</td>
    <td>{{ $pdf->nama_nasabah }}</td>
    <td>{{ $pdf->jenis_kelamin }}</td>
    <td>{{ $pdf->tanggal_pengeluaran }}</td>
    <td>{{ $pdf->no_rek }}</td>
    <td>{{ $pdf->jenis_rek }}</td>
    <td>{{ "Rp.".number_format($pdf->jml_setoran,0,',','.').",-" }}</td>
    </tr>
    @endforeach

    <tr>
    <td colspan="7"></td>
    @foreach($jumlah as $jumlah)
    <td>{{ "Rp.".number_format($jumlah->jml_setoran,0,',','.').",-" }}</td>
    @endforeach
    </tr>
</table>
</div>
</body>
</html>