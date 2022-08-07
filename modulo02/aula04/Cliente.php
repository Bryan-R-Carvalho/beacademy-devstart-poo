<?php

declare(strict_types=1);

class Cliente extends Usuario 
{
  private string $dataCadastro;
  public function __construct(
    string $nome,
    string $email,
    string $senha,
    string $cpf,
    string $dataCadastro
   ){
       parent::__construct($nome,$email,$senha,$cpf);
       $this->dataCadastro = $dataCadastro;
   }

  public function getDataCadastro(): string
  {
    return $this->dataCadastro;
  }

  public function setDataCadastro(string $dataCadastro): void
   {
  $this->dataCadastro = $dataCadastro;
   }
}