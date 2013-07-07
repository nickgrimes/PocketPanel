<?
require_once($_SERVER['DOCUMENT_ROOT']."/config.php");
require_once($_SERVER['DOCUMENT_ROOT']."/SourceQuery/SourceQuery.class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/MinecraftQuery/MinecraftQuery.class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/MinecraftQuery/MinecraftQuery_Simple.php");

class MinecraftUtils
{
	private $Query;
	private $RCON;
	
	public function __construct()
	{
		$this->Query = new MinecraftQuery();
		
		try
		{
			$this->Query->Connect(SERVER_IP, SERVER_PORT, QUERY_TIMEOUT);
		}
		catch( MinecraftQueryException $e )
		{
			return $e->getMessage();
		}
		
		try
		{
			$this->RCON = new SourceQuery();
			$this->RCON->Connect(SERVER_IP, SERVER_PORT, QUERY_TIMEOUT, SourceQuery :: SOURCE);
			$this->RCON->SetRconPassword(RCON_PASSWORD);
		}
		catch(Exception $e)
		{
			return $e->getMessage();
		}
	}
	
	public function getInfo($infoname)
	{
		$Info = $this->Query->GetInfo();
		if(isset($Info[$infoname]))
			return $Info[$infoname];
		else
			return false;
	}
	
	public function getPlayers()
	{
		return $this->Query->GetPlayers();
	}
	
	private function sendRCON($command)
	{
		return $this->RCON->Rcon($command);
	}
	
	public function status()
	{
		$status = false;
		$status = $this->sendRcon("status");
		$status = $this->parseResponse('status', $status);
		return $status;
	}
	
	private function parseResponse($type, $response)
	{
		switch($type)
		{
			case 'status'://TPS: 20.4872, Memory usage: 14.19MB (Peak 14.49MB)
				$TPS = substr($response, 5, 7);
				$Memory = substr($response, 28, 5);
				$MemoryUnit = substr($response, 33, 2);
				$MemoryPeak = substr($response, 42, 5);
				$MemoryPeakUnit = substr($response, 47, 2);
				return array("TPS" => $TPS, "Memory" => $Memory, "MemoryPeak" => $MemoryPeak, "MemoryUnit" => $MemoryUnit, "MemoryPeakUnit" => $MemoryPeakUnit);
				break;
		}
	}
	
	public function parseScale($type, $value, $max)
	{
		switch($type)
		{
			case 'tps':
				if($value <= 8)
					return 'danger';
				elseif($value <= 14)
					return 'warning';
				else
					return 'success';
				break;
		}
	}
	
	public function close()
	{
		$this->RCON->Disconnect();
	}
	
}
