{extends file='parent:catalog/product.tpl'}

{block name='product_prices'}
    {$smarty.block.parent}
    
    <div class="delivery-info" style="color: green; font-weight: bold; margin-top: 10px;">
        <p>🚚 Livraison gratuite sous 48h</p>
    </div>
{/block}