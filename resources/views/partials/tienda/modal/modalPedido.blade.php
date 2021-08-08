<div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasPedido" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Ver pedido</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <input id="pedidoId" type="hidden"/>

    <div id="pedido" class="offcanvas-body">
        {{-- Spinner --}}
        <div id="spinner">
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Cargando...</span>
            </div>
        </div>

    </div>
</div>
