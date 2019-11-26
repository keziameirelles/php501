<?php

namespace Curso\Loja\Entidades;

/**
 * @Entity @Table(name="produto")
 */
class produto
{
/**
 * @Id @Column(type="integer") @Generatedvalue */
protected $id;
 /** @Column(type="string", length=50) */
 protected $nome;
 /** @Column(type="decimal",precision=10, scale=2) */
 protected $preco;

public function getId()
{
    return $this->id;
}
public function getPreco()
{
    return $this->preco;
}
public function getNome($nome)
{
    return $this->nome = $nome;
}
public function setPreco($preco)
{
    $this->preco = $preco;
}

}
