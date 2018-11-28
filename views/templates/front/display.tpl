{extends file='page.tpl'}

<!-- /Block mymodule -->
{block name='page_content'}
<div id="myfaq_block_home" class="block">
    <form method="post">
        <h4>Posez votre question</h4>
        <input type="text" name="question"/>
        <button type="submit" name="submit">Bouton</button>
    </form>

{/block}
