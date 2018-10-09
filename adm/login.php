<?php
// verifo  se iniciou a ssesão
if(!isset($_SESSION)):
    session_start();
endif;

// setando o meu timezone
date_default_timezone_set('America/Sao_Paulo');

// carrego o auto load
require '../lib/autoload.php';

// chamo o objeto do template
$smarty = new Template();

// passo valores para o meu template 
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

/// verifico se passei o POST  de nova senha 
if(isset($_POST['recovery'])):
    
 
    // obejto USER
    $user = new User();
   // passo alguns valores
    $email = $_POST['txt_email'];
    $senha = Sistema::GerarSenha();
    // verifico se tem este email na tabela 
    if($user->GetUserEmail($email) > 0):
        
        // faz alteração 
        $user->AlterarSenha($senha, $email);  
        
          // apos alterar envia email com a nova senha
         $enviar = new EnviarEmail();
         
         $assunto = 'Nova senha ADM do site '. Sistema::DataAtualBR();
         $destinatarios = array($email,  Config::SITE_EMAIl_ADM);
         $msg = ' Nova senha no ADM do site, nova senha:  ' .$senha;
         
         
         $enviar->Enviar($assunto, $msg, $destinatarios);
         
           echo '<div class="alert alert-success"> Foi enviado um email com a NOVA SENHA  </div>';
         
         
    else:
        
         echo '<div class="alert alert-danger"> Email não encontrado </div>';
    endif;

    
    
    
    
endif;


// verifico se passou o POST LOGIN
if(isset($_POST['txt_logar']) && isset($_POST['txt_email'])):
    
    // passo variavies
    $user  = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];

    // obejto login 
    $login = new Login();
    
    // metodo login do ADM
    if($login->GetLoginADM($user, $senha)):
        
        echo '<div class="alert alert-success"> Login efetuado com sucesso </div>';
        Rotas::Redirecionar(1, 'index.php');
    
     else:
    
          Rotas::Redirecionar(2, 'login.php');  
         
    endif;
    
    
    //var_dump($_SESSION['ADM']);
    
endif;




// chamando o template
$smarty->display('adm_login.tpl');

