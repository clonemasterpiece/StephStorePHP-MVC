<?php
    if(!isset($_GET['id'])){
        header('location: modals/404Page.php?notFound');
    }
    else{
        $id=$_GET['id'];
        $returnProduct=returnProduct($id);
?>
    
    <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item" data-item="$<?=$returnProduct->id?>"> 
              <div class="card ">            
                    <div class="img-container">     
                       <img width="400px" src="assets/img/<?=$returnProduct->src?>" class="card-img-top store-img" alt="<?=$returnProduct->alt?>">       
                    </div>         
                    <div class="card-body">            
                        <div class="card-text d-flex justify-content-between text-capitalize">                
                          <h5 id="store-item-name"><?=$returnProduct->name?></h5>
                          <h5 class="store-item-value"><?=$returnProduct->cena?> 
                              <strong id="store-item-price" class="font-weight-bold"> RSD </strong>
                          </h5>
                        </div>
                    </div>
                </div>
            </div>
<?php
    }
?>