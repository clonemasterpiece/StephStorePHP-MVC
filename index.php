<?php
    session_start();
    include "config/connection.php";
	include "modals/functions.php";

  	if(isset($_GET['page']) && $_GET['page']!="messages"){
		include "views/fixed/stephstore/head.php";
		include "views/fixed/stephstore/nav.php";
		if(isset($_GET['page'])){
			switch($_GET['page']){
				case 'home':
					include "views/pages/stephstore/mainPage.php";
					break;
				case 'contact':
					include "views/pages/stephstore/contact.php";
				  break;
				case 'register':
					include "views/pages/stephstore/register.php";
				  break;
				case 'login':
					include "views/pages/stephstore/login.php";
				  break;
				case 'logOut':
					include "modals/logOut.php";
				  break;
				case 'author':
					include "views/pages/stephstore/author.php";
				  break;
				  case 'showProduct':
					include "views/pages/stephstore/showProduct.php";
				break;
				default: 
				  include "views/pages/stephstore/mainPage.php";
				  break;
			}
		}
		else{
			include "views/pages/stephstore/mainPage.php";
		}
		include "views/fixed/stephstore/footer.php";
  	}
	else{
		
		if(isset($_GET['page']) && $_GET['page']=="messages"){
		include "views/fixed/adminPanel/headAdmin.php";
		include "views/fixed/adminPanel/navAdmin.php";
			
			if(isset($_GET['messages'])){
				switch($_GET['messages']){
					case 'messages':
					  include "views/pages/adminPanel/messages.php";
					  break;
					case 'menu':
					  include "views/pages/adminPanel/menu.php";
					  break;
					case 'categories':
					  include "views/pages/adminPanel/categories.php";
					  break;
					case 'products':
					  include "views/pages/adminPanel/products.php";
					  break;
					case 'roles':
					  include "views/pages/adminPanel/roles.php";
					  break;
					case 'users':
					  include "views/pages/adminPanel/users.php";
					  break;
                    case 'statistics':
                      include "views/pages/adminPanel/statistics.php";
                      break;
					default: 
					  include "views/pages/adminPanel/messages.php";
					  break;
				}
			}
			else{
				include "views/pages/adminPanel/messages.php";
			}
		}
		include "views/fixed/adminPanel/footerAdmin.php";
	}
?>