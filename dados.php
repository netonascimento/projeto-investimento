<?php 
  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $pass = md5($_POST['pass']);


/*
  $inputTipo = $_POST['inputTipo'];
  $inputDescricao = $_POST['inputDescricao'];
  $inputValorAnterior = $_POST['inputValorAnterior'];
  $inputValorAtual = $_POST['inputValorAtual'];
  $inputLogradouro = $_POST['inputLogradouro'];
  $inputNumero = $_POST['inputNumero'];
  $inputComplemento = $_POST['inputComplemento'];
  $inputBairro = $_POST['inputBairro'];
  $inputCidade = $_POST['inputCidade'];
  $InputEstado = $_POST['InputEstado'];
  $inputCEP = $_POST['inputCEP'];
  $inputBanco = $_POST['inputBanco'];
  $inputAgencia = $_POST['inputAgencia'];
  $inputConta = $_POST['inputConta'];
  $inputTipoConta = $_POST['inputTipoConta'];
  $inputCpfCnpj = $_POST['inputCpfCnpj'];
  $inputRenavan = $_POST['inputRenavan'];
  $inputInscricaoMunicipal = $_POST['inputInscricaoMunicipal'];
  $inputAreaTotal = $_POST['inputAreaTotal'];
  $inputDataAquisicao = $_POST['inputDataAquisicao'];
  $inputMatricula = $_POST['inputMatricula'];
  $customFile1 = $_POST['customFile1'];
  $customFile2 = $_POST['customFile2'];
  $customFile3 = $_POST['customFile3'];
  $inputObservacao = $_POST['inputObservacao']; 
  $inputDataVenda = $_POST['inputDataVenda'];

  */

//`imoveis`.`ativos` (`ordem`, `tipo`, `codigo`, `descricao`, `valor_anterior`, `valor_atual`, `Observacao`, `data_venda`, `banco`, `agencia`, `conta`, `cpf_cnpj`, `inscricao_municipal`, `logradouro`, `numero`, `complemento`, `bairro`, `municipio`, `UF`, `cep`, `area_total`, `data_aquisicao`, `matricula`) VALUES ('1', $inputTipo, '13', $inputDescricao, $inputValorAnterior, $inputValorAtual, $inputObservacao, $inputDataVenda, $inputBanco, $inputAgencia, $inputConta, $inputCpfCnpj, $inputInscricaoMunicipal, $inputLogradouro, $inputNumero, $inputComplemento, $inputBairro, $inputCidade, $InputEstado, $inputCEP, $inputAreaTotal, $inputDataAquisicao, $inputMatricula);


  $connect = mysql_connect('localhost','root','Enarcar1');
  $db = mysql_select_db('imoveis');
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = 'root' AND senha = 'Enarcar1'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",root);
          header("Location:index.php");
        }
    }
?>