<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <h1 class="text-center">DATA TIM</h1>
      <div class="card">
          <div class="card-body">
              <table class="table">
                  <thead>
                    <th>no</th>
                      <th>nim</th>
                      <th>nama</th>
                      <th>alamat</th>
                      <th>jurusan</th>
                  </thead>
                  <tbody>
                  <!-- @foreach($data as $d) -->
                  <button type="button" class="btn btn-outline-primary">Tambah</button>
  <tr>
                     <td>1</td>
                      <td>204855076</td>
                     <td>m.zaini ilham</td>
                    <td>sakra barat</td>
                    <td>teknik informatika</td>
                      <td>
                      <button type="button" class="btn btn-outline-warning">edit</button>
                      <button type="button" class="btn btn-outline-danger">hapus</button>
                      </td>
                      </tr>
                   
                  </tbody>

              </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>