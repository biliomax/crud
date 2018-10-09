<?php
// objeto do template smarty
$smarty =  new Template();

// verifico se existe um post do email 
if(isset($_POST['cli_email'])):
  
   
    // classe de clientes
    $cliente = new Clientes();
    // metodo que valida o email
    $cliente->setCli_email($_POST['cli_email']);   
   // verifico se existe o email 
    if($cliente->GetClienteEmail($cliente->getCli_email()) > 0):
     // o email foi encontrado         
        
     // faz a gravação da nova senha
        $novasenha = Sistema::GerarSenha();
        
        $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());
        
     // envia o email para o cliente 
        $email = new EnviarEmail();
        $destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIl_ADM);
        $assunto = 'Nova senha ' . Config::SITE_NOME;
        
        $msg ="Olá cliente, foi solicitada uma nova senha para acesso ao site: " . Config::SITE_NOME;
        $msg .= " <br> Nova senha = " . $novasenha;
        
        $email->Enviar($assunto, $msg, $destinatarios);
        
        // mostra mensagem na tela que foi enviada a senha 
        echo '<h3>Olá cliente, foi enviada uma nova senha para acesso ao site em seu email de cadastro</h3>';
        Rotas::Redirecionar(3, Rotas::pag_ClienteLogin());
        
        else:
    // email não encontrado 
       echo 'Email não encontrado '; 
        
    endif;

// caso não exista o post mostro o template     
else:

  // chamo o template 
$smarty->display('clientes_recovery.tpl');  
    
endif;




