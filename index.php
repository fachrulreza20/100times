
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
        <?php
          $cellCounter = 1;
          $totalCells = 100;
          for ($i = 1; $i <= 20; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= 5; $j++) {
              echo '<td>';
              echo ' <span id="' . "number-$i-$j" . '" class="number">0</span> ';
              echo ' <span id="' . "cell-$i-$j" . '" class="blink">Allah</span> ';
              echo '</td>';
              $cellCounter++;
            }
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Memasukkan Bootstrap dan jQuery JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <script>
    // JavaScript untuk mengatur animasi kedipan dan nomor
    $(document).ready(function () {
      let cellCounter = 1;
      let totalCells = 100;
      
      function blinkCell() {
        const cellId = `cell-${Math.ceil(cellCounter / 5)}-${cellCounter % 5 === 0 ? 5 : cellCounter % 5}`;
        const cell = document.getElementById(cellId);
        const numberId = `number-${Math.ceil(cellCounter / 5)}-${cellCounter % 5 === 0 ? 5 : cellCounter % 5}`;
        const number = document.getElementById(numberId);
        cell.style.display = "inline";
        number.innerText = cellCounter;
        cellCounter++;
        
        if (cellCounter <= totalCells) {
          setTimeout(blinkCell, 800);
        }
      }
      
      blinkCell();
    });
  </script>
</body>
</html>
```

Dalam kode di atas, nomor 1 hingga 100 akan ditampilkan di sebelah masing-masing teks "Allah". Semoga ini memenuhi kebutuhan Anda.