<h3>Nova notícia</h3>
<?php echo $this->Form->create('Noticia', array('type' => 'file')) ?>
<?php echo $this->Form->input('titulo') ?>
<?php echo $this->Form->input('imagem', array('type' => 'file')) ?>
<?php echo $this->Form->end('Salvar') ?>

<h3>Notícias</h3>

<table>
	<tr>
		<td>ID</td>
		<td>Título</td>
		<td>Imagem</td>
		<td>Tamanho</td>
	</tr>
	<?php foreach ($noticias AS $noticia) { ?>
	<tr>
		<td><?php echo $noticia['Noticia']['id'] ?></td>
		<td><?php echo $noticia['Noticia']['titulo'] ?></td>
		<td><?php echo $this->Html->link($noticia['Noticia']['imagem'], '/' . $noticia['Noticia']['imagem_folder'] . '/' . $noticia['Noticia']['imagem']) ?></td>
		<td><?php echo $this->Number->toReadableSize($noticia['Noticia']['imagem_size']) ?></td>
	</tr>
	<?php } ?>
</table>
