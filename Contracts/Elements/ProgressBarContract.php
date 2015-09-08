<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface ProgressBarContract extends ElementContract, DataElement {

    const VARIABLES = '$value=0|size|$striped=true|$active=true|$vertical=false|$state=default|$min=0|$max=100';

    public function __construct($value = 0, $state = 'default', $vertical = false);

}