<!--CRIADO E CODADO: #SR.MEMBER - PHPHOST-->
<!--DEIXE OS DEVIDO CRÉDITOS-->
<html lang="en">
<head>
  <title>Consultor CPF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<link rel='shortcut icon' href='http://simpleicon.com/wp-content/uploads/magnifier-8.png'>
<br>
   <div class="col-xs-12">

     <center>   <div class="panel panel-default">
            <div class="col-md-12"><div class="panel panel-info"><div class="panel-heading">
                <h2>Consultador Dados Pessoais</h2>
                <div class="options">

                </div>
            </div>
            <div class="panel-body">
                <table class="table mb0">
        <form action="" method="post"> 
	<label><a>Consulta por CNS</a></label>
    <input class="form-control" name="enviarcns">
	<br>
	<label><a>Consulta por CPF</a></label>
    <input class="form-control" name="enviarcpf">
	<br>
	<label><a>Consulta por Nome</a></label>
	<input class="form-control" name="enviarnome">
	<input type="submit" class="btn btn-success"' name="pesquisar" value="Consultar">
        </center>

</form>
</html><tbody><tr class="success">
                    </tbody>
                </table>
            </div>
            </div>
            </div>
<div class="col-md-12"><div class="panel panel-info"><div class="panel-heading"><h2><center> Resultado </center></h2></div>
<!-- FIM -->
<?php
function getStr($string,$start,$end){
    $str = explode($start,$string);
    $str = explode($end,$str[1]);
    return $str[0];
}


$cookies = rand(1000000,1000000); //NAO MECHA
$cnes = ""; //SEU CNES
$logincad = ""; //SEU USUARIO 
$senhacad = ""; // SUA SENHA
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false); // DEIXE ASSIM
curl_setopt($ch, CURLOPT_NOBODY, false); //DEIXE ASSIM
curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/login/actionArmazenarXS.form");//NAO MECHA
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies.".txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Requested-With: XMLHttpRequest")); // NAO MECHA
curl_setopt($ch, CURLOPT_REFERER, "https://cadastro.saude.gov.br/cadsusweb/login/actionArmazenarXS.form");//NAO MECHA
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "cnes=$cnes&usuario=$logincad&senha=$senhacad");//NAO MECHA
$neylog1 = curl_exec($ch);
//echo $neylog1 = curl_exec($ch); //DEIXE ASSIM
curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/j_security_check");// NAO MECHA
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies.".txt");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "j_username=$cnes.$logincad&cnes=$cnes&usuario=$logincad&j_password=$senhacad");// NAO MECHA
$neylog2 = curl_exec($ch);
//echo $neylog2 = curl_exec($ch); //DEICHE ASSIM
 

    if(isset($_POST['enviarcpf']))
    {
     $cpf= $_POST['enviarcpf'];
     $cpf=trim($cpf);

     if($cpf <> '')
     {
     curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/restrito/consultar/pesquisar.form");
     curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies . ".txt");
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
     curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, "usuario=%7B%22idCorporativo%22%3Anull%2C%22idLocal%22%3Anull%2C%22desabilitarDataQuality%22%3Anull%2C%22obsDesabilitarDataQuality%22%3Anull%2C%22numeroProtocoloPrecadastro%22%3Anull%2C%22protocoloPrimeiroAcesso%22%3Anull%2C%22protocolo%22%3Anull%2C%22solicitarAcessoPortal%22%3Afalse%2C%22encontradoReceita%22%3Anull%2C%22cpf%22%3Anull%2C%22numeroCns%22%3A%22%22%2C%22nome%22%3A%22%22%2C%22nomeSocial%22%3A%22%22%2C%22nomeMae%22%3A%22%22%2C%22nomePai%22%3A%22%22%2C%22sexo%22%3Anull%2C%22sexoDescricao%22%3Anull%2C%22racaCor%22%3Anull%2C%22racaCorDescricao%22%3Anull%2C%22dataObito%22%3Anull%2C%22dataOperacaoObito%22%3Anull%2C%22motivoDeclaracaoObito%22%3Anull%2C%22cnesOperador%22%3Anull%2C%22tipoSanguineo%22%3Anull%2C%22etniaIndigena%22%3Anull%2C%22etniaIndigenaDescricao%22%3Anull%2C%22dataNascimento%22%3A%22".$datanascimento."%22%2C%22nacionalidade%22%3Anull%2C%22paisNascimentoCodigo%22%3Anull%2C%22paisNascimento%22%3Anull%2C%22municipioNascimentoCodigo%22%3A%22%22%2C%22municipioNascimento%22%3A%22%22%2C%22dataNaturalizacao%22%3Anull%2C%22portariaNaturalizacao%22%3Anull%2C%22dataEntradaBrasil%22%3Anull%2C%22emailPrincipal%22%3Anull%2C%22emailAlternativo%22%3Anull%2C%22emailPrincipalValidado%22%3Anull%2C%22emailAlternativoValidado%22%3Anull%2C%22telefone%22%3A%5B%5D%2C%22nomade%22%3Afalse%2C%22enderecoCodigo%22%3Anull%2C%22paisResidenciaCodigo%22%3Anull%2C%22paisResidenciaDescricao%22%3Anull%2C%22enderecoMunicipio%22%3Anull%2C%22enderecoMunicipioCodigo%22%3Anull%2C%22enderecoTipoLogradouro%22%3Anull%2C%22enderecoTipoLogradouroCodigo%22%3Anull%2C%22enderecoLogradouro%22%3Anull%2C%22enderecoNumero%22%3Anull%2C%22enderecoComplemento%22%3Anull%2C%22enderecoBairroCodigo%22%3Anull%2C%22enderecoBairro%22%3Anull%2C%22enderecoCep%22%3Anull%2C%22emailPrincipalCodigo%22%3Anull%2C%22emailAlternativoCodigo%22%3Anull%2C%22dnv%22%3Anull%2C%22numeroInscricaoSocialCodigo%22%3Anull%2C%22numeroInscricaoSocial%22%3Anull%2C%22rgCodigo%22%3Anull%2C%22rgNumero%22%3Anull%2C%22rgOrgaoEmissor%22%3Anull%2C%22rgOrgaoEmissorDescricao%22%3Anull%2C%22rgUf%22%3Anull%2C%22rgDataEmissao%22%3Anull%2C%22tituloEleitorCodigo%22%3Anull%2C%22tituloEleitorNumero%22%3Anull%2C%22tituloEleitorZona%22%3Anull%2C%22tituloEleitorSecao%22%3Anull%2C%22certidao%22%3A%5B%5D%2C%22ctpsCodigo%22%3Anull%2C%22ctpsNumero%22%3Anull%2C%22ctpsSerie%22%3Anull%2C%22ctpsDataEmissao%22%3Anull%2C%22cnhNumero%22%3Anull%2C%22cnhDataEmissao%22%3Anull%2C%22cnhUf%22%3Anull%2C%22passaporteCodigo%22%3Anull%2C%22passaporteNumero%22%3Anull%2C%22passaportePaisCodigo%22%3Anull%2C%22passaportePais%22%3Anull%2C%22passaporteDataValidade%22%3Anull%2C%22passaporteDataEmissao%22%3Anull%2C%22fotografia%22%3A%5B%5D%2C%22situacao%22%3Anull%2C%22dataAlteracao%22%3Anull%2C%22spanSituacao%22%3Anull%2C%22motivoCancelamento%22%3Anull%2C%22spanVip%22%3Anull%2C%22vipDescricao%22%3Anull%2C%22spanProtecao%22%3Anull%2C%22protecaoDescricao%22%3Anull%2C%22motivoNaoHigienizado%22%3Anull%2C%22vivo%22%3Anull%2C%22cartoesAgregados%22%3A%5B%5D%2C%22tipoDocumento%22%3A%22%22%2C%22numeroDocumento%22%3A%22".$cpf."%22%7D&byPassHigienizacao=false&tpPesquisa=identica");
     $saida = curl_exec($ch);
       //  $saida = getStr($saida,'(','] }');
       //  $saida = str_replace(")"," ",$saida);
        // $saida = str_replace(',','<br>',$saida);

         $cns= getStr($saida,'"numeroCns": "','"');

         curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/restrito/consultar/visualizar.form");
         curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies . ".txt");
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
         curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
         curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS, "cns=$cns");
         $saida2 = curl_exec($ch);


         $nome= getStr($saida2,'"nome": "','"');
         $nomeMae= getStr($saida2,'"nomeMae": "','"');
         $nomePai = getStr($saida2,'"nomePai": "','"');
         $sexo = getStr($saida2,'"sexo": "','"');
		 $raca = getStr($saida2,'"racaCorDescricao": "','"');
         $datanascimendo = getStr($saida2,'"dataNascimento": "','"');
         $obito = getStr($saida2,'"dataObito": "','"');
         $paisNascimento = getStr($saida2,'"paisNascimento": "','"');
         $municipioNascimento = getStr($saida2,'"municipioNascimento": "','"');
         $sexo = getStr($saida2,'"sexo": "','"');
         $cpf = getStr($saida2,'"cpf": "','"');
		 $sangue = getStr($saida2,'"tipoSanguineo": "','"');
		 $cns = getStr($saida2,'"numeroCns": "','"');
		 $apelido = getStr($saida2,'"apelido": "','"');
         $rg = getStr($saida2,'"rgNumero": "','"');		 
         $org = getStr($saida2,'"rgOrgaoEmissorDescricao": "','"');
         $rguf = getStr($saida2,'"rgUf": "','"');
         $rgdata = getStr($saida2,'"rgDataEmissao": "','"');
        ////endereço
         $pais = getStr($saida2,'"paisResidenciaDescricao": "','"');
		 $idade = getStr($saida2,'"idade": "','"');
		 $complemento = getStr($saida2,'"complemento": "','"');
         $estado = getStr($saida2,'"enderecoMunicipio": "','"');
         $numerocasa = getStr($saida2,'"enderecoNumero": "','"');
         $endereco = getStr($saida2,'"enderecoLogradouro": "','"');
         $bairro = getStr($saida2,'"enderecoBairro": "','"');
         $cep = getStr($saida2,'"enderecoCep": "','"');
         $ddd = getStr($saida2,'"ddd":',',');
		 $creditos = getStr($saida2,'"Creditos":',',');
		 $creditos1 = getStr($saida2,'"Creditos1":',',');
         $telefone = getStr($saida2,'"numero": "','"');
         
         //DADOS DA VITIMA
         echo "➜ <b> Nome:</b> $nome<br>";
         echo "➜ <b>Nome da mãe:</b> $nomeMae<br>";
         echo "➜ <b> Nome do pai:</b> $nomePai<br>";
         echo "➜ <b> Sexo:</b> $sexo<br>";
         echo "➜ <b> Data de Nascimento:</b> $datanascimendo<br>";
         echo "➜ <b> Data de Óbito:</b> $dataObito<br>";
         echo "➜ <b> País:</b> $paisNascimento<br>";
         echo "➜ <b> Município de Nascimento:</b> $municipioNascimento<br>";
         echo "➜ <b> Cpf:</b> $cpf<br>";
		 echo "➜ <b>TIPO SANGÜINEO:</b> $sangue<br>";
		 echo "➜ <b>CNS:</b> $cns<br>";
		 echo "➜ <b>Raça:</b> $raca<br>";
		 echo "➜ <b>RG:</b> $rg | $org | $rguf | $rgdata<br>";
		 //ENDEREÇO
         echo "➜<b> País:</b> $pais<br>";
         echo "➜<b> Estado:</b> $estado <br>";
         echo "➜<b> Número da Casa:</b> $numerocasa <br>";
         echo "➜<b> Endereço:</b> $endereco<br>";
         echo "➜<b> Bairro:</b> $bairro <br>";
         echo "➜<b> Cep:</b> $cep<br>";
         echo "➜<b> Telefone:</b> $ddd $telefone <br><br></div>";
         echo "➜<b> CREDITOS: #Sr.Member<b>$creditos</br>";
    }
}
     if(isset($_POST['enviarnome']))
     {
     $nome= $_POST['enviarnome'];
	 $nome=trim($nome);

     if($nome <> ''){
     curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/restrito/consultar/pesquisar.form");
     curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies . ".txt");
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
     curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, "usuario=%7B%22idCorporativo%22%3Anull%2C%22idLocal%22%3Anull%2C%22desabilitarDataQuality%22%3Anull%2C%22obsDesabilitarDataQuality%22%3Anull%2C%22numeroProtocoloPrecadastro%22%3Anull%2C%22protocoloPrimeiroAcesso%22%3Anull%2C%22protocolo%22%3Anull%2C%22solicitarAcessoPortal%22%3Afalse%2C%22encontradoReceita%22%3Anull%2C%22cpf%22%3Anull%2C%22numeroCns%22%3A%22%22%2C%22nome%22%3A%22".$nome."%22%2C%22nomeSocial%22%3A%22%22%2C%22nomeMae%22%3A%22%22%2C%22nomePai%22%3A%22%22%2C%22sexo%22%3Anull%2C%22sexoDescricao%22%3Anull%2C%22racaCor%22%3Anull%2C%22racaCorDescricao%22%3Anull%2C%22dataObito%22%3Anull%2C%22dataOperacaoObito%22%3Anull%2C%22motivoDeclaracaoObito%22%3Anull%2C%22cnesOperador%22%3Anull%2C%22tipoSanguineo%22%3Anull%2C%22etniaIndigena%22%3Anull%2C%22etniaIndigenaDescricao%22%3Anull%2C%22dataNascimento%22%3A%22%22%2C%22nacionalidade%22%3Anull%2C%22paisNascimentoCodigo%22%3Anull%2C%22paisNascimento%22%3Anull%2C%22municipioNascimentoCodigo%22%3A%22%22%2C%22municipioNascimento%22%3A%22%22%2C%22dataNaturalizacao%22%3Anull%2C%22portariaNaturalizacao%22%3Anull%2C%22dataEntradaBrasil%22%3Anull%2C%22emailPrincipal%22%3Anull%2C%22emailAlternativo%22%3Anull%2C%22emailPrincipalValidado%22%3Anull%2C%22emailAlternativoValidado%22%3Anull%2C%22telefone%22%3A%5B%5D%2C%22nomade%22%3Afalse%2C%22enderecoCodigo%22%3Anull%2C%22paisResidenciaCodigo%22%3Anull%2C%22paisResidenciaDescricao%22%3Anull%2C%22enderecoMunicipio%22%3Anull%2C%22enderecoMunicipioCodigo%22%3Anull%2C%22enderecoTipoLogradouro%22%3Anull%2C%22enderecoTipoLogradouroCodigo%22%3Anull%2C%22enderecoLogradouro%22%3Anull%2C%22enderecoNumero%22%3Anull%2C%22enderecoComplemento%22%3Anull%2C%22enderecoBairroCodigo%22%3Anull%2C%22enderecoBairro%22%3Anull%2C%22enderecoCep%22%3Anull%2C%22emailPrincipalCodigo%22%3Anull%2C%22emailAlternativoCodigo%22%3Anull%2C%22dnv%22%3Anull%2C%22numeroInscricaoSocialCodigo%22%3Anull%2C%22numeroInscricaoSocial%22%3Anull%2C%22rgCodigo%22%3Anull%2C%22rgNumero%22%3Anull%2C%22rgOrgaoEmissor%22%3Anull%2C%22rgOrgaoEmissorDescricao%22%3Anull%2C%22rgUf%22%3Anull%2C%22rgDataEmissao%22%3Anull%2C%22tituloEleitorCodigo%22%3Anull%2C%22tituloEleitorNumero%22%3Anull%2C%22tituloEleitorZona%22%3Anull%2C%22tituloEleitorSecao%22%3Anull%2C%22certidao%22%3A%5B%5D%2C%22ctpsCodigo%22%3Anull%2C%22ctpsNumero%22%3Anull%2C%22ctpsSerie%22%3Anull%2C%22ctpsDataEmissao%22%3Anull%2C%22cnhNumero%22%3Anull%2C%22cnhDataEmissao%22%3Anull%2C%22cnhUf%22%3Anull%2C%22passaporteCodigo%22%3Anull%2C%22passaporteNumero%22%3Anull%2C%22passaportePaisCodigo%22%3Anull%2C%22passaportePais%22%3Anull%2C%22passaporteDataValidade%22%3Anull%2C%22passaporteDataEmissao%22%3Anull%2C%22fotografia%22%3A%5B%5D%2C%22situacao%22%3Anull%2C%22dataAlteracao%22%3Anull%2C%22spanSituacao%22%3Anull%2C%22motivoCancelamento%22%3Anull%2C%22spanVip%22%3Anull%2C%22vipDescricao%22%3Anull%2C%22spanProtecao%22%3Anull%2C%22protecaoDescricao%22%3Anull%2C%22motivoNaoHigienizado%22%3Anull%2C%22vivo%22%3Anull%2C%22cartoesAgregados%22%3A%5B%5D%2C%22tipoDocumento%22%3A%22%22%2C%22numeroDocumento%22%3A%22%22%7D&byPassHigienizacao=false&tpPesquisa=identica");
     $saida = curl_exec($ch);
       //  $saida = getStr($saida,'(','] }');
       //  $saida = str_replace(")"," ",$saida);
        // $saida = str_replace(',','<br>',$saida);

         $cns= getStr($saida,'"numeroCns": "','"');

         curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/restrito/consultar/visualizar.form");
         curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies . ".txt");
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
         curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
         curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS, "cns=$cns");
         $saida2 = curl_exec($ch);


         $nome= getStr($saida2,'"nome": "','"');
         $nomeMae= getStr($saida2,'"nomeMae": "','"');
         $nomePai = getStr($saida2,'"nomePai": "','"');
         $sexo = getStr($saida2,'"sexo": "','"');
		 $raca = getStr($saida2,'"racaCorDescricao": "','"');
         $datanascimendo = getStr($saida2,'"dataNascimento": "','"');
         $obito = getStr($saida2,'"dataObito": "','"');
         $paisNascimento = getStr($saida2,'"paisNascimento": "','"');
         $municipioNascimento = getStr($saida2,'"municipioNascimento": "','"');
         $sexo = getStr($saida2,'"sexo": "','"');
         $cpf = getStr($saida2,'"cpf": "','"');
		 $sangue = getStr($saida2,'"tipoSanguineo": "','"');
		 $cns = getStr($saida2,'"numeroCns": "','"');
		 $apelido = getStr($saida2,'"apelido": "','"');
         $rg = getStr($saida2,'"rgNumero": "','"');		 
         $org = getStr($saida2,'"rgOrgaoEmissorDescricao": "','"');
         $rguf = getStr($saida2,'"rgUf": "','"');
         $rgdata = getStr($saida2,'"rgDataEmissao": "','"');
         $pais = getStr($saida2,'"paisResidenciaDescricao": "','"');
		 $idade = getStr($saida2,'"idade": "','"');
		 $complemento = getStr($saida2,'"complemento": "','"');
         $estado = getStr($saida2,'"enderecoMunicipio": "','"');
         $numerocasa = getStr($saida2,'"enderecoNumero": "','"');
         $endereco = getStr($saida2,'"enderecoLogradouro": "','"');
         $bairro = getStr($saida2,'"enderecoBairro": "','"');
         $cep = getStr($saida2,'"enderecoCep": "','"');
         $ddd = getStr($saida2,'"ddd":',',');
		 $creditos = getStr($saida2,'"Creditos":',',');
		 $creditos1 = getStr($saida2,'"Creditos1":',',');
         $telefone = getStr($saida2,'"numero": "','"');

         //DADOS DA VITIMA
         echo "➜ <b> Nome:</b> $nome<br>";
         echo "➜ <b>Nome da mãe:</b> $nomeMae<br>";
         echo "➜ <b> Nome do pai:</b> $nomePai<br>";
         echo "➜ <b> Sexo:</b> $sexo<br>";
         echo "➜ <b> Data de Nascimento:</b> $datanascimendo<br>";
         echo "➜ <b> Data de Óbito:</b> $dataObito<br>";
         echo "➜ <b> País:</b> $paisNascimento<br>";
         echo "➜ <b> Município de Nascimento:</b> $municipioNascimento<br>";
         echo "➜ <b> Cpf:</b> $cpf<br>";
		 echo "➜ <b>TIPO SANGÜINEO:</b> $sangue<br>";
		 echo "➜ <b>CNS:</b> $cns<br>";
		 echo "➜ <b>Raça:</b> $raca<br>";
		 echo "➜ <b>RG:</b> $rg | $org | $rguf | $rgdata<br>";
		 //ENDEREÇO
         echo "➜<b> País:</b> $pais<br>";
         echo "➜<b> Estado:</b> $estado <br>";
         echo "➜<b> Número da Casa:</b> $numerocasa <br>";
         echo "➜<b> Endereço:</b> $endereco<br>";
         echo "➜<b> Bairro:</b> $bairro <br>";
         echo "➜<b> Cep:</b> $cep<br>";
         echo "➜<b> Telefone:</b> $ddd $telefone <br><br></div>";
         echo "➜<b> CREDITOS: #Sr.Member<b>$creditos</br>";
    }
}

     if(isset($_POST['enviarcns']))
     {
     $cns= $_POST['enviarcns'];
	 $cns=trim($cns);

     if($cns <> '')
     {
     curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/restrito/consultar/pesquisar.form");
     curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies . ".txt");
     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
     curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, "usuario=%7B%22idCorporativo%22%3Anull%2C%22idLocal%22%3Anull%2C%22desabilitarDataQuality%22%3Anull%2C%22obsDesabilitarDataQuality%22%3Anull%2C%22numeroProtocoloPrecadastro%22%3Anull%2C%22protocoloPrimeiroAcesso%22%3Anull%2C%22protocolo%22%3Anull%2C%22solicitarAcessoPortal%22%3Afalse%2C%22encontradoReceita%22%3Anull%2C%22cpf%22%3Anull%2C%22numeroCns%22%3A%22".$cns."%22%2C%22nome%22%3A%22%22%2C%22nomeSocial%22%3A%22%22%2C%22nomeMae%22%3A%22%22%2C%22nomePai%22%3A%22%22%2C%22sexo%22%3Anull%2C%22sexoDescricao%22%3Anull%2C%22racaCor%22%3Anull%2C%22racaCorDescricao%22%3Anull%2C%22dataObito%22%3Anull%2C%22dataOperacaoObito%22%3Anull%2C%22motivoDeclaracaoObito%22%3Anull%2C%22cnesOperador%22%3Anull%2C%22tipoSanguineo%22%3Anull%2C%22etniaIndigena%22%3Anull%2C%22etniaIndigenaDescricao%22%3Anull%2C%22dataNascimento%22%3A%22%22%2C%22nacionalidade%22%3Anull%2C%22paisNascimentoCodigo%22%3Anull%2C%22paisNascimento%22%3Anull%2C%22municipioNascimentoCodigo%22%3A%22%22%2C%22municipioNascimento%22%3A%22%22%2C%22dataNaturalizacao%22%3Anull%2C%22portariaNaturalizacao%22%3Anull%2C%22dataEntradaBrasil%22%3Anull%2C%22emailPrincipal%22%3Anull%2C%22emailAlternativo%22%3Anull%2C%22emailPrincipalValidado%22%3Anull%2C%22emailAlternativoValidado%22%3Anull%2C%22telefone%22%3A%5B%5D%2C%22nomade%22%3Afalse%2C%22enderecoCodigo%22%3Anull%2C%22paisResidenciaCodigo%22%3Anull%2C%22paisResidenciaDescricao%22%3Anull%2C%22enderecoMunicipio%22%3Anull%2C%22enderecoMunicipioCodigo%22%3Anull%2C%22enderecoTipoLogradouro%22%3Anull%2C%22enderecoTipoLogradouroCodigo%22%3Anull%2C%22enderecoLogradouro%22%3Anull%2C%22enderecoNumero%22%3Anull%2C%22enderecoComplemento%22%3Anull%2C%22enderecoBairroCodigo%22%3Anull%2C%22enderecoBairro%22%3Anull%2C%22enderecoCep%22%3Anull%2C%22emailPrincipalCodigo%22%3Anull%2C%22emailAlternativoCodigo%22%3Anull%2C%22dnv%22%3Anull%2C%22numeroInscricaoSocialCodigo%22%3Anull%2C%22numeroInscricaoSocial%22%3Anull%2C%22rgCodigo%22%3Anull%2C%22rgNumero%22%3Anull%2C%22rgOrgaoEmissor%22%3Anull%2C%22rgOrgaoEmissorDescricao%22%3Anull%2C%22rgUf%22%3Anull%2C%22rgDataEmissao%22%3Anull%2C%22tituloEleitorCodigo%22%3Anull%2C%22tituloEleitorNumero%22%3Anull%2C%22tituloEleitorZona%22%3Anull%2C%22tituloEleitorSecao%22%3Anull%2C%22certidao%22%3A%5B%5D%2C%22ctpsCodigo%22%3Anull%2C%22ctpsNumero%22%3Anull%2C%22ctpsSerie%22%3Anull%2C%22ctpsDataEmissao%22%3Anull%2C%22cnhNumero%22%3Anull%2C%22cnhDataEmissao%22%3Anull%2C%22cnhUf%22%3Anull%2C%22passaporteCodigo%22%3Anull%2C%22passaporteNumero%22%3Anull%2C%22passaportePaisCodigo%22%3Anull%2C%22passaportePais%22%3Anull%2C%22passaporteDataValidade%22%3Anull%2C%22passaporteDataEmissao%22%3Anull%2C%22fotografia%22%3A%5B%5D%2C%22situacao%22%3Anull%2C%22dataAlteracao%22%3Anull%2C%22spanSituacao%22%3Anull%2C%22motivoCancelamento%22%3Anull%2C%22spanVip%22%3Anull%2C%22vipDescricao%22%3Anull%2C%22spanProtecao%22%3Anull%2C%22protecaoDescricao%22%3Anull%2C%22motivoNaoHigienizado%22%3Anull%2C%22vivo%22%3Anull%2C%22cartoesAgregados%22%3A%5B%5D%2C%22tipoDocumento%22%3A%22%22%2C%22numeroDocumento%22%3A%22%22%7D&byPassHigienizacao=false&tpPesquisa=identica");
     $saida = curl_exec($ch);
       //  $saida = getStr($saida,'(','] }');
       //  $saida = str_replace(")"," ",$saida);
        // $saida = str_replace(',','<br>',$saida);

         $cns= getStr($saida,'"numeroCns": "','"');

         curl_setopt($ch, CURLOPT_URL, "https://cadastro.saude.gov.br/cadsusweb/restrito/consultar/visualizar.form");
         curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies . ".txt");
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
         curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
         curl_setopt($ch, CURLOPT_POST, 1);
         curl_setopt($ch, CURLOPT_POSTFIELDS, "cns=$cns");
         $saida2 = curl_exec($ch);


         $nome= getStr($saida2,'"nome": "','"');
         $nomeMae= getStr($saida2,'"nomeMae": "','"');
         $nomePai = getStr($saida2,'"nomePai": "','"');
         $sexo = getStr($saida2,'"sexo": "','"');
		 $raca = getStr($saida2,'"racaCorDescricao": "','"');
         $datanascimendo = getStr($saida2,'"dataNascimento": "','"');
         $obito = getStr($saida2,'"dataObito": "','"');
         $paisNascimento = getStr($saida2,'"paisNascimento": "','"');
         $municipioNascimento = getStr($saida2,'"municipioNascimento": "','"');
         $sexo = getStr($saida2,'"sexo": "','"');
         $cpf = getStr($saida2,'"cpf": "','"');
		 $sangue = getStr($saida2,'"tipoSanguineo": "','"');
		 $cns = getStr($saida2,'"numeroCns": "','"');
		 $apelido = getStr($saida2,'"apelido": "','"');
         $rg = getStr($saida2,'"rgNumero": "','"');		 
         $org = getStr($saida2,'"rgOrgaoEmissorDescricao": "','"');
         $rguf = getStr($saida2,'"rgUf": "','"');
         $rgdata = getStr($saida2,'"rgDataEmissao": "','"');
        ////endereço
         $pais = getStr($saida2,'"paisResidenciaDescricao": "','"');
		 $idade = getStr($saida2,'"idade": "','"');
		 $complemento = getStr($saida2,'"complemento": "','"');
         $estado = getStr($saida2,'"enderecoMunicipio": "','"');
         $numerocasa = getStr($saida2,'"enderecoNumero": "','"');
         $endereco = getStr($saida2,'"enderecoLogradouro": "','"');
         $bairro = getStr($saida2,'"enderecoBairro": "','"');
         $cep = getStr($saida2,'"enderecoCep": "','"');
         $ddd = getStr($saida2,'"ddd":',',');
		 $creditos = getStr($saida2,'"Creditos":',',');
		 $creditos1 = getStr($saida2,'"Creditos1":',',');
         $telefone = getStr($saida2,'"numero": "','"');
		 
		 //DADOS DA VITIMA
         echo "➜ <b> Nome:</b> $nome<br>";
         echo "➜ <b>Nome da mãe:</b> $nomeMae<br>";
         echo "➜ <b> Nome do pai:</b> $nomePai<br>";
         echo "➜ <b> Sexo:</b> $sexo<br>";
         echo "➜ <b> Data de Nascimento:</b> $datanascimendo<br>";
         echo "➜ <b> Data de Óbito:</b> $dataObito<br>";
         echo "➜ <b> País:</b> $paisNascimento<br>";
         echo "➜ <b> Município de Nascimento:</b> $municipioNascimento<br>";
         echo "➜ <b> Cpf:</b> $cpf<br>";
		 echo "➜ <b>TIPO SANGÜINEO:</b> $sangue<br>";
		 echo "➜ <b>CNS:</b> $cns<br>";
		 echo "➜ <b>Raça:</b> $raca<br>";
		 echo "➜ <b>RG:</b> $rg | $org | $rguf | $rgdata<br>";
		 //ENDEREÇO
         echo "➜<b> País:</b> $pais<br>";
         echo "➜<b> Estado:</b> $estado <br>";
         echo "➜<b> Número da Casa:</b> $numerocasa <br>";
         echo "➜<b> Endereço:</b> $endereco<br>";
         echo "➜<b> Bairro:</b> $bairro <br>";
         echo "➜<b> Cep:</b> $cep<br>";
         echo "➜<b> Telefone:</b> $ddd $telefone <br><br></div>";
         echo "➜<b> CREDITOS: #Sr.Member<b>$creditos</br>";
      }   	 
    }
 ?>
<!--CRIADO E CODADO: #SR.MEMBER - PHPHOST-->
<!--DEIXE OS DEVIDO CRÉDITOS-->