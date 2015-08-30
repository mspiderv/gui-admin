<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\PlaceholderElement;

interface SelectContract extends ElementContract, FormElementContract, PlaceholderElement {

	function multiple($multiple = true);

    function isMultiple();

    function options($options = null);

}