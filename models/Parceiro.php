<?php
class Parceiro extends Model
{

	public function insert_parceiro($i)
	{
		$nome = $i['nome'];
		$titulo = $i['titulo'];
		$link = $i['link'];
		$imagem = $i['imagem'];
		$q = "INSERT INTO parceiros (nome,titulo,link,imagem) VALUES ('$nome','$titulo','$link','$imagem')";
		return $this->execute($q);
	}


	public function get_all_parceiros()
	{
		$q = "SELECT * FROM parceiros";
		return $this->execute($q);
	}


	public function get_parceiro($id)
	{
		$q = "SELECT * FROM parceiros WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}
	public function update_parceiro($id, $i)
	{
		$nome = $i['nome'];
		$titulo = $i['titulo'];
		$link = $i['link'];
		$imagem = $i['imagem'];
		$q = "UPDATE parceiros
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
	public function delete_parceiro($id)
	{
		$q = "DELETE FROM parceiros WHERE id = '$id'";
		return $this->execute($q);
	}


}
?>