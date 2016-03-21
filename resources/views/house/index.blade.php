@extends('layouts.app')

@section('htmlheader_title')
	Casa
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Casa</div>

					<div class="panel-body">
						<?php
						$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
						// Se conecta ao IP e Porta:
						socket_connect($sock,"192.168.25.15", 8081);
						 
						// Executa a ação correspondente ao botão apertado.
						if(isset($_POST['bits'])) {
						  $msg = $_POST['bits'];
						  if(isset($_POST['Fora'   ])){ if($msg[0]=='1') { $msg[0]='0'; } else { $msg[0]='1'; }}
						  if(isset($_POST['Quarto1'])){ if($msg[1]=='1') { $msg[1]='0'; } else { $msg[1]='1'; }}
						  if(isset($_POST['Quarto2'])){ if($msg[2]=='1') { $msg[2]='0'; } else { $msg[2]='1'; }}
						  if(isset($_POST['Sala'   ])){ if($msg[3]=='1') { $msg[3]='0'; } else { $msg[3]='1'; }}
						  if(isset($_POST['Pequeno'])){ $msg = 'P#'; }
						  if(isset($_POST['Grande' ])){ $msg = 'G#'; }
						  socket_write($sock,$msg,strlen($msg));
						}
						 
						socket_write($sock,'R#',2); //Requisita o status do sistema.
						 
						// Espera e lê o status e define a cor dos botões de acordo.
						$status = socket_read($sock,6);
						if (($status[4]=='L')&&($status[5]=='#')) {
						  if ($status[0]=='0') $cor1 = "#FF0000";
						    else $cor1 = "#00FF00";
						  if ($status[1]=='0') $cor2 = "#FF0000";
						    else $cor2 = "#00FF00";
						  if ($status[2]=='0') $cor3 = "#FF0000";
						    else $cor3 = "#00FF00";
						  if ($status[3]=='0') $cor4 = "#FF0000";
						    else $cor4 = "#00FF00";
						   
						  echo "<form method =\"post\" action=\"alterarStatusCasa\">";
						  echo "<input type=\"hidden\" name=\"bits\" value=\"$status\">";
						  echo "<button style=\"width:70; background-color: $cor1 ;font: bold 14px Arial\" type = \"Submit\" Name = \"Fora\">Sala</button></br></br>";
						  echo "<button style=\"width:70; background-color: $cor2 ;font: bold 14px Arial\" type = \"Submit\" Name = \"Quarto1\">Cozinha</button></br></br>";
						  // echo "<button style=\"width:70; background-color: $cor3 ;font: bold 14px Arial\" type = \"Submit\" Name = \"Quarto2\">Quarto2</button></br></br>";
						  // echo "<button style=\"width:70; background-color: $cor4 ;font: bold 14px Arial\" type = \"Submit\" Name = \"Sala\">Sala</button></br></br></br>";
						  echo "<button style=\"width:90;font: bold 14px Arial\" type = \"Submit\" Name = \"Pequeno\">campanhia</button></br></br>";
						  echo "<button style=\"width:90;font: bold 14px Arial\" type = \"Submit\" Name = \"Grande\">Portao</button></br></br>";
						  echo "</form>";
						}
						// Caso ele não receba o status corretamente, avisa erro.
						else { echo "Falha ao receber status da casa."; }
						socket_close($sock);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
