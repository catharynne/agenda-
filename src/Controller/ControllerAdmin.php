<?php

namespace PPI2\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Twig\Environment;
use PPI2\Entidades\Produto;
use PPI2\Modelos\ModeloProdutos;
use PPI2\Modelos\UsuarioModelo;
use PPI2\Util\Sessao;

class ControllerAdmin {

    private $response;
    private $contexto;
    private $twig;
    private $sessao;

    public function __construct(Response $response, Request $contexto, Environment $twig, Sessao $sessao) {
        $this->response = $response;
        $this->contexto = $contexto;
        $this->twig = $twig;
        $this->sessao = $sessao;
    }

    public function index(){
        $usuario = $this->sessao->get('usuario');
        //se tiver o usuário cadastrado no banco e a senha estiver correta.
        if($this->sessao->get('usuario')['tipo'] == 'Administrador'){
            //passa o usuário para a sessão.
            return $this->response->setContent($this->twig->render('admin/dashboard.php',['usuario' => $usuario]));
        }else{
            $re = new RedirectResponse('/');
            $re->send();
            return;
        }

    }
    

}
