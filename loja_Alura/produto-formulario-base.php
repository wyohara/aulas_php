<tr>
  <td>Nome: </td>
  <td><input class="form-control" type="text" name="nome" value="<?=$produto["nome"]?>"/></td>
</tr>
<tr>
  <td>Preco: </td>
  <td><input class="form-control" type="number" name="preco" value="<?=$produto["preco"]?>"/></td>
</tr>
<tr>
  <td>Descrição:</td>
  <td><textarea class="form-control" name="descricao"><?=$produto["descricao"]?></textarea>
</tr>
<tr>
  <td/>
  <td><input type="checkbox" name="usado" value="true" <?=$usado?>/> Usado</td>
</tr>
<tr>
  <td>Categoria:</td>
  <td>
    <select name="categoria_id" class="form-control">
      <?php foreach ($categorias as $categoria):
        $categoriaUsada = $produto["categoria_id"] == $categoria["id"];
        $selecao = $categoriaUsada ?"selected='selected'":"";
        ?>
        <option value="<?=$categoria["id"]?>" <?=$selecao?>>
          <?=$categoria["nome"]?>
        </option>
      <?php endforeach?></td>
    </select>
</tr>
