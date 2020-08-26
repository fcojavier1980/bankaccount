<?php
	require '../../classes/Accountconnect.php';

	if(isset($_GET['id']) && $_GET['id'] != ''){
		$id_usuario = $_GET['id'];

		$arr_from_query_id= Accountconnect::variable_select_query("SELECT * FROM usuarios WHERE id LIKE ?", $id_usuario);

		$user_info = $arr_from_query_id;
		
	}
	
	if(isset($_POST['iban']) && $_POST['iban'] != '' && isset($_POST['id']) && $_POST['id'] != ''){
		
		$arr_from_query_id= Accountconnect::variable_update_query("UPDATE usuarios SET iban='".$_POST['iban']."' WHERE id =".$_POST['id'], 'usuario', $_POST['id']);

		if(isset($_POST['dni']) && $_POST['dni'] != ''){
			Accountconnect::variable_update_query("UPDATE usuarios SET dni='".$_POST['dni']."' WHERE id =".$_POST['id'], 'usuario', $_POST['id']);
		}

		if(isset($_POST['facturation']) && $_POST['facturation'] != ''){
			Accountconnect::variable_update_query("UPDATE usuarios SET facturation='".$_POST['facturation']."' WHERE id =".$_POST['id'], 'usuario', $_POST['id']);
		}		

	}else{

	}

	
