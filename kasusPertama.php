<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body style="height: 100vh; background-color: #E9EFEC">
    <div class="d-flex flex-column justify-content-center align-items-center h-100" >
        <div style="background-color: #FFFFFF" class="d-flex flex-column rounded w-50 p-5">
            <form action="readFile.php" method="post">
                <div class="mb-3">
                    <label for="namaFile" class="form-label mb-0" aria-describedby="fileHelp">Nama File HTML</label>
                    <div id="fileHelp" class="form-text mt-0 mb-2">Tulis tanpa menggunakan '.html' </div>
                    <input type="text" id="namaFile" name="namaFile"  class="form-control" placeholder="text" required> <br/>
                </div>
                <div class="mb-3">
                    <label for="namaTag" class="form-label">Nama Tag asal</label>
                    <input type="text" id="namaTag" name="namaTag"  class="form-control" required> <br/>
                </div>
                <div class="mb-3">
                    <label for="nTagBaru" class="form-label">Nama Tag Baru</label>
                    <input type="text" id="nTagBaru" name="nTagBaru"  class="form-control" required> <br/>
                </div>
                <div class="mb-3">
                    <label for="tipe" class="form-label mb-0">Tipe Keluaran</label>
                    <div id="fileHelp" class="form-text mt-0 mb-2">Tulis 'O' untuk menyimpan perubahan pada file yang sama dan 'N' pada file lainnya </div>
                    <input type="text" id="tipe" name="tipe"  class="form-control" required> <br/>  
                </div>
                <button type="submit" class="btn btn-primary">Change Tag</button> 
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>