<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;

interface DropdownDividerContract extends ElementContract, AttributesElement {

	public function __construct();

}