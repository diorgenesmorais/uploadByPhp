<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Upload multiple</title>
  </head>
  <body>
    <?php
      if(isset($_FILES['arquivos'])){
        $qtde = count($_FILES['arquivos']['tmp_name']);
        if($qtde > 0){
          for($i = 0; $i < $qtde; $i++){
            $filename = md5(time().rand(0,99)).$_FILES['arquivos']['name'][$i];
            move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], 'arquivos/'.$filename);
          }
        }
      }
    ?>
    <form method="post" enctype="multipart/form-data">
      <label for="arquivos">Selecione imagens</label><br><br>
      <input type="file" id="arquivos" name="arquivos[]" multiple accept=".jpeg, .png, .jpg" ><br><br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>
