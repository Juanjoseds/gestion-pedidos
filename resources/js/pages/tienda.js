function openPedido(pedido){
    console.log(pedido);
    $('#modalPedido').modal('show').fadeIn();
}

function removePedido(id){
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Al borrar el pedido no podrá recuperarse",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Borrar pedido',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'delete',
            url: '/pedido/delete/'+id,
            success: function(data) {
                Swal.fire(
                    '¡Borrado!',
                    'El pedido se ha borrado satisfactoriamente',
                    'success'
                ).then(() => {
                    location.reload();
                })
            },
            error: function(xhr, status, error) {
                let err = JSON.parse(xhr.responseText);
                console.log(err);
                Swal.fire({
                    icon: 'error',
                    title: err.title,
                    text: err.text,
                })
            }
        });
    })
}
