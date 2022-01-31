
<form method="<?= $config["config"]["method"]??"POST" ?>" action="<?= $config["config"]["action"]??"" ?>">

    <?php foreach ($config["inputs"] as $name=>$input):?>

    <input name="<?=$name?>"
           id="<?=$input["id"]?>"
           type="<?=$input["type"]?>"
           class="<?=$input["class"]?>"
           placeholder="<?=$input["placeholder"]?>"
        <?= (!empty($input["required"]))?'required="required"':'' ?>
    >
    <br>
    <?php endforeach;?>

    <textarea name="<?= $config["textarea"]["name"] ?>" 
              placeholder="<?= $config["textarea"]["placeholder"] ?>"
              rows="<?= $config["textarea"]["rows"] ?>"
              cols="<?= $config["textarea"]["cols"] ?>"
              id="<?= $config["textarea"]["id"] ?>"
              class="<?= $config["textarea"]["class"] ?>"
              minlenght="<?= $config["textarea"]["minlenght"] ?>"
              maxlenght="<?= $config["textarea"]["maxlenght"] ?>"
              <?= (!empty($input["required"]))?'required="required"':'' ?>
    >
    </textarea>

    <input type="submit" value="<?= $config["config"]["submit"]??"Valider" ?>">
</form>
