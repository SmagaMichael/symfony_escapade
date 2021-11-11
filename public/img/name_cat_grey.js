$("#btn-validate-name-grey-cat").click(function () {
    var cat_grey_name = $("#cat-grey-name").val();
    $.ajax({
        url: "../../function/cat_grey_name.php",
        type: "post",
        data: {
            cat_grey_name_exist: true,  
            cat_grey_name: cat_grey_name,
        }
    }).done(function (result) {
        result = JSON.parse(result)
        console.log(cat_grey_name);
        $("body").prepend("<div class=\"alert alert-success\">"+ result['message']+"</div>");
        $(".name-grey-cat-modal").html(cat_grey_name);


    }).fail(function (xhr, error, status) {
        console.log(xhr)
    })


});