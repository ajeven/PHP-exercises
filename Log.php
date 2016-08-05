<?php
class Log {
	private $filename;
	private $handle;
	public $date;
	public function __construct($prefix = 'log')
	{	
		$this->filename = $prefix . '-' . date('Y-m-d') . '.log';
		$this->handle = fopen($this->filename, 'a');
		$this->date = date('Y-m-d H:i:s');
		
	}
	public function logMessage($logLevel, $message) 
	{
		fwrite($this->handle, $this->date . ' [{$logLevel}] ' . $message);
	}
	public function logInfo($message)
	{
		$this->logMessage("info ", $message) . "\n";
	}
	public function logError($message)
	{
		$this->logMessage("error ", $message) . "\n";
	}
	public function __destruct() {
		echo "all done" . "\n";
		fclose($this->handle);
	}
	public function getFile()
	{
		return $this->filename;
	}
	public function getHandle()
	{
		return $this->handle;
	}
}
