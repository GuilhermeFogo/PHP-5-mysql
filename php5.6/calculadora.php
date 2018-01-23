<div class="container">
<h2>Calculadora</h2>
	<div class="col-md-4 form-group">
		<form method="get" name="calculadora">
			<label for="numeros">Digite um numero:</label>
			<input type="number" name="numero1" id="numero1" placeholder="Digite o número" class="form-control" required="on">
			<label for="numeros">Digite outro numero:</label>
			<input type="number" name="numero2" id="numero2" placeholder="Digite o número" class="form-control" required="on">
		<br><br>
		<script type="text/javascript">
				// capiturando os valores arrumar o botao da logica Soma
			var campo_numero1= document.getElementById("numero1");
			var campo_numero2= document.getElementById('numero2');

		</script>
				<button class="btn btn-md btn-default" name="soma"  onclick="calculadora_mini(campo_numero1.value,campo_numero2.value ,'+');">Somar</button>
				<button class="btn btn-md btn-default" name="subtrair" onclick="calculadora_mini(campo_numero1.value,campo_numero2.value , '-');">Subtrair</button>
				<button class="btn btn-md btn-default" name="multiplicar" onclick="calculadora_mini(campo_numero1.value,campo_numero2.value , '*');">Multiplicar</button>
				<button class="btn btn-md btn-default" name="dividir" onclick="calculadora_mini(campo_numero1.value,campo_numero2.value , '/');">Dividir</button>
		<br>
		</form>
	</div>
</div>