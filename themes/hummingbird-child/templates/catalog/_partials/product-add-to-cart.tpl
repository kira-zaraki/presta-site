{extends file='parent:catalog/_partials/product-add-to-cart.tpl'}

{block name='product_quantity'}
    {$smarty.block.parent}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.querySelector('.add-to-cart');
            if (btn) {
                btn.innerHTML = '<i class="material-icons shopping-cart">shopping_cart</i> ACHETER MAINTENANT - RABI';
            }
        });
    </script>
{/block}
