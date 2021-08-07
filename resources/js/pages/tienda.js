$(function(){
    AOS.init();
});

function openPedido(pedido){
    console.log(pedido);
    $('#modalPedido').modal('show').fadeIn();
}
