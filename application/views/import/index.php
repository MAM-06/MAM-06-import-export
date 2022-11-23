<!DOCTYPE html>
<html lang="in">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Excel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('import') ?>"><i class="fa fa-users"></i>Data
                            Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('import/create') ?>"><i class="fa fa-upload"></i>Upload
                            File</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message');?>
                        <a href="<?= site_url('import/create') ?>" class="btn btn-primary mb-3">Import</a>
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Angkatan</th>
                            </tr>
                            <?php if (count($mahasiswa) > 0) {
                                    foreach ($mahasiswa as $row): ?>
                            <tr>
                                <td><?= $row->nim ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->angkatan ?></td>
                            </tr>
                            <?php endforeach ?>
                            <?php }else{ ?>
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data</td>
                            </tr>
                            <?php } ?>

                        </table>
                    </div>
                    <div class="card-footer">
                        Page
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>