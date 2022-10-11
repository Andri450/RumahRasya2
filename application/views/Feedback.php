<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <title>Feedback | Admin</title>
</head>
<body>
<a href="<?= base_url('Admin') ?>">Kembali</a>
<section class="section">
    <div class="container">
      <table class="table is-narrow" id="tabeluser">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No Whatsapp</th>
          <th>Tanggal</th>
          <th>Pesan</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($feedback as $u) {
          echo "<tr>";
          echo "<td>$u->id</td>";
          echo "<td>$u->nama</td>";
          echo "<td>$u->email</td>";
          echo "<td>$u->no_wa</td>";
          echo "<td>$u->tanggal</td>";
          echo "<td>$u->pesan</td>";
          echo "</tr>";
        }
        ?>
        </tbody>
      </table>
    </div>
  </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>
</html>