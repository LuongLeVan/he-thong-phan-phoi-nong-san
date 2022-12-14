$(document).ready(function(){
    $(".danhmuc").change(function(){
        var id = $(".danhmuc").val();
        //alert(id);
        $.post("ajax/chung/loainongsan.php", {id: id}, function(data){
            $(".loai").html(data);
        })
    })
})

$(document).ready(function(){
    $(".danhmuc2").change(function(){
        var id = $(".danhmuc2").val();
        //alert(id);
        $.post("ajax/chung/loainongsan.php", {id: id}, function(data){
            $(".loai2").html(data);
        })
    })
})



