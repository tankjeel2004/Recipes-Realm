
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

    <nav class="navbar-bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-text">
      Create Your Own Recipe :
    </span>
  </div>
</nav>
<br>
<br>
<form method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Recipe Title :</label>
  <input type="text" class="form-control" name="recipe_title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
  <textarea class="form-control" name="recipe_description" rows="2"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Ingredients :</label>
  <textarea class="form-control" name="recipe_ingredients" rows="6"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Instructions :</label>
  <textarea class="form-control" name="recipe_instructions" rows="4"></textarea>
</div>
</form>

<hr>

<div class="btn-header">
  <input type="submit" name="add_recipe" value="Add Recipe">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" value="Reset">
</div>
</form>


   
 




