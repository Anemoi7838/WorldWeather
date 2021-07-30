<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <!----<meta name="csrf-token" content="{{ csrf_token() }}">--->
    <title>JQVMap - 世界地図サンプル</title>
        <meta http-equiv="X=UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1">
    <link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>--->
    <!---<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>--->
    <!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!---<script src="https://code.jquery.com/jquery.js"></script>--->
    <script src="js/jquery.vmap.js"></script>
    <script src="js/jquery.vmap.world.js"></script>
    <script src="js/jquery.vmap.sampledata.js"></script>    
    
	<script type="text/javascript" src="js/world.js"></script>
	</script>
  </head>
  <body>
  <!---<script src="js/sample.js"></script>--->
  <h1>お洒落な世界地図を表示するjQueryプラグイン「JQVMap（jQuery Vector Maps）」サンプル</h1>
  <p>左上にある「+・-」ボタンで拡大縮小。地図の上でドラッグさせて位置を移動できます。また国の上にマウスを持って行くと吹き出しで国名が表示されます。
  </p>
    <div id="vmap" style="width: 600px; height: 400px;"></div>
  @if(isset($weather))
  <p>{{ $weather }}</p>
  @endif
  </body>
</html>