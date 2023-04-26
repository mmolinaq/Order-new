<?php


class OrderAjaxRequest
{
	public function __construct()
	{
		$actions = array(

			"mypage_send_mail",
		);

		foreach ($actions as $act) {
			add_action("wp_ajax_nopriv_{$act}", array($this, $act));
			add_action("wp_ajax_{$act}", array($this, $act));
		}
	}

	function mypage_send_mail()
  	{
		$dataMail = array(
		"primaryColor" => "#8008a5",
		"sitename" => "Order",
		"siteEmail" => "contacto@order.cl",
		"siteAddress" => "Los Militares 5885, Los Militares 5885, Las Condes, Santiago Metropolitan 7550000, Chile",
		"sitePhone" => "56 22 3889600",
		"termsLinks" => home_url("/"),
		"homeUrl" => "http://order.cl/",
		"fbUrl" => "",
		"instagramUrl" => "",
		"linkedinUrl" => "",
		"twitterUrl" => "",
		"imageUrl" => get_template_directory_uri() . "/images/Logo-Order-2022.jpg",
		"dataForm" => array(
			"Nombre" => $_POST['txtName'],
			"Correo" => $_POST['txtEmail'],
			"Empresa" => $_POST['txtBussines'],
			"Web" => $_POST['txtWeb'],
			"Descripción" => $_POST['txtDescription'],
		)
		);
		

		$emailBodyAdmin = mypage_get_html("mails/contact-form-admin", $dataMail);
		$emailBodyClient = mypage_get_html("mails/contact-form-client", $dataMail);

		
		$receptors_ = get_field('receptors', 'option');

		
		$receptors;
		
		foreach($receptors_ as $re){
			$receptors[$re['email_receptor']] = $re['name_receptor'];
		}

		

		$sendAdmin = sendMail(array(
		"receptors" => $receptors,
		"html" => $emailBodyAdmin,
		"subject" => "Nuevo formulario de contacto",
		));
		
		$sendClient = sendMail(array(
		"receptors" => [$_POST['txtEmail'] => $_POST['txtName']],
		"html" => $emailBodyClient,
		"subject" => "Gracias por tu mensaje",
		));

		header('Content-Type: application/json');

		echo json_encode(array(
			"send1" => $sendAdmin,
			"send2" => $sendClient
		));

		wp_die();

	}

	

}

new OrderAjaxRequest();