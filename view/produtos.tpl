<hr>

<!--     exibe mensagem caso nao encontre produtos --->
{if $PRO_TOTAL < 1}
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>
{/if}

<!--  começa lista de produtos  ---->
<section id="produtos" class="row">

    <ul style="list-style: none">

        {*   define uma variavel i valendo 1  *}
        {assign var=i value=1 }

        {foreach from=$PRO item=P}


        {* verifico se i = 1 se for abro uma ROW *}
        {if $i==1}
        <div class="row" id="pularliha">
            {/if}
            <li class="col-md-6">

                <div class="thumbnail">

                        <img src="{$P.pro_img}" alt="">

                        <div class="caption row">

                            <h4 class="text-center"> {$P.pro_nome} </h4>

                        </div>

                    </a>

                </div>

            </li>

            {*  aumento o valor de i+1  *}
            {$i = $i + 1}
            {/foreach}
        </div>

    </ul>

</section>