<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface HTMLContract extends ElementContract, DataElement {

	const VARIABLES = '$content=""';

	public function __construct($content = '');

}