<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Kedip "Allah" dengan Nomor</title>
  <!-- Memasukkan Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* CSS untuk animasi */
    .blink {
      animation: blink 0.5s alternate;
      display: none;
    }
    @keyframes blink {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <table class="table table-bordered">
      <tbody>
        <!-- Membuat 20 baris -->
        <script>
          for (let i = 1; i <= 20; i++) {
            document.write('<tr>');
            // Membuat 5 kolom
            for (let j = 1; j <= 5; j++) {
              document.write('<td>');
              document.write('<span class="number">' + ((i - 1) * 5 + j) + '</span>.');
              document.write(' <span class="blink">Allah</span>');
              document.write('</td>');
            }
            document.write('</tr>');
          }
        </script>
      </tbody>
    </table>
  </div>

  <!-- Memasukkan Bootstrap dan jQuery JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script>
    // JavaScript untuk mengatur animasi kedipan
    document.addEventListener("DOMContentLoaded", function () {
      const cells = document.querySelectorAll(".blink");
      let cellCounter = 0;
      const totalCells = cells.length;

      function blinkCell() {
        if (cellCounter < totalCells) {
          cells[cellCounter].style.display = "inline";
          cellCounter++;
          setTimeout(blinkCell, 500);
        }
      }

      blinkCell();
    });
  </script>
</body>
</html>
