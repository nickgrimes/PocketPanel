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
	
	public sendRCON($command)
	{
		return $this->RCON->Rcon($command);
	}
	
	public function close()
	{
		$this->RCON->Disconnect();
	}
	
	public function getPlayers(
