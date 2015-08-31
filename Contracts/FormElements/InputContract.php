<?php

namespace Vitlabs\GUIAdmin\Contracts\FormElements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\PlaceholderElement;

interface InputContract extends ElementContract, FormElementContract, PlaceholderElement {

	function type($type = null);

    function height($height = null);

}