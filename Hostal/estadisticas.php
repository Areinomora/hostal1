<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
				include ('metaetiquetas-generales.php');
			?>
		<META name='revised' content='Tuesday, February 20th, 2017, 13:10 pm' /><!--Última revisión del sitio-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</HEAD>

	<BODY>
		<?php
			include ('titulo.php');
			include ('menu-principal.php');
			echo	'<DIV id="cajaContenido">';
			echo	'<DIV id="cajaEntradas">';
		?>

		<ARTICLE>
			<HEADER>
				<H2>Estadísticas</H2>
				<P>Detalles sobre el desarrollo de las actividades</P>
			</HEADER>

			<SECTION>
				<H3>Clientes</H3>
				<P>Detalles sobre los clientes</P>
				<UL>
					<LI>Clientes totales</LI>
					<LI>Añdadidos esta semana</LI>
					<LI>Añdadidos este mes</LI>
					<LI>Añadidos el último año</LI>
				</UL>
			</SECTION>

			<SECTION>
				<H3>Reservas</H3>
				<P>Detalles sobre las Reservas</P>
				<UL>
					<LI>Reservas totales</LI>
					<LI>Añdadidas esta semana</LI>
					<LI>Añdadidas este mes</LI>
					<LI>Añadidas el último año</LI>
				</UL>
			</SECTION>

			<SECTION>
				<H3>Control de cuentes</H3>
				<P>Detalles sobre los beneficios</P>
				<UL>
					<LI>Ingresos totales</LI>
					<LI>Ingresos de esta semana</LI>
					<LI>Ingresos de este mes</LI>
					<LI>Ingresos del último año</LI>
				</UL>
			</SECTION>
		</ARTICLE>

		<?php
			echo '</DIV>';
			include ('aside.php');
			echo	'</DIV>';
			include ('footer.php');
		?>
	</BODY>
</HTML>
