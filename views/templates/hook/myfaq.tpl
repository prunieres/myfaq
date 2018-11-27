<!-- Block mymodule -->
<div id="myfaq_block_home" class="block">
  <h4>Welcome!</h4>
  <div class="block_content">
    <p>Hello,
       {if isset($my_faq_name) && $my_faq_name}
           {$my_faq_name}
       {else}
           World
       {/if}
       !
    </p>
    <ul>
      <li><a href="{$my_faq_link}" title="Click this link">Posez votre question ici</a></li>
    </ul>
  </div>
</div>
<!-- /Block mymodule -->
