<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;

interface RadioContract extends ElementContract, FormElementContract {

	function check();

    function uncheck();

}