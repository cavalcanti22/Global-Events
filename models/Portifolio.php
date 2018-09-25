<?php
class Portifolio extends Model
{

	public function insert_portifolio($i)
	{
		$nome = $i['nome'];
		$titulo = $i['titulo'];
		$link = $i['link'];
		$imagem = $i['imagem'];
		$q = "INSERT INTO portifolios (nome,titulo,link,imagem) VALUES ('$nome','$titulo','$link','$imagem')";
		return $this->execute($q);
	}


	public function get_all_portifolios()
	{
		$q = "SELECT * FROM portifolios";
		return $this->execute($q);
	}


	public function get_portifolio($id)
	{
		$q = "SELECT * FROM portifolios WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}
	public function update_portifolio($id, $i)
	{
		$nome = $i['nome'];
		$titulo = $i['titulo'];
		$link = $i['link'];
		$imagem = $i['imagem'];
		$q = "UPDATE portifolios
			  SET
			  	nome = '$nome',
			  	titulo = '$titulo',
			  	link = '$link',
			  	imagem = '$imagem'
			  WHERE
			  	id = '$id'
			 ";
			 
		return $this->execute($q);		
	}
	public function delete_portifolio($id)
	{
		$q = "DELETE FROM portifolios WHERE id = '$id'";
		return $this->execute($q);
	}


}
?>