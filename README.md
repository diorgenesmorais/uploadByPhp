# Upload multiplo

> Este projeto mostra como fazer upload de multiplos arquivos

##### Diferença de upload simples (um arquivo) para multiplos arquivos
```html
<form method="post" enctype="multipart/form-data">
  <!-- upload simples -->
  <input type="file" name="arquivo" >
  <!-- multiplos arquivos -->
  <input type="file" name="arquivos[]" multiple >
  <input type="submit" value="Enviar">
</form>
```

## **Importante**

> O upload dos arquivos devem ser destinados para um diretório.
> O que é importante salientar é as permissões neste diretório.
>
> Precisamos que o usuário www-data tenha permissão de escrita no diretório e ao mesmo tempo o usuário local possa fazer o que quiser com os arquivos.
>
> _Deve existir outra maneira de fazer isso. - Diorgenes Morais_

##### Configurar diretório (arquivos) para receber upload
```bash
# adicionar "www-data" ao grupo do usuário local
sudo adduser www-data $USER

# o diretório passa a pertencer ao grupo "www-data"
sudo chgrp -R www-data arquivos/

# mudar a permissão
sudo chmod 770 arquivos/
```

###### Authors

* **Diorgenes Morais**
