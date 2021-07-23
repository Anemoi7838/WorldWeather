 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>JQVMap - 世界地図サンプル</title>
    
    <link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
	<script type="text/javascript" src="js/world.js"></script>
	</script>
  </head>
  <body>
      <?PHP
    header('Content-type: application/json; charset=utf-8'); // ヘッダ（データ形式、文字コードなど指定）
    $data = filter_input(INPUT_POST, 'データ'); // 送ったデータを受け取る（GETで送った場合は、INPUT_GET）
    ?>
     <p>{{ $data }}</p>

  </body>
</html>