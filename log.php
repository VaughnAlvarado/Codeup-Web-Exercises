<?php
class Log 
{
	public $handle;
	public $filename;
	public function __construct($prefix = 'log') 
	{
		$this->filename = "{$prefix}-" . date("Y-m-d") . '.log';
		$this->handle = fopen($this->filename, 'a');
	}
	public function logMessages($logLevel, $message) 
	{
		$date = date('Y-m-d');
		$time = date('H-i-s A');
		$newFormattedDate = "{$date} {$time} [{$logLevel}] {$message}";
		fwrite($this->handle, $newFormattedDate);	
	}
	public function logInfo($message) 
	{
		return $this->logMessages("info", $message);
	}
	public function logError($message) 
	{
		return $this->logMessages("error", $message);
	}
	public function __destruct() 
	{
		fclose($this->handle);	
	}
}

