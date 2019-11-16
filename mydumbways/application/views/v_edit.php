<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form action="<?= site_url('home/editProses'); ?>" method="POST">
                    <h2>Edit buku</h2>
                    <div class="form-group">
                        <label for="name">Nama Buku</label>
                        <input type="text" class="form-control" name="name" value="<?= $spesific_book->name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok Buku</label>
                        <input type="number" class="form-control" name="stok" value="<?= $spesific_book->stok; ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" value="<?= $spesific_book->stok; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="category" class="col form-control">
                            <option value="1">Sains</option>
                            <option value="2">Romance</option>
                            <option value="3">Historical</option>
                        </select>
                    </div>


                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>