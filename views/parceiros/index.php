
</style>
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>NOME</th>
		<th>TÍTULO</th>
		<th>IMAGEM</th>
		<th>AÇÃO</th>
		<th>
		</th>
	</tr>

<?php foreach ($parceiros as $p): ?>
	<tr>
		<td><?=$p['id']?></td>
		<td><?=$p['nome']?></td>
		<td><?=$p['titulo']?></td>
		<td ><img src="<?=site_url().$p['imagem']?>" class="img-responsive imgExpand"  alt=""></td>
		<td>
			<a href="<?=site_url()?>Parceiros/edit/<?=$p['id']?>"><i  class="mdi mdi-pencil mdi-24px"><i class="icon-spell-check">Editar</i></a>
			<a href="<?=site_url()?>Parceiros/remove/<?=$p['id']?>" style="color:#E91E63;"><i class="icon-pencil3">Remover</i></a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>