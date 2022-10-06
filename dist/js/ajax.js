$(document).ready(function(){
    $(".tinh").change(function(){
        var id = $(".tinh").val();
        $.post("../../View/quan.php", {id: id}, function(data){
            $(".quan").html(data);
        })
    })
})

$(document).ready(function(){
    $(".quan").change(function(){
        var id = $(".quan").val();
        $.post("../../View/phuong.php", {id: id}, function(data){
            $(".phuong").html(data);
        })
    })
})


