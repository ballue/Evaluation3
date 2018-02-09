<!DOCTYPE html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="./assets/index.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Réalisateur</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Acteurs</label>
        <input type="text" class="form-control" id="acteurs" placeholder="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Producteur</label>
        <input type="text" class="form-control" id="producteur" placeholder="">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput">Synopsis</label>
        <input type="text" class="form-control" id="synopsis" placeholder="">
    </div>


</form>

<form>
    <div class="form-group">
        <label for="exampleFormControlFile1">Déposer votre film</label>
        <input type="file" class="form-control-file" id="depot">
    </div>
</form>

<button type="button" class="btn btn-primary">Publier</button>

</html>


 <?php
 $messageSuccess = '
<h2> Felicitation </h2>
';
if(!testExist('titre')) {
if (test5char($_POST)) {
$req = $bdd->prepare('INSERT INTO movies(titre, realisateur, acteurs, producteur, synopsis) VALUES(:titre, :realisateur, :acteurs, :producteur, :synopsis)');
$req->execute(array(
'titre' => $_POST['titre'],
'realisateur' => $_POST['realisateur'],
'acteurs' => $_POST['acteurs'],
'producteur' => $_POST['producteur'],
'synopsis' => $_POST['synopsis']
));
echo $messageSuccess;
}
} else {
echo $form;
}

?>