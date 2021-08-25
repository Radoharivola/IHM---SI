<div class="container-fluid">

                    <!-- Page Heading -->
                    

                   
                    <h1 class="h3 mb-1 text-gray-800">Manage Products </h1>

                    <a style="margin-left:85%; width:250px;text-align: center;" class="btn btn-dark " onclick="openAddForm()"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>     Ajouter un produit</a>
                    
                    <!-- Content Row -->
                    <div class="row">

                        <!-- First Column -->
                        <div class="col-lg-12">

                            <div class="row">
                              <?php foreach($lProduits as $row){ ?>
                                <div class="card shadow mb-3 col-lg-3 ">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary"><?php echo $row['nomProduit'] ?> </h6>
                                        <h8 class="m-0 font-weight-bold text-primary"><?php echo $row['prix'] ?> </h8>
                                    </div>
                                    <div class="card-body" >
                                       <img src="<?php echo imgUrl($row['imagePath']); ?>">
                                           
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a  class="btn btn-primary " onclick="openModifForm('<?php echo $row['idProduit'] ?>','<?php echo $row['nomProduit'] ?>','<?php echo $row['prix'] ?>','<?php echo $row['imagePath'] ?>')"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>Modify</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-danger " onclick="openDelForm(<?php echo $row['idProduit'] ?>)"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    </br>
                                </div>
                              </br>
                                <?php } ?>
                               
                            </div>
                            <!-- Custom Text Color Utilities -->

                        </div>

                </div>


                <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<div class="form-popup" id="modifForm">
  <form action="<?php echo getControllerUrl("updateTreatement","") ?>" class="form-container" method="post">
    <h1>Modifier un produit</h1>
    <input type="hidden" name="idProduit" id="idPro">
    <label ><b>Nom du Produit</b></label>
    <input  id="productName" type="text"  name="nomProduit" required>

    <label ><b>Prix</b></label>
    <input id="prix" type="text"   name="prix" >

    <label ><b>Image</b></label>
    <input id="img" type="file"  name="img" >


    <button type="submit" class="btn">Modifier</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
  </form>
</div>

<script>
function openModifForm(idProduit,idnomPro,idprix,idImg) {

  document.getElementById("modifForm").style.display = "block";
  document.getElementById("idPro").value =  idProduit;
  document.getElementById("productName").value =idnomPro;
  document.getElementById("prix").value =  idprix;
  document.getElementById("img").value = idImg;
}

function closeForm() {
  document.getElementById("modifForm").style.display = "none";
  document.getElementById("idPro").value =  "";
  document.getElementById("productName").value ="";
  document.getElementById("prix").value =  "";
  document.getElementById("img").value = "";
}
</script>


<div class="form-popup" id="deleteConf">
  <form action="<?php echo getControllerUrl("deleteTreatement","") ?>" class="form-container" method="post" >
    <h3 style="color:red">Voulez vous vraiment supprimer cet article ?</h3>
    <input type="hidden" name="idProduit" id="idProDel">
  
    <button type="submit" class="btn">Supprimer</button>
    <button type="button" class="btn cancel" onclick="closeDelForm()">Fermer</button>
  </form>
</div>

<script>
function openDelForm(idProduit) {

  document.getElementById("deleteConf").style.display = "block";
  document.getElementById("idProDel").value =  idProduit;
}

function closeDelForm() {
  document.getElementById("deleteConf").style.display = "none";
  document.getElementById("idPro").value =  "";
  
}
</script>

<div class="form-popup" id="addForm">
  <form action="<?php echo getControllerUrl("insertProduct","") ?>" class="form-container" method="post">
    <h1>Ajouter un produit</h1>
    <label ><b>Nom du Produit</b></label>
    <input  id="productName" type="text"  name="nomProduit" required>

    <label ><b>Prix</b></label>
    <input id="prix" type="text"   name="prix" required>

    <label ><b>Image</b></label>
    <input id="img" type="file"   name="imagePath">
    </br>
    </br>
    <label ><b>Category</b></label>
    <?php foreach($lCategory as $category) { ?>
    </br>
      <input type="checkbox" name="category[]" value="<?php echo $category['idCateg']; ?>"><?php echo $category['nomCateg']; ?></input>
   
    <?php } ?>
    <button type="submit" class="btn">Ajouter</button>
    <button type="button" class="btn cancel" onclick="closeAddForm()">Fermer</button>
  </form>
</div>

<script>
function openAddForm() {

  document.getElementById("addForm").style.display = "block";

}

function closeAddForm() {
  document.getElementById("addForm").style.display = "none";
  
  
}
</script>