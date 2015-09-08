<?php

namespace Vitlabs\GUIAdmin\Contracts;

interface FormContract {

    function form(array $form = []);
    function submit($value = '', $state = 'primary', $dropdown = false, $size = '', $attributes = []);
    function input();
    function email();
    function password();
    function file();
    function checkbox();
    function textarea();
    function editor($implementation = null);
    function radio();
    function select();

}