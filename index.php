<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display</title>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
    .students {
      font-family: "Trebuchet Ms",Arial,Helvetica,sans-serif;
      border-collapse: collapse;
      width: 100%;
      /* text-align: center; */
    }
    .students td, .students th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    .students tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .students tr:hover {
      background-color: #ddd;
    }
    .students th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align:center;
      background-color: brown;
      color: white;

    }

    </style>
  </head>
  <body>
    <table class="students">
      <tr>
        <th>Position</th>
        <th>Name</th>
        <th>Percentage</th>

      </tr>
      <tr>
        <td>
          <?php include('position.php') ?>

        </td>
        <td>
          <?php include('main.php') ?>

        </td>
        <td>
          <?php include('percent.php') ?>
        </td>
      </tr>
    </table>
    <p>
    <?php include('fails.php') ?></p>
  </body>
</html>
