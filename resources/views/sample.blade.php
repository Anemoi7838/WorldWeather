<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>JQVMap - 世界地図サンプル</title>
    
    <link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/sample.js"></script>
  </head>
  <body>
     @if(isset($weather))
    <p>{{ $weather }}</p>
    @endif

  </body>
</html>