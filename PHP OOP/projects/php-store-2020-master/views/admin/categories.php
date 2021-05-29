<?php
  if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $data = new CategoriesController();
    $categories = $data->getAllCategories();
  }else{
      Redirect::to("home");
  }
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-10 mx-auto">
        <div class="form-group">
            <a href="<?php echo BASE_URL?>addCategory" class="btn btn-primary btn-sm">
                Ajouter
            </a>
        </div>
        <form id="form" action="<?php echo BASE_URL?>updateCategory" method="post">
            <input type="hidden" name="cat_id"" id="product_id">
        </form>
        <form id="delete_form" action="<?php echo BASE_URL?>deleteCategory" method="post">
            <input type="hidden" name="delete_cat_id" id="delete_product_id">
        </form>
        <div class="card bg-light p-3">
            <table class="table table-hover table-inverse">
                <h3 class="font-weight-bold">Produits</h3>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $category) :?>
                    <tr>
                        <td><?php echo $category["cat_id"];?></td>
                        <td><?php echo $category["cat_title"];?></td>
                        <td class="d-flex flex-row justify-content-center align-items-center">
                            <a onclick="submitForm(<?php echo $category['cat_id'];?>)" class="btn btn-warning btn-sm mr-1">
                                Modifier
                            </a>
                            <a onclick="deleteForm(<?php echo $category['cat_id'];?>)" class="btn btn-danger btn-sm">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>