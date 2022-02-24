<a  wire:click.prevent="storeInCart({{ $product->id}})" href="" onclick="refresh()" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
    <i data-feather="shopping-cart" class="me-50"></i>
    <span class="add-to-cart">Add to cart</span>
</a>

<script>
    function refresh(){
        setTimeout(function(){
            location.reload();
        },3000);
    }



</script>
