{extends file='parent:_partials/footer.tpl'}

{block name='footer_after'}
    {$smarty.block.parent}
    
    <a href="#" id="back-to-top" title="{l s='Back to top' d='Shop.Theme.Global'}" style="position: fixed; bottom: 20px; right: 20px; z-index: 999;">
        <i class="material-icons">keyboard_arrow_up</i>
    </a>

    <div class="test-technique-footer" style="text-align: center; padding: 20px; background: #f1f1f1;">
        <p>© RABI KADDA - Site réalisé pour le test technique PrestaShop</p>
    </div>
{/block}
