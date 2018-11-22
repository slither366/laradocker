<aside class="main-sidebar">
	
	<section class="sidebar">
		
		<ul class="sidebar-menu">
			
			<li class="active">

				<a href="inicio">
					
					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>
				
			</li>
	
		<?php
			if($_SESSION["tipoUser"]=='administrador'){

		?>
			<li>

				<a href="usuarios">
					
					<i class="fa fa-user"></i>
					<span>Usuario</span>

				</a>
				
			</li>

		<?php

			}

		?>
			<li class="active">

				<a href="transferenciaPendiente">
					
					<i class="fa fa-list-ul"></i>
					<span>Transferencias Pendientes</span>

				</a>
				
			</li>		

			<li class="treeview">

				<a href="depositoBancario">
					
					<i class="fa fa-list-ul"></i>
					<span>Deposito Bancario</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>

				</a>

				<ul class="treeview-menu" style="z-index:10;">

					<li>
						<!--<a href="depositoPendiente">-->
						<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalFiltroPendientes" id="verDet1">	
							<i class="fa fa-circle-o"></i>
							<span>Deposito Pendiente</span>
						</a>
					</li>

					<li>
						<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalFiltroTardes" id="verDet2">
							<i class="fa fa-circle-o"></i>
							<span>Deposito Tarde</span>
						</a>
					</li>

				</ul>
				
			</li>

			<li class="treeview">

				<a href="depositoBancario">
					
					<i class="fa fa-list-ul"></i>
					<span>Remesas</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>

				</a>

				<ul class="treeview-menu">

					<li>
						<!--<a href="depositoPendiente">-->
						<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalRemesaPendiente" id="verDet1">	
							<i class="fa fa-circle-o"></i>
							<span>Remesas Pendientes</span>
						</a>
					</li>

					<li>
						<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalRemesaTarde" id="verDet2">
							<i class="fa fa-circle-o"></i>
							<span>Remesas Tardes</span>
						</a>
					</li>

				</ul>
				
			</li>
							
		</ul>
	</section>

</aside>
