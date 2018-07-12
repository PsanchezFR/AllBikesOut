<?php

	class Logger
	{
		public function log($message)
		{
			error_log($message);
		}
	}

?>