$(document).ready(function(){
    $(".tinh").change(function(){
        var id = $(".tinh").val();
        //alert($id);
        $.post("ajax/chung/quan.php", {id: id}, function(data){
            $(".quan").html(data);
        })
    })
})

$(document).ready(function(){
    $(".quan").change(function(){
        var id = $(".quan").val();
        $.post("ajax/chung/phuong.php", {id: id}, function(data){
            $(".phuong").html(data);
        })
    })
})


