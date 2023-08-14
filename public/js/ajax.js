$(function(){
    $('form[name="create"]').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    $('#msg').removeClass('d-none').html(response.message);
                    window.location.href = response.route_next;
                }
                else{
                    $('#msg').removeClass('d-none').html(response.message);
                }
            }
        })
    });

    $('form[name="edit"]').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'put',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    $('#msg').removeClass('d-none').html(response.message);
                    window.location.href = response.route_next;
                }
                else{
                    $('#msg').removeClass('d-none').html(response.message);
                }
            }
        })
    })
    $('form[name="destroy"]').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: 'delete',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response){
                if(response.success){
                    $('#msg').removeClass('d-none').html(response.message);
                    window.location.href = response.route_next;
                }
                else{
                    $('#msg').removeClass('d-none').html(response.message);
                }
            }
        })
    })
})
