<style>
    /* Add your custom CSS here */
    .tableBku {
        width: 100%;
        margin-bottom: 1rem;
    }

    .tableBku td,
    .tableBku th {
        padding: 0.7rem;
        font-size: 0.87rem;
        border-top: 1px solid #e3e6f0;
    }

    .tableBku th {
        background-color: #E84545;
        color: #fff;
        font-weight: 700;
    }

    .tableBku td {
        background-color: rgba(232, 69, 69, 0.05);
    }

    .tableBku thead th {
        vertical-align: middle;
        border-bottom: 2px solid #e3e6f0;
        text-align: center;
    }

    .tableBku tbody+tbody {
        border-top: 2px solid #e3e6f0;
    }

    .table-bordered {
        border: 1px solid #e3e6f0;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #e3e6f0;
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 2px;
    }

    .label {
        width: 100%;
        text-align: left;
    }

    .form-control {
        display: inline-block;
        width: 67%;
    }

    .kolomP {
        min-width: 5rem;
    }

    .kolomS {
        min-width: 5rem;
    }

    .kolomPS {
        min-width: 5rem;
    }

    .kolomSS {
        min-width: 1rem;
    }

    .table-responsive {
        overflow-x: auto;
        /* Ensure horizontal scrolling is enabled */
    }

    .Logo {
        width: 3rem;
    }

    .text-normalsiku-100 {
        color: #E84545;
        font-weight: 600;
    }

    .tableBku td:nth-child(2),
    .tableBku td:nth-child(3) {
        text-align: left;
    }

    .dataTables_wrapper .dataTables_paginate {
        display: flex;
        justify-content: center;
        margin: auto auto;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        font-size: 16px;
        box-shadow: none;
    }

    .pagination li.active a {
        background: #e84545;
        color: #fff;
        border: none;
    }

    .pagination li.active a.current {
        background: #e84545;
        color: #fff;
        border: none;
    }

    /* Customize the search bar */
    .dataTables_filter {
        text-align: center;
        /* Pusatkan search bar */
        margin-bottom: 1rem;
        /* Tambahkan margin bawah untuk tampilan yang lebih baik */
    }

    .dataTables_filter label {
        display: inline-block;
        /* Agar label dapat disesuaikan dengan lebar input */
        font-weight: bold;
        color: #333;
        width: auto;
        /* Atur lebar label agar tidak terlalu lebar */
        margin-right: 5px;
        /* Tambahkan margin agar terdapat jarak antara label dan input */
    }

    .dataTables_filter input {
        width: 60%;
        border-radius: 4px;
        padding: 5px 10px;
        border: 1px solid #ccc;
        /* Tambahkan border agar terlihat */
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        /* Efek transisi untuk hover */
    }

    .dataTables_filter input:focus {
        border-color: #e84545;
        /* Warna border saat input difokuskan */
        outline: 0;
        /* Hapus outline bawaan untuk tampilan yang lebih bersih */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        /* Efek shadow saat input difokuskan */
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #e84545;
        color: white;
        border: none;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #e84545;
        color: white;
        border: none;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        background: #e84545 !important;
        color: white !important;
        border: none !important;
    }
</style>

<h3 style="text-align: center;margin-bottom:1rem;">
    PELAKSANA LAYANAN<br>
    DISDUKCAPIL TRENGGALEK
</h3>
<div class="card-body">
    <div class="table-responsive">
        <table class="tableBku table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class="kolomSS">NO</th>
                    <th class="kolomPS">NAMA</th>
                    <th class="kolomPS">JABATAN KEDINASAN</th>
                    <th style="min-width: 4.4rem">JABATAN PELAYANAN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SUPRAPTI, S.Si, M.Si</td>
                    <td>Kepala Dinas</td>
                    <td>Kepala Dinas Pejabat Pencatatan Sipil</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>NUR ZOHAINIS R,S.STP</td>
                    <td>Kabid Pelayanan Pendaftaran Penduduk</td>
                    <td>Validasi Pelayanan Dafduk</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>DEDI SUHERMANTO, S.AB</td>
                    <td>Kasi Identitas Penduduk</td>
                    <td>Validasi Pelayanan Dafduk</td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>SETIO AJI SANTOSO, SE</td>
                    <td>Kasi Pindah Datang dan Pendataan Penduduk</td>
                    <td>Validasi surat pindah</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>PUTUT SUKRISNO, SE</td>
                    <td>Kabid Pelayanan Pencatatan Sipil</td>
                    <td>Validasi Pelayanan Capil</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>SANTI LINUDYAWATI, SE</td>
                    <td>Kasi Kelahiran dan Kematian</td>
                    <td>Validasi Pelayanan Capil</td>

                </tr>
                <tr>
                    <td>7</td>
                    <td>IWIN SETYANI, SE</td>
                    <td>Kasi P3AP</td>
                    <td>Validasi Pelayanan Capil</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>ADI KRISWINARNO</td>
                    <td>Pengolah Data</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>BIGKLORIS MEILINDA</td>
                    <td>Pengolah Data</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>TEGUH SANTOSA</td>
                    <td>Pengolah Data</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>SAMI</td>
                    <td>Pengolah Data</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>NANDA NUGRAHENI AGUSTIN A.Md</td>
                    <td>Pengolah Data</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>URSULLAWATI, SE</td>
                    <td>Pengolah Data</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>KASRI</td>
                    <td>Pengolah Data</td>
                    <td>Pengadiministrasi Keuangan</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>AKAR PRIYONO</td>
                    <td>Pengolah Data</td>
                    <td>Pengambilan</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>DEDI RIA PRADANA</td>
                    <td>TPK</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>SETYO WIDODO</td>
                    <td>TPK</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>NITA LESTARI</td>
                    <td>TPK</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>DWI YUNI PUJIASTUTI PUTRI</td>
                    <td>TPK</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>FRENDI SAPTO AJI</td>
                    <td>TPK</td>
                    <td>Verifikator</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>HEPPY KRISTIN PERDANA</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>ALDY PRATAMA</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>GIGIH YOGA PRATAMA</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>NADIA DITHORA</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>SONIE ARBIANTO</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>SATRIA BAYU PRADHANA</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>MUHAMMAD ULIL ALBAB</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>RIRIS NOVITASARI</td>
                    <td>TPK</td>
                    <td>Operator</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
