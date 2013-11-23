<?php
	class bancologin extends banco{
		function BuscaUsuario($nome)
		{
			$Sql = "SELECT * FROM c_usuarios WHERE nome='".$nome."'";
			$result = parent::Execute($Sql);
			return $result;
		}
	}
?>