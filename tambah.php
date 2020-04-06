<?php 
    include 'aset/header.php';
?>


<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card bg-white">
                <div class="card-header bg-secondary text-white">
                <h2 class="card-title text-white"><i class="fas fa-edit"></i>Data Siswa</h2>
                </div>
                <div class="card-body bg">
                    <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="NISN">NIS</label>
                            <input type="text" class="form-control" name="NIS" id="NIS" placeholder="Masukkan NISN siswa">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <select name="Jurusan" class="form-control">
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <select name="Kelas" class="form-control">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukkan alamat">
                        </div>
                        <div class="form-group">
                            <label for="Nilai Web">Nilai Matpel Web</label>
                            <input type="number" class="form-control" name="Nilai Web" id="Nilai Web" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="Nilai PBO">Nilai Matpel PBO</label>
                            <input type="number" class="form-control" name="Nilai PBO" id="Nilai PBO" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="Nilai Basdat">Nilai Matpel Basdat</label>
                            <input type="number" class="form-control" name="Nilai Basdat" id="Nilai Basdat" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="Nilai Desain">Nilai Matpel Desain</label>
                            <input type="number" class="form-control" name="Nilai Desain" id="Nilai Desain" placeholder="Masukkan nilai">
                        </div>
                        <div class="form-group">
                            <label for="Nilai Progdas">Nilai Matpel Progdas</label>
                            <input type="nilai_mp" class="form-control" name="Nilai Progdas" id="Nilai Progdas" placeholder="Masukkan nilai">
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'aset/footer.php';
?>