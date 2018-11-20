<?php
$cod = 1;
$sql = "SELECT * FROM alunos";
 $resultado = mysqli_query($con,$sql) or die(mysqli_error($con));
 $row = mysqli_num_rows($resultado);
 if($row > 0) {
   for ($i=0; $i < $row; $i++) {
     $dados = mysqli_fetch_assoc($resultado);
     $sim_json = $dados['sim_respondidos'];
     $simulados = json_decode($sim_json);
     $cadastro_json = $dados['cadastro'];
     $cadastro = json_decode($cadastro_json);
     $foto = $dados['foto'];
     if(empty($foto)){
       $imagem = 'user.png';
     } else {
       $imagem = $foto;
     }
     for ($j=0; $j < count($simulados); $j++) {
       if($cod == $simulados[$j]->cod_sim){
         $simulado = $simulados[$j];
         $nome = $cadastro->nome;
         $nota = $simulados[$j]->nota;
         $alunos = [];
         $alunos[$i] = ["Nome"=>$nome, "Foto"=>$imagem, "Nota"=>$nota];
       }
     }
     //array_multisort(array_column($alunos, 'Nota'), SORT_DESC, $alunos); //Linha 1 -> torna os 2 indices 0
     var_dump($alunos); //Linha 2 -> Correto
   } //Fim fo Loop for
   echo "<hr>";
   var_dump($alunos); //Linha 3 -> Ultimo elemento
 } else {
   echo "Erro na consulta ao BD para o ranking";
 }
?>
