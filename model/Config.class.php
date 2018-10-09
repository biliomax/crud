<?php
/**
 * Created by PhpStorm.
 * Autor: Max Bilio
 * Date: 05/10/2018
 * Time: 17:59
 */

class Config {
    
    /*** INFORMAÇÕES DE BANCO DE DADOS ============= */
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA= "",
          BD_BANCO= "miniloja2018",
          BD_PREFIX="as_",
          BD_LIMITE_POR_PAG = 8;
        
    /*** INFORMAÇÕES DO SITE ======================= */

    /*** url do site*/
    const SITE_URL   = "http://localhost";
    /*** pasta padrao do site */
    const SITE_PASTA = "crud";
    /** * nome do site  */
    const SITE_NOME  = "CRUD em PHP - Max Moura";
    /**  * email do administrado do site   */
    const SITE_EMAIl_ADM = "biliorx@gmail.com";
    
    /*** DADOS DE ENDERÇO FISICO DA LOJA ***/
    const SITE_ENDERECO = '';
    const SITE_FONTE    = '';
    const SITE_CEP      = '08280320';

    /**
     * DADOS DO SERVIDOR DE EMAIL ==   daqui  pra baixo nao foi passado nos videos ainda 
     */
    const EMAIL_HOST  = "smtp.gmail.com"; // smtp.seusite.com.br
    const EMAIL_USER  = "biliorx@gmail.com";
    const EMAIL_NOME  = "Contato CRUD em PHP";
    const EMAIL_SENHA = "minha senha";
    const EMAIL_PORTA   = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE= "tls";
    const EMAIL_COPIA= "teste@teste.com";
    
 /**
  *  DADOS DO PAGSEGURO 
  */
    const PS_EMAIL  = "meuemail@teste.com"; // email pagseguro
    const PS_TOKEN  = "0DFD654F368810BBB"; // token produção
    const PS_TOKEN_SBX = "0187D7A3BA7F";  // token do sandbox
    const PS_AMBIENTE = "sandbox"; // production   /  sandbox

}
