<?php
	
include_once ("conexao.php");
	
$sql="SELECT * from usuarios";
$adm=mysqli_query ($conn, $sql);

?>
<html>

<head>

<!-- favicon -->	
				<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
				
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<meta name="description" content="">
					<meta name="author" content="">

						<title>Área administrativa </title>

				<!-- CSS -->
				<link href="css/bootstrap.min.css" rel="stylesheet">

				<!-- Estilização CSS -->
				<style>
				
				body {padding-top: 70px;}
				
				#button{
					margin-top:10px;
					
				}
				.dropdown-menu li:hover .sub-menu{
					
					visibility: visible;
					
				}
				.dropdown:hover .dropdown-menu{
					display: block;
					
				}
				.nav-tabs .dropdown-menu,
				.nav-pills .dropdown-menu,
				navbar .dropdown-menu{
					
					margin-top:0;
				}
				
			
				</style>

				

</head>



	<body>	
	
		<?php
					include "cabecalho.php";

					?>
		
		<div class="container theme-showcase" role="main">
			
			<div class="page-header">
										
			<h3><label class="glyphicon glyphicon-edit"> </label> Administradores </h3>
											
			</div>
										
				<div class="row">
		
				<div class="col-lg-12">
												
					<table class="table">
					<thead>
														
					<th> Nome </th>
					<th> E-mail </th>
					<th> Usuário </th>
					<th> Ações </th>
															
					</thead>
												
						<tbody>
													
							<?php while ($rows_adm=mysqli_fetch_assoc($adm)) {?>
																
							<tr>
							<td> <?php echo $rows_adm['nome'];?></td>
							<td> <?php echo $rows_adm['email'];?></td>
							<td> <?php echo $rows_adm['usuario'];?></td>
							<td>
																
							<button type="button" class="btn btn-sm btn-info"><a href="editaradm.php?id=<?php echo $rows_adm['id'] ?>"><span class="glyphicon glyphicon-pencil" ></span> Editar</a></button>                      
							<button type="button" class="btn btn-sm btn-danger"><a href="excluiradm.php?id=<?php echo $rows_adm['id']; ?>" ><span class="glyphicon glyphicon-trash" ></span>  Excluir</a></button>
																
							</td>	
							</tr>
		<?php }?>
																
					</tbody>
					</table>
					
					
				</div>
				</div>
				
		</div>
		
	</body>
</html>	