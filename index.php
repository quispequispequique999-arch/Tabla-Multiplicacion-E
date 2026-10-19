<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Multiplicar</title>
  
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #311042 100%);
      font-family: Arial, sans-serif;
      color: #f8fafc;
      min-height: 100vh;
      padding: 40px 15px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 35px;
      color: #38bdf8;
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 25px;
      max-width: 1250px;
      width: 100%;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px;
      width: 100%;
    }

    .table-card {
      background: rgba(15, 23, 42, 0.85);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 16px;
      padding: 18px 14px;
      width: 130px;
      text-align: center;
      font-size: 1rem;
      line-height: 1.6;
      font-weight: bold;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.5);
    }

    .table-card span.num {
      color: #38bdf8;
    }

    .table-card span.res {
      color: #34d399;
    }
  </style>
</head>
<body>

  <h1>Tabla de Multiplicar Enr</h1>

  <div class="container">
    
    <div class="row">
      <?php
      for ($tabla = 1; $tabla <= 8; $tabla++) {
          echo '<div class="table-card">';
          for ($i = 1; $i <= 10; $i++) {
              $resultado = $tabla * $i;
              echo "<span class='num'>{$tabla}</span> x {$i} = <span class='res'>{$resultado}</span><br>";
          }
          echo '</div>';
      }
      ?>
    </div>

    <div class="row">
      <?php
      for ($tabla = 9; $tabla <= 10; $tabla++) {
          echo '<div class="table-card">';
          for ($i = 1; $i <= 10; $i++) {
              $resultado = $tabla * $i;
              echo "<span class='num'>{$tabla}</span> x {$i} = <span class='res'>{$resultado}</span><br>";
          }
          echo '</div>';
      }
      ?>
    </div>
  </div>

</body>
</html>