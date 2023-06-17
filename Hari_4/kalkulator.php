<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Kalkulator</h1>
    <form action="" method="GET">
      <input type="number" name="a" placeholder="Bilangan a" />

      <select name="operator">
        <option selected disabled>Pilih Operator</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>

      <input type="number" name="b" placeholder="Bilangan b" />

      <div style="margin-top: 1rem">
        <button type="button" onclick="location.href = '?clear'">Clear</button>
        <button type="submit">Hitung</button>
      </div>
    </form>
    <?php
    if (!empty($_GET)):
        $a = (double) @$_GET['a'];
        $b = (double) @$_GET['b'];
        $operator = @$_GET['operator'];
        
        switch ($operator) {
            case '+':
                $hasil = $a + $b;
                break;
            case '-':
                $hasil = $a - $b;
                break;
            case '*':
                $hasil = $a * $b;
                break;
            case '/':
                $hasil = $a / $b;
                break;
        }
        ?>
      <p>Hasil: <?php echo $hasil; ?></p>
    <?php endif; ?>
  </body>
</html>
