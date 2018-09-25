<?php
class Parceiros extends Ext
{
	private $parceiro;

	function __construct()
	{
		require "models/Parceiro.php";
		$this->parceiro = new Parceiro;

		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");
	}

	public function index()
	{
			$data['titulo'] = 'Lista de Parceiros';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/parceiros/index";
			$data['parceiros'] = $this->parceiro->get_all_parceiros();
			return $data;
	}
	public function add()
	{
		$data['titulo'] = 'Adicionar Parceiro';
		$data['layout'] = 'views/layouts/admin';
		$data['view'] = "views/parceiros/add";

		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{

			if ( isset($_FILES['imagem']) )
			{

				if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 10000000 )
				{
					$caminho = "resources/site/assets/img/parceiros/";
					$uniqid = md5(uniqid(rand(), true));
    				$nome = $this->nome_ext($uniqid,'imagem');
					$arquivo = $caminho . $nome;

					if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
					{
						$_POST['imagem'] = $arquivo;
						if (!$this->parceiro->insert_parceiro($_POST))
						{
							unlink($arquivo);
							die("ERRO AO CADASTRAR!");
						}
					
						$data = $this->index();
					}
					else
					{
						die('HOUVE UM ERRO NO UPLOAD Do parceiro!');
					}
				}
				else
				{
					die("Permitido somente parceiros com no máx. 4MB!");
				}
			}
			else
			{
				$imgantiga = $this->parceiro->get_parceiro($id);
				$_POST['imagem'] = $imgantiga['imagem'];

				if (!$this->parceiro->insert_parceiro($_POST))
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
		$data['parceiro'] = $this->parceiro->get_parceiro($id);
		if ($data['parceiro'])
		{
			$data['titulo'] = 'Atualizar Site';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/parceiros/edit";

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem']) AND $_FILES['imagem']['size'] > 0 )
				{
					
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png' ) AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/assets/img/parceiros/";
						$uniqid = md5(uniqid(rand(), true));
	    				$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->parceiro->update_parceiro($id, $_POST))
							{
								unlink($arquivo);
								die("ERRO AO ATUALIZAR!");
							}
							else
							{
								unlink($data['parceiro']['imagem']);
							}
							$data = $this->index();
						}
						else
						{
							die('HOUVE UM ERRO NO UPLOAD DA parceiro!');
						}
					}
					else
					{
						die("Permitido somente parceiros do tipo .JPG ou .PNG com no máx. 2MB!");
					}
				}
				else
				{
					$imgantiga = $this->parceiro->get_parceiro($id);
					$_POST['imagem'] = $imgantiga['imagem'];
					if (!$this->parceiro->update_parceiro($id, $_POST))
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
			die("<p style='color:red'>ESTE parceiro NÃO EXISTE!</p>");
		}
	}

	public function remove($id)
	{
		$data['parceiro'] = $this->parceiro->get_parceiro($id);
		if ($data['parceiro'])
		{
			if (!$this->parceiro->delete_parceiro($id))
			{
				die("<p style='color:red'>ERRO AO DELETAR!</p>");
			}

			else
			{
				unlink($data['parceiro']['imagem']);
			}
			$data = $this->index();
			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE parceiro NÃO EXISTE!</p>");
		}
	}

}
?>