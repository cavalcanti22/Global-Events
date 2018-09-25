<?php
class portifolios extends Ext
{
	private $portifolio;

	function __construct()
	{
		require "models/Portifolio.php";
		$this->portifolio = new Portifolio;

		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");
	}

	public function index()
	{
			$data['titulo'] = 'Lista de Eventos';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/portifolios/index";
			$data['portifolios'] = $this->portifolio->get_all_portifolios();
			return $data;
	}
	public function add()
	{
		$data['titulo'] = 'Adicionar Evento';
		$data['layout'] = 'views/layouts/admin';
		$data['view'] = "views/portifolios/add";

		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{

			if ( isset($_FILES['imagem']) )
			{

				if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 10000000 )
				{
					$caminho = "resources/site/assets/img/portifolios/";
					$uniqid = md5(uniqid(rand(), true));
    				$nome = $this->nome_ext($uniqid,'imagem');
					$arquivo = $caminho . $nome;

					if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
					{
						$_POST['imagem'] = $arquivo;
						if (!$this->portifolio->insert_portifolio($_POST))
						{
							unlink($arquivo);
							die("ERRO AO CADASTRAR!");
						}
					
						$data = $this->index();
					}
					else
					{
						die('HOUVE UM ERRO NO UPLOAD DA portifolio!');
					}
				}
				else
				{
					die("Permitido somente portifolios do tipo .JPG com no máx. 4MB!");
				}
			}
			else
			{
				$imgantiga = $this->portifolio->get_portifolio($id);
				$_POST['imagem'] = $imgantiga['imagem'];

				if (!$this->portifolio->insert_portifolio($_POST))
				{
					die("ERRO AO CADASTRAR!");
				}
				$data = $this->index();				
			}

		}

		return $data;		
	}

	public function edit($id)
	{
		$data['portifolio'] = $this->portifolio->get_portifolio($id);
		if ($data['portifolio'])
		{
			$data['titulo'] = 'Atualizar Site';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/portifolios/edit";

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem']) AND $_FILES['imagem']['size'] > 0 )
				{
					
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png' ) AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/assets/img/portifolios/";
						$uniqid = md5(uniqid(rand(), true));
	    				$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->portifolio->update_portifolio($id, $_POST))
							{
								unlink($arquivo);
								die("ERRO AO ATUALIZAR!");
							}
							else
							{
								unlink($data['portifolio']['imagem']);
							}
							$data = $this->index();
						}
						else
						{
							die('HOUVE UM ERRO NO UPLOAD Do portifolio!');
						}
					}
					else
					{
						die("Permitido somente portifolios do tipo .JPG ou .PNG com no máx. 2MB!");
					}
				}
				else
				{
					$imgantiga = $this->portifolio->get_portifolio($id);
					$_POST['imagem'] = $imgantiga['imagem'];
					if (!$this->portifolio->update_portifolio($id, $_POST))
					{
						die("ERRO AO ATUALIZAR!");
					}
					$data = $this->index();				
				}

			}

			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE portifólio NÃO EXISTE!</p>");
		}
	}

	public function remove($id)
	{
		$data['portifolio'] = $this->portifolio->get_portifolio($id);
		if ($data['portifolio'])
		{
			if (!$this->portifolio->delete_portifolio($id))
			{
				die("<p style='color:red'>ERRO AO DELETAR!</p>");
			}
			else
			{
				unlink($data['portifolio']['imagem']);
			}
			$data = $this->index();
			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE portifólio NÃO EXISTE!</p>");
		}
	}

}
?>