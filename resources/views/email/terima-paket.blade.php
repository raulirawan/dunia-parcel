<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Halo {{ $data['nama_user']}}</p>
    <p>Paket anda telah di terima dengan Nomor Resi #{{ $data['no_resi'] }}, Berikut Rincian Paket Anda :</p>
    <p><br />Data Penerima</p>
    <table style="border-collapse: collapse; width: 100%; height: 36px;" border="0">
        <tbody>
            <tr style="height: 18px;">
                <td style="width: 30.0546%; height: 18px;">Nama Penerima</td>
                <td style="width: 2.55006%; height: 18px;">:</td>
                <td style="width: 67.3952%; height: 18px;">{{ $data['nama_penerima'] }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 30.0546%; height: 18px;">Nomor Handphone</td>
                <td style="width: 2.55006%; height: 18px;">:</td>
                <td style="width: 67.3952%; height: 18px;">{{ $data['nomor_hp_penerima'] }}</td>
            </tr>
        </tbody>
    </table>
    <p>Data Pengirim</p>
    <table style="border-collapse: collapse; width: 100%;" border="0">
        <tbody>
            <tr>
                <td style="width: 30.0546%;">Nama Pengirim</td>
                <td style="width: 2.55006%;">:</td>
                <td style="width: 67.3952%;">{{ $data['nama_pengirim'] }}</td>
            </tr>
            <tr>
                <td style="width: 30.0546%;">Nomor Handphone</td>
                <td style="width: 2.55006%;">:</td>
                <td style="width: 67.3952%;">{{ $data['nomor_hp_pengirim']}}</td>
            </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <p>Terima Kasih</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>Admin Dunia Parcel</p>
</body>

</html>
