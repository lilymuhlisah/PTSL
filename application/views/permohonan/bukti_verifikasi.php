<html>

<head>
    <!-- <link rel="stylesheet" type="text/css" href="stylesheet.css"> -->
    <title>Bukti Verifikasi Berkas Permohonan</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: normal;
            line-height: 1.3;
        }

        h3 {
            text-align: center;
        }

        @page {
            margin: 0.5cm;
        }

        @page :left {
            margin: 2cm;
        }

        @page :right {
            margin: 2cm;
        }

        .content-table {
            border-collapse: collapse;
            /* margin: 15px 0; */
            font-size: 105%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            min-width: 600px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: lightblue;
            color: darkslategrey;
            text-align: center;
            font-weight: bold;
        }

        .content-table,
        .content-table th,
        .content-table td {
            padding: 8px 12px;
            text-align: center;
            border: 1px solid darkslategrey;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid lightblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12">

            <h3 style="margin-bottom: 3%;">BUKTI VERIFIKASI BERKAS PTSL</h3>
            <div>
                <table>
                    <tbody>
                        <tr>
                            <td>Pemohon</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $pemohon['nama_pemohon'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>NIK</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $pemohon['NIK'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>Nomor Induk Bidang (NIB)</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $permohonan['NIB'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>Nomor Berkas</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $permohonan['no_berkas'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>Kluster</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $permohonan['kluster'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>Penggunaan Tanah</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $permohonan['penggunaan_tanah'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>Nomor Hak Milik</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $permohonan['no_hak_milik'] ?></strong>
                            </td>
                        </tr>

                        <tr>
                            <td>Nomor Seri Blanko</td>
                            <td> </td>
                            <td>:</td>
                            <td style="padding-left:5%">
                                <strong><?= $permohonan['no_seri_blanko'] ?></strong>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <br>

                <div class="row">
                    <h4 style="text-align:center; margin-top:15px; margin-bottom:7px !important">Checklist Berkas Permohonan</h4>
                </div>

                <table class="content-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th class="col-sm-10">Berkas</th>
                            <th>Status Verifikasi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td style="text-align: left !important">Kartu Tanda Penduduk (KTP)</td>
                            <td><?= $status_ktp['status_dokumen'] ?></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>2</td>
                            <td style="text-align: left !important">Kartu Keluarga (KK)</td>
                            <td><?= $status_kk['status_dokumen'] ?></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>3</td>
                            <td style="text-align: left !important">Surat Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan (SPPT PBB)</td>
                            <td><?= $status_bphtb['status_dokumen'] ?></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>4</td>
                            <td style="text-align: left !important">Bukti Batas Tanah</td>
                            <td><?= $status_dokbatas['status_dokumen'] ?></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td>5</td>
                            <td style="text-align: left !important">Dokumen Tambahan</td>
                            <td><?= $status_doktambahan['status_dokumen'] ?></td>
                        </tr>
                    </tbody>
                </table>

                <table style="margin-top: 10px">
                    <tbody>
                        <tr>
                            <td>
                                <strong style="color:maroon !important">Catatan (dari verifikator) : </strong>
                            </td>
                        </tr>
                        <tr>
                            <?php if ($permohonan['keterangan'] == null) : ?>
                                <td>-</td>
                            <?php else : ?>
                                <td><?= $permohonan['keterangan']; ?></td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>

            </div>
            <table style="margin-top: 4%; margin-right: 10%; float:right">
                <tbody>
                    <tr>
                        <td>Malang, </td>
                        <td style="padding-left:10px">/</td>
                        <td style="padding-left:15px">/ 20</td>
                    </tr>
                    <tr>
                        <td colspan="3">Verifikator,</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="padding-top: 5%">( <?= $u_login['nama_lengkap']; ?> )</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>