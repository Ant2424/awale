<?php
// On instancie la session de l'utilisateur - permet de garder ses informations sur les pages
session_start();

class controller
{
	public $views = array(
		'welcome' => array('welcome/welcome', 'Accueil'),
			'home_page' => array('welcome/jeu', 'Game Of CIR'),
	);

	public $base_uri = null;
	public $current_title = 'Accueil';
	public $current_view = 'welcome/welcome';

	function __construct()
	{
		$this->route();
	}

	function render()
	{
		require('./view/' . $this->current_view . '.php');
	}

	function route()
	{
		$this->base_uri = 'http://' . $_SERVER['SERVER_NAME'] . str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
		// Récupération du paramètre action
		$action = (isset($_GET['action'])) ? $_GET['action'] : "";
		$id = (isset($_GET['id'])) ? $_GET['id'] : "";

		// Si on sort de la page d'accueil
		if (!empty($action)&&($action!="welcome"))
		{
			// Si l'utilisateur tente d'acceder à une page qui n'existe pas
			if (!array_key_exists($action, $this->views))
			{
				// On lui renvoie une page d'erreur
				header('Location: ./500.php');
			}
			// Affectation des attributs $current_view et $current_title
			$this->current_action = $action;
			$this->current_view = $this->views[$action][0];
			$this->current_title = $this->views[$action][1];

			/* Formulaire */
			/*****************/
			/* --- Pseudo --- */
			if ($this->current_action=="home_page")
			{

			}

		}
		/* Page d'accueil */
		/******************/
		else
		{

		}

	}

	/* Accesseurs */
	/**************/
	function getCurrent_title()
	{
		return $this->current_title;
	}

}
