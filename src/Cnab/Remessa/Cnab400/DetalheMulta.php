<?php

namespace Cnab\Remessa\Cnab400;

class DetalheMulta extends \Cnab\Format\Linha
{
    public function __construct(\Cnab\Remessa\IArquivo $arquivo)
    {
        $codigo_banco = $arquivo->codigo_banco;
        $yamlLoad = new \Cnab\Format\YamlLoad($codigo_banco);
        $yamlLoad->load($this, 'cnab400', 'remessa/detalhe_multa');
    }
}
