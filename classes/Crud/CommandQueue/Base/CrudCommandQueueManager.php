<?php
namespace Crud\Custom\NovumHome\CommandQueue\Base;

use CommandQueue;
use CommandQueueQuery;
use Core\Utils;
use Crud\Custom\NovumHome;
use Crud\FormManager;
use Crud\IConfigurableCrud;
use Exception\LogicException;
use Map\CommandQueueTableMap;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Map\TableMap;

/**
 * This class is automatically generated, do not modify manually.
 * Modify CommandQueue instead if you need to override or add functionality.
 */
abstract class CrudCommandQueueManager extends FormManager implements IConfigurableCrud
{
	use NovumHome\CrudTrait;
	use NovumHome\CrudApiTrait;

	public function getQueryObject(): ModelCriteria
	{
		return CommandQueueQuery::create();
	}


	public function getTableMap(): TableMap
	{
		return new \\Map\CommandQueueTableMap();
	}


	public function getShortDescription(): string
	{
		return "";
	}


	public function getEntityTitle(): string
	{
		return "CommandQueue";
	}


	public function getOverviewUrl(): string
	{
		return "";
	}


	public function getEditUrl(): string
	{
		return "";
	}


	public function getCreateNewUrl(): string
	{
		return $this->getEditUrl();
	}


	public function getNewFormTitle(): string
	{
		return " toevoegen";
	}


	public function getEditFormTitle(): string
	{
		return " aanpassen";
	}


	public function getDefaultOverviewFields(bool $bAddNs = false): array
	{
		$aOverviewColumns = ['Command'];
		if($bAddNs){
		   array_walk($aOverviewColumns, function(&$item) {
		      $item = Utils::makeNamespace($this, $item);
		   });
		}
		return $aOverviewColumns;
	}


	public function getDefaultEditFields(bool $bAddNs = false): array
	{
		$aOverviewColumns = ['Command'];
		if($bAddNs){
		   array_walk($aOverviewColumns, function(&$item) {
		       $item = Utils::makeNamespace($this, $item);
		   });
		}
		return $aOverviewColumns;
	}


	/**
	 * Returns a model object of the type that this CrudManager represents.
	 * @param array $aData
	 * @return CommandQueue
	 */
	public function getModel(array $aData = null): CommandQueue
	{
		if (isset($aData['id']) && $aData['id']) {
		     $oCommandQueueQuery = CommandQueueQuery::create();
		     $oCommandQueue = $oCommandQueueQuery->findOneById($aData['id']);
		     if (!$oCommandQueue instanceof CommandQueue) {
		         throw new LogicException("CommandQueue should be an instance of CommandQueue but got something else." . __METHOD__);
		     }
		     $oCommandQueue = $this->fillVo($aData, $oCommandQueue);
		}
		else {
		     $oCommandQueue = new CommandQueue();
		     if (!empty($aData)) {
		         $oCommandQueue = $this->fillVo($aData, $oCommandQueue);
		     }
		}
		return $oCommandQueue;
	}


	/**
	 * This method is ment to be called by save so any pre and post events are triggered also.
	 * Store form data, please first perform validation by calling validate
	 * @param array $aData an array of fields that belong to this type of data
	 * @return CommandQueue
	 * @throws \Propel\Runtime\Exception\PropelException
	 */
	public function store(array $aData = null): CommandQueue
	{
		$oCommandQueue = $this->getModel($aData);


		 if(!empty($oCommandQueue))
		 {
		     $oCommandQueue = $this->fillVo($aData, $oCommandQueue);
		     $oCommandQueue->save();
		 }
		return $oCommandQueue;
	}


	/**
	 * Fills the model object with data comming from a client.
	 * @param array $aData
	 * @param CommandQueue $oModel
	 * @return CommandQueue
	 */
	protected function fillVo(array $aData, CommandQueue $oModel): CommandQueue
	{
		isset($aData['command']) ? $oModel->setCommand($aData['command']) : null;
		return $oModel;
	}
}
