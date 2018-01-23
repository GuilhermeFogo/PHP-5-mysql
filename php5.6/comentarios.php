<div class="container">
	<div class=" row col-md-12">
		<p class="h3">O que achou do Site Comente:</p>
				<form class="form-group" method="post">
					<label  for="nome">Nome:</label>
					<input type="text" name="nome_usuario" required="on" class="form-control" placeholder="Nome Completo">
					<label for="comentario">Comentario:</label>
					<textarea class="form-control" name="comentario" placeholder="Seu comentário" required="on"></textarea>
					<br>
					<input type="submit" name="gravar" value="Enviar Comentario" class="btn btn-md btn-primary">
				</form>
	</div>
	<div class="row">
				<table class="table-responsive table">
					<thead>
						<tr>
							<th>Nome: </th>
							<th>Comentario:</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
							<?php
								// o foreach serve para varrer uma array pelo banco , ela esta fazendo renomeando a variavel $gravar_comentario para $comentario e nela os dados do banco são mostrados é uma especie de loop (especial para arrays)
								foreach ($gravar_comentario as $comentario) : 
							?>
						<tr>
							<td><?php echo $comentario['nome_usuario']; ?></td>
							<td><?php echo $comentario['comentario']; ?></td>
							<td> <!-- O campo com os links para editar e remover -->
							<a href="editar.php?id=<?php echo $comentario['id']; ?> " class="btn btn-md btn-primary"> Editar </a>
							</td>
							<td>
								<a href="delete.php?id=<?php echo $comentario['id']; ?>" class="btn btn-md btn-warning">Remover</a>
							</td>
						</tr>
							<?php endforeach; ?>
					</tbody>
					<tfoot>
						
					</tfoot>
				</table>

	</div>
</div>
