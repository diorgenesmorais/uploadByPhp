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

###### Authors

* **Diorgenes Morais**
