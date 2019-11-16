<div class="container">
    <div class="content mt-5">
        <div class="col-sm-12">
            <a href="<?= site_url('home/tambahPage'); ?>" class="btn btn-success">Tambah</a>
        </div>
        <div class="col-lg-12 mt-3">
            <div class="row">
                <?php foreach($books as $book) { ?>
                <div class="col-lg-3">
                    <h3><?= $book->categoryName; ?></h3>
                    <img class="w-100" src="<?= base_url('assets/'); echo $book->image; ?>" alt="">
                    <h5><strong><?= $book->bookName; ?></strong> Stock: <?= $book->stok; ?></h5>
                    <a href="<?= site_url('home/editPage/'); echo $book->id; ?>" class="btn btn-warning">Edit Data</a>
                    <a href="<?= site_url('home/delete/'); echo $book->id;?>" class="btn btn-danger">Delete</a>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>