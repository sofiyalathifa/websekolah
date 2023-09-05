<body>
    <div class ="container mt-3">
        <div class="row">
            <div class="col-lg-9">
                <?php Flasher::flash(); ?>

                <div class="row mb-3">
                    <div class="col-lg-9">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#formModal">
                            Tambah Data Siswa
                        </button>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-lg-9">
                        <form action="<?= BASE_URL; ?>/siswa/cari" method="post">
                            <div class="input-group mb-3">
                                <input type="text"  class="form-control" placeholder="cari siswa.." name="keyword" id="keyword" autocomplete="off">
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="submit" id="tomnolCari">Cari</button>
                                </div>                 
                            </div>
                        </form>
                    </div>
                </div>

                <h3 class="mt-4">Daftar Siswa</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        ?>
                        <?php foreach ($data['siswa'] as $siswa) : ?>
                        <tr>
                            <th scope="row"><?=$no++?></th>
                            <td><?= $siswa['nama']; ?></td>
                            
                            <td>
                                <a href="<?= BASE_URL; ?>/siswa/hapus/" class="badge badge-danger " onclick="return confirm('yakin?');">Hapus</a>
                                <a href="<?= BASE_URL; ?>/siswa/ubah/" class="badge badge-success  tampilModalUbah" data-toggle="modal" data-target="#formModal">Ubah</a>
                                <a class="badge badge-primary " href="<?= BASE_URL; ?>/siswa/detail/">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
    
             
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>
</body>






