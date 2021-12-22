<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Form Ubah Data Supplier</h4>
                        <p class="card-category">
                            Form untuk mengubah data supplier
                        </p>
                    </div>
                    <div class="card-body table-responsive">
                        <form action="<?= site_url('petugas/ubahSupplier'); ?>" method="post">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nama Supplier</label>
                                <input type="hidden" name="supplier_id" value="<?= $detail['supplier_id']; ?>">
                                <input type="text" name="nama_supplier" value="<?= $detail['nama_supplier']; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Nomor Telepon</label>
                                <input type="number" name="no_telp" value="<?= $detail['no_telp']; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="5" required><?= $detail['alamat']; ?></textarea>
                            </div>
                            <a href="<?= site_url('petugas/supplier'); ?>" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
                            <button type="submit" class="btn btn-primary">UBAH DATA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>