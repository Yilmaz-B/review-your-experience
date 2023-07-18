<!DOCTYPE html>
<html>
<body>
<div class="container-fluid p-0">
    <?php
    include_once('../Templates/admin/defaults/head.php');
    include_once('../Templates/admin/defaults/menu.php');
    include_once('../Templates/admin/defaults/pictures.php');
    global $categories;
    ?>
    <?php if(!empty($message)): ?>
        <div class="alert alert-success" role="alert">
            <?=$message?>
        </div>
    <?php endif;?>
</div>
<div class="container-md">
    <form  class="" method="post" >
        <div class="row">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Naam</label>
                <input type="text" class="form-control" id="inputName" name="name"
                       value="<?php if (isset($_POST['name'])) {
                           echo $_POST['name'];
                       } else {echo "";}?>" >
            </div>
            <div class="col-md-6">
                <label for="cat" class="form-label">Category</label>
                <select class="form-select" id="cat" name="category">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category->id?>"><?=$category->name?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="name" class="form-label ">Description</label>
                <textarea class="form-control" id="name" name="description"><?php if (isset($_POST['description'])) {
                        echo $_POST['description'];
                    } else {echo"";}?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="formfile" class="form-label">Afbeeldin toevoegen</label>
                <input class="form-control" name="fileToUpload" type="file" id="formFile">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" name="submit" class="btn btn-warning mt-3">Toevoegen</button>
            </div>
        </div>
    </form>
</div>
    <?php
include_once('../Templates/defaults/footer.php');
?>
</body>
</html>
