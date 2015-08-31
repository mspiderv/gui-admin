<?php

namespace Vitlabs\GUIAdmin\Contracts;

interface ElementsContract {

	function window();
	function icon($icon = '');
	function tag($tag, $content = '', $paired = true, $attributes = []);
	function accordion(array $data = []);
	function box($title, $state = 'default', $icon = '');
	function table();
	function tableRow($data);
    function login(array $data = []);
    function collapsible($title = '', $state = 'default');
    function row($c1, $c2 = null, $c3 = null, $c4 = null, $c5 = null, $c6 = null, $c7 = null, $c8 = null, $c9 = null, $c10 = null, $c11 = null, $c12 = null);
    function tabs($title, $icon = null, $active = 1);
    function tab($title);
    function alert($content, $state = 'warning', $description = null, $icon = null, $dismissable = true);
	function blank();
    function callout($heading, $state = 'info', $content = null);
    function container(array $container = []);
    function progressBar($value = 0, $state = 'default', $vertical = false);
    function HTML($content = '');
    function button($content = '', $state = 'default', $tag = 'a', $dropdown = false, $size = '');
    function buttonApplication($content = '', $tag = 'a', $icon = '', $badge = '', $badgeBg = 'default');
    function buttonSocial($social = '', $content = '', $icon = null);
    function buttonGroup(array $container = []);
    function buttonDropdown($state = 'default', $size = '');
    function dropdown(array $container = []);
    function dropdownItem($content = '', $href = '#', $attributes = []);
    function dropdownDivider();
    function tagContainer($tag = 'div', $class = null);
    function infoWidget($heading = '', $content = '', $icon = '', $bg = '');

}