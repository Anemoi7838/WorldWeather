//const data = 'Hello World！'; // 渡したいデータ
const data = "Hello";
/*$.ajaxSetup({
　　headers: {
　　　'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
　　}
　});*/
　$.ajax({
            type:"GET",
            url:"/sample",
            data:{"data":data},
            scriptCharset:"utf-8"
        })
        .then(
            function(param){
                console.log(param);
            },
            function(XMLHttpRequest,textStatus,errorThrown){
                console.log("エラーが発生しました：" + textStatus + ":\n" + errorThrown);
            });

/*　$.ajax({
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
　});*/