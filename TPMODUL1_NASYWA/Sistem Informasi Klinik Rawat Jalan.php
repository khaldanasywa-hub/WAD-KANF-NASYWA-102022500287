
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <title>Katalog Farmasi</title>
</head>
<body>
    <header>
        <div class="square"> 
            <h1>Katalog Farmasi<br>Klinik Rawat Jalan</h1>
        </div>
    </header>

    <div class="search-section">
        <input type="text" id="searchInput" placeholder="Cari obat...">
            <button class="button">Cari</button>

    </div>

    <div class="add-section">
        <a href="Tambah.php">
            <button>+Tambah Obat</button>
        </a>
    </div>

    
    <table>
        <thead> <!-- bagian kepala tabel -->
            <tr> <!-- baris pertama tabel -->
                <th>Nama Obat</th> <!-- th judul kolom -->
                <th>Kategori Obat</th>
                <th>Sediaan</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Pabrikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Paracetamol</td> <!-- td isi kolom -->
                <td>Analgesik</td>
                <td>Tablet</td>
                <td>50</td>
                <td>10000</td>
                <td>PT. Kimia Farma</td>
                <td> 
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>

            <tr>
                <td>Amoxicillin</td>
                <td>Antibiotik</td>
                <td>Tablet</td>
                <td>30</td>
                <td>15000</td>
                <td>PT. Kalbe Farma</td>
                <td> 
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>

            <tr>
                <td>Rhinos</td>
                <td>Antihistamin & Dekongestan</td>
                <td>Kapsul</td>
                <td>25</td>
                <td>20000</td>
                <td>PT. Dexa Medica</td>
                <td> 
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>

            <tr>
                <td>OBH Combi</td>
                <td>Ekspektoran</td>
                <td>Sirup</td>
                <td>20</td>
                <td>12000</td>
                <td>PT. Darya-Varia Laboratoria</td>
                <td> 
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>

            <tr>
                <td>Sumagesic</td>
                <td>Analgesik</td> <!-- Tambahkan ini (sesuaikan kategorinya) -->
                <td>Tablet</td>
                <td>35</td>
                <td>30000</td>
                <td>PT. Triman</td>
                <td>
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>

            <tr>
                <td>Omeprazole</td>
                <td>Proton Pump Inhibitor</td>
                <td>Kapsul</td>
                <td>40</td>
                <td>20000</td>
                <td>PT. Meprofarm</td>
                <td> 
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>

            <tr>
                <td>Troces</td>
                <td>Lozenge</td>
                <td>Tablet</td>
                <td>15</td>
                <td>10000</td>
                <td>PT. Kimia Farm</td>
                <td> 
                    <a href="edit.php?id=1"><button class="edit-button">Edit</button></a>
                    <a href="hapus.php?id=1"><button class="edit-button">Hapus</button></a>
                </td>
            </tr>
            <!-- Isi tabel akan diisi dengan data obat -->
        </tbody>
    </table>

</body>
</html>