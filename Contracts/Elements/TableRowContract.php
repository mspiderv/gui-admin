<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;

interface TableRowContract extends ElementContract, AttributesElement {

	public function __construct($data, TableContract $table);

	// Get or set
	public function id($id = null);

	// Get or set
	public function level($level = null);

	// Get or set
	public function sortgroup($sortgroup = null);

	// Get or set
	public function model($model = null);
	
}