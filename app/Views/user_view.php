<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

   <script>
      $(function() {
         $('#save').click(function() {
            $('#myForm').submit()
            $('#tambahdata').modal('hide')
         })
      })
   </script>

   <title>User</title>
</head>

<body>

   <div class="container mt-1">
      <h1>Selamat Datang Di Halaman User, <?= session()->get('user_nama'); ?>.</h1>
      <a class="btn btn-dark" href="/user/tambahdata" role="button">Menambahkan Data</a>
      <table class="table mt-3">
         <thead class="thead-dark">
            <tr>
               <th scope="col">user_id</th>
               <th scope="col">user_nama</th>
               <th scope="col">user_email</th>
               <th scope="col">Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($user as $row) : ?>
               <tr>
                  <td><?= $row['user_id']; ?></td>
                  <td><?= $row['user_nama']; ?></td>
                  <td><?= $row['user_email']; ?></td>
                  <td>
                     <a class="btn btn-dark" href="/user/edit/<?= $row['user_id']; ?>" role="button">Edit</a>
                     <a class="btn btn-dark text-white" onclick="hapusData(<?= $row['user_id']; ?>)" role="button">Delete</a>
                  </td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>

      <a class="btn btn-dark" href="<?= base_url('login/logout'); ?>" role="button">Logout -> Kembali Ke Login Form</a>
   </div>

   <script>
      function hapusData(id) {
         message = confirm('Apakah Anda Yakin Untuk Menghapus Data ?')

         if (message) {
            window.location.href = ("<?= base_url('user/delete'); ?>") + "/" + id
         } else return false
      }
   </script>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>