<?php
    if(isset($_GET['click'])){
            require_once $_SERVER['DOCUMENT_ROOT']."/stephstoreonlinework/modals/functions.php";
            $products=getAllFromTable("products");
            $excel="";
                
            if(count($products)>0){
                $excel.='<table class="table"> 
                <thead>
                  <tr>
                    <th scope="col">ID products</th>
                    <th scope="col">Product name</th>
                    <th scope="col">Product price</th>
                  </tr>
                </thead>
                <tbody>';
                    foreach($products as $p){
                        $excel.='<tr>
                            <td>'.$p->id.'</td>
                            <td>'.$p->name.'</td>
                            <td>'.$p->cena.'</td>
                        </tr>';
                    }
              $excel.='</tbody>
              </table>';
            }
    
            header("Content-Type: application/xls");
            header("Content-Disposition: attachment; filename=excelfile.xls");
            echo $excel;
        }
        
    else{
        header("location: ../404Page.php?notFound");
        $code=404;
        $msg="Page not found.";
    }
?>