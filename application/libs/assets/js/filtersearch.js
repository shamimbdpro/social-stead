$("input[checkbox]").change(function(){
               $.ajax({
            url: route,
            dataType: 'json',
            success: function(data){
                $.each(data, function(index, element) {
                    $("tbody").empty();
                    $("tbody").append("<tr><td>"+
                    "Laptop "+element.product_category_name+""+
                    "</td></tr>");
                });
            }
        }); 