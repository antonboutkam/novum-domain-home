<?php
namespace Crud\Custom\NovumHome\CommandQueue\Field\Base;

use Crud\Custom\NovumHome\CommandQueue\CrudFieldIterator;
use Crud\Generic\Field\GenericString;
use Crud\IEditableField;
use Crud\IFilterableField;
use Crud\IRequiredField;

/**
 * Base class that represents the 'command' crud field from the 'command_queue' table.
 * This class is auto generated and should not be modified.
 */
abstract class Command extends GenericString implements IFilterableField, IEditableField, IRequiredField
{
	protected $sFieldName = 'command';
	protected $sFieldLabel = 'Command';
	protected $sIcon = 'lock';
	protected $sPlaceHolder = '';
	protected $sGetter = 'getCommand';
	protected $sFqModelClassname = '\\\CommandQueue';


	public function isUniqueKey(): bool
	{
		return false;
	}


	public function hasValidations()
	{
		return true;
	}


	public function validate($aPostedData)
	{
		$mResponse = false;
		$mParentResponse = parent::validate($aPostedData);


		if(!isset($aPostedData['command']))
		{
		     $mResponse = [];
		     $mResponse[] = 'Het veld "Command" verplicht maar nog niet ingevuld.';
		}
		if(!empty($mParentResponse)){
		     $mResponse = array_merge($mResponse, $mParentResponse);
		}
		return $mResponse;
	}
}
