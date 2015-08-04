<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Countable;
use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface TableContract extends Countable, ElementContract, AttributesElement, DataElement {

	const VARIABLES = 'sortable=false';

	public function __construct();

	// Get or set
	public function sortable($sortable = null);

	// Get or set
	public function paging($paging = null);

	// Columns

	public function getColumns();

	public function addColumn($column);

	public function addColumns(array $columns);

	public function removeColumn($column);

	public function removeColumns(array $columns);

	public function clearColumns();

	public function countColumns();

	// Rows

	public function addRow($rowData);

	// return: array of Vitlabs\GUIAdmin\Contracts\Elements\TableRowContract
	public function getRows();

	public function clearRows();

	public function countRows();

	public function clear();

}