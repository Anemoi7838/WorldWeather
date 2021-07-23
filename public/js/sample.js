//const data = 'Hello World！'; // 渡したいデータ
var data = region;
/*$.ajaxSetup({
　　headers: {
　　　'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
　　}
　});*/
　$.ajax({
　　　type : "GET",
　　　//なければ不要(data)
　　　data: {
　　　  'data' : data
　　　},
　　　//urlは各々の環境に合わせて 
　　　url : '/sample',
　　　dataType : "json",
　　　//通信に成功した場合
　　　success : function(json) {
　　　　console.log(json);
　　　},
　　　//失敗した場合
　　　error : function(XMLHttpRequest, textStatus, errorThrown) {
　　　　alert("エラーが発生しました：" + textStatus + ":\n" + errorThrown);
　　　}
　});