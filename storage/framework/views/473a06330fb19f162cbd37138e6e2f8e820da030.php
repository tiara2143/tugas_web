<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {}

        .container {}
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('example')); ?>">Pegawai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Hallo</h1>
                <img src="" alt="">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="data:image/jpeg;base64,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" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Nama</li>
                            <li>Kelas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH D:\web_lanjut\resources\views/Pegawai/Eaxample.blade.php ENDPATH**/ ?>