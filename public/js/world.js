jQuery(document).ready(function() {
    jQuery('#vmap').vectorMap(
    {
    map: 'world_en',
    backgroundColor: '#a5bfdd',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    enableZoom: true,
    hoverColor: '#c9dfaf',
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: null,
    showTooltip: true,
    onRegionClick: function(element, code, region)
    {
        var message = 'You clicked "'
            + region
            + '" which has the code: '
            + code.toUpperCase();
        //alert(message);
        ajax(region);
        
    }
    });
    });
    function ajax(data){
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
                console.log(XMLHttpRequest);
            })
            
    }
function bjax(data){
    jQuery.ajaxSetup({
　　    headers: {
　　　      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
　　    }
　      });
　  jQuery.ajax({
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
}