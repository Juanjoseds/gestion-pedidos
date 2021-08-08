$(function (){
    offcanvasFix();
    offCanvasEvents();
});

// Añade los atributos necesarios para el offcanvas en el SVG del icono
function offcanvasFix() {
    let button = $('.iconoVerPedido').children('circle, path');
    button.attr('data-bs-toggle', 'offcanvas')
    button.attr('data-bs-target', '#offcanvasPedido')
    button.attr('aria-controls', 'offcanvasRight')
}

function offCanvasEvents(){
    $('.iconoVerPedido').on('click', function (){
        const id = $(this).data('pedido_id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: '/pedido/'+id,
            dataType: 'json',
            success: function (response) {
                $('#pedido').fadeOut(300, function (){
                    $(this).html(response.view).fadeIn();
                });
            },
            error: function (error) {
                console.log(error);
            }
        });

    });

    $('#offcanvasPedido').on('hidden.bs.offcanvas', function (){
        $('#pedido').html(`
            <div id="spinner">
                <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Cargando...</span>
                </div>
            </div>
        `);
    });
}

