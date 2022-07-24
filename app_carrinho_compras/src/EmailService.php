<?php
namespace App;
class EmailService
{
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    public function __construct($de = "", $para = '', $assunto = "", $conteudo = '')
    {
        $this->de = ($de) ? $de : "contato@seusite.com.br";
        $this->para = ($para) ? $para : "";
        $this->assunto =  ($assunto) ? $assunto : "";
        $this->conteudo =  ($conteudo) ? $conteudo : "";
    }
    public function enviarEmail()
    {
        return "enviadno e-mail..."
    }
}