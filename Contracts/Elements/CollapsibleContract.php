<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\AttributesElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface CollapsibleContract extends ElementContract, AttributesElement, ContainerElement {

	const VARIABLES = 'title|state=default|collapsibleId';

	const POSITIONS = 'default';

	public function __construct($title = '', $state = 'default');

    // Get or set
    public function title($title = null);

    // Get or set
    public function state($state = null);

    /* Getters */
    public function getCollapsibleId();

    public function getTitle();

    public function getContent();

    public function getState();

}