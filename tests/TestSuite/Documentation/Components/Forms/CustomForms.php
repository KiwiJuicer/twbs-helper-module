<?php

// Documentation test config file for "Components / Forms / Custom forms" part
return [
    'title' => 'Custom forms',
    'url' => '%bootstrap-url%/components/forms/#custom-forms',
    'tests' => [
        [
            'title' => 'Checkboxes and radios',
            'url' => '%bootstrap-url%/components/forms/#checkboxes-and-radios-1',
            'tests' => [
                [
                    'title' => 'Checkboxes',
                    'url' => '%bootstrap-url%/components/forms/#checkboxes',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Laminas\Form\Factory();

                        echo $oView->formRow($oFactory->create([
                            'name' => 'custom_checkbox',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Check this custom checkbox',
                                'use_hidden_element' => false,
                                'form_group' => false,
                                'custom' => true,
                            ],
                            'attributes' => [
                                'id' => 'customCheck1',
                            ],
                        ]));
                    },
                    'expected' => '<div class="custom-checkbox&#x20;custom-control">' . PHP_EOL .
                        '    <input type="checkbox" name="custom_checkbox" id="customCheck1" ' .
                        'class="custom-control-input" value="1">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customCheck1">' .
                        'Check this custom checkbox' .
                        '</label>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Radios',
                    'url' => '%bootstrap-url%/components/forms/#checkboxes',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Laminas\Form\Factory();

                        echo $oView->formRow($oFactory->create([
                            'name' => 'customRadio',
                            'type' => 'radio',
                            'options' => [
                                'custom' => true,
                                'value_options' => [
                                    [
                                        'label' => 'Toggle this custom radio',
                                        'value' => '1',
                                        'attributes' => ['id' => 'customRadio1'],
                                    ],
                                    [
                                        'label' => 'Or toggle this other custom radio',
                                        'value' => '2',
                                        'attributes' => ['id' => 'customRadio2'],
                                    ],
                                ],
                            ],
                        ]));
                    },
                    'expected' => '<div class="custom-control&#x20;custom-radio">' . PHP_EOL .
                        '    <input type="radio" name="customRadio" class="custom-control-input" ' .
                        'id="customRadio1" value="1">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customRadio1">' .
                        'Toggle this custom radio' .
                        '</label>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="custom-control&#x20;custom-radio">' . PHP_EOL .
                        '    <input type="radio" name="customRadio" class="custom-control-input" ' .
                        'id="customRadio2" value="2">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customRadio2">' .
                        'Or toggle this other custom radio' .
                        '</label>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Inline',
                    'url' => '%bootstrap-url%/components/forms/#inline-1',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Laminas\Form\Factory();

                        echo $oView->formRow($oFactory->create([
                            'name' => 'customRadioInline1',
                            'type' => 'radio',
                            'options' => [
                                'layout' => \TwbsHelper\Form\View\Helper\Form::LAYOUT_INLINE,
                                'custom' => true,
                                'value_options' => [
                                    [
                                        'label' => 'Toggle this custom radio',
                                        'value' => '1',
                                        'attributes' => ['id' => 'customRadioInline1'],
                                    ],
                                    [
                                        'label' => 'Or toggle this other custom radio',
                                        'value' => '2',
                                        'attributes' => ['id' => 'customRadioInline2'],
                                    ],
                                ],
                            ],
                        ]));
                    },
                    'expected' => '<div class="custom-control&#x20;custom-control-inline&#x20;custom-radio">' .
                        PHP_EOL .
                        '    <input type="radio" name="customRadioInline1" class="custom-control-input" ' .
                        'id="customRadioInline1" value="1">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customRadioInline1">' .
                        'Toggle this custom radio' .
                        '</label>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="custom-control&#x20;custom-control-inline&#x20;custom-radio">' . PHP_EOL .
                        '    <input type="radio" name="customRadioInline1" class="custom-control-input" ' .
                        'id="customRadioInline2" value="2">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customRadioInline2">' .
                        'Or toggle this other custom radio' .
                        '</label>' . PHP_EOL .
                        '</div>',
                ],
                [
                    'title' => 'Disabled',
                    'url' => '%bootstrap-url%/components/forms/#disabled',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Laminas\Form\Factory();

                        echo $oView->formRow($oFactory->create([
                            'name' => 'custom_checkbox_disabled',
                            'type' => 'checkbox',
                            'options' => [
                                'label' => 'Check this custom checkbox',
                                'use_hidden_element' => false,
                                'form_group' => false,
                                'custom' => true,
                            ],
                            'attributes' => [
                                'id' => 'customCheckDisabled1',
                                'disabled' => true,
                            ],
                        ])) . PHP_EOL;

                        echo $oView->formRow($oFactory->create([
                            'name' => 'radioDisabled',
                            'type' => 'radio',
                            'options' => [
                                'custom' => true,
                                'value_options' => [
                                    [
                                        'label' => 'Toggle this custom radio',
                                        'value' => '1',
                                        'attributes' => ['id' => 'customRadioDisabled2'],
                                    ],
                                ],
                            ],
                            'attributes' => ['disabled' => true],
                        ]));
                    },
                    'expected' =>
                    '<div class="custom-checkbox&#x20;custom-control">' . PHP_EOL .
                        '    <input type="checkbox" name="custom_checkbox_disabled" id="customCheckDisabled1" ' .
                        'disabled="disabled" class="custom-control-input" value="1">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customCheckDisabled1">' .
                        'Check this custom checkbox' .
                        '</label>' . PHP_EOL .
                        '</div>' . PHP_EOL .
                        '<div class="custom-control&#x20;custom-radio">' . PHP_EOL .
                        '    <input type="radio" name="radioDisabled" disabled="disabled" ' .
                        'class="custom-control-input" id="customRadioDisabled2" value="1">' . PHP_EOL .
                        '    <label class="custom-control-label" for="customRadioDisabled2">' .
                        'Toggle this custom radio' .
                        '</label>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
        [
            'title' => 'Switches',
            'url' => '%bootstrap-url%/components/forms/#switches',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_switch',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Toggle this switch element',
                        'use_hidden_element' => false,
                        'form_group' => false,
                        'custom' => true,
                        'switch' => true,
                    ],
                    'attributes' => ['id' => 'customSwitch1'],
                ])) . PHP_EOL;

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_switch',
                    'type' => 'checkbox',
                    'options' => [
                        'label' => 'Disabled switch element',
                        'use_hidden_element' => false,
                        'form_group' => false,
                        'custom' => true,
                        'switch' => true,
                    ],
                    'attributes' => [
                        'id' => 'customSwitch2',
                        'disabled' => true,
                    ],
                ]));
            },
            'expected' => '<div class="custom-control&#x20;custom-switch">' . PHP_EOL .
                '    <input type="checkbox" name="custom_switch" id="customSwitch1" ' .
                'class="custom-control-input" value="1">' . PHP_EOL .
                '    <label class="custom-control-label" for="customSwitch1">' .
                'Toggle this switch element' .
                '</label>' . PHP_EOL .
                '</div>' . PHP_EOL .
                '<div class="custom-control&#x20;custom-switch">' . PHP_EOL .
                '    <input type="checkbox" name="custom_switch" id="customSwitch2" ' .
                'disabled="disabled" class="custom-control-input" value="1">' . PHP_EOL .
                '    <label class="custom-control-label" for="customSwitch2">' .
                'Disabled switch element' .
                '</label>' . PHP_EOL .
                '</div>',
        ],
        [
            'title' => 'Select menu',
            'url' => '%bootstrap-url%/components/forms/#select-menu',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->formElement($oFactory->create([
                    'name' => 'custom_select',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                ])->setValue('')) . PHP_EOL;

                echo '<br><br>' . PHP_EOL;

                // You may also choose from small and large custom selects to match our similarly sized text inputs.
                echo $oView->formElement($oFactory->create([
                    'name' => 'custom_select_lg',
                    'type' => 'select',
                    'options' => [
                        'size' => 'lg',
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['class' => 'mb-3'],
                ])->setValue('')) . PHP_EOL;

                echo '<br><br>' . PHP_EOL;

                echo $oView->formElement($oFactory->create([
                    'name' => 'custom_select_sm',
                    'type' => 'select',
                    'options' => [
                        'size' => 'sm',
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                ])->setValue('')) . PHP_EOL;

                echo '<br><br>' . PHP_EOL;

                // The multiple attribute is also supported
                echo $oView->formElement($oFactory->create([
                    'name' => 'custom_select_multiple',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['multiple' => true],
                ])->setValue('')) . PHP_EOL;

                echo '<br><br>' . PHP_EOL;

                // As is the size attribute
                echo $oView->formElement($oFactory->create([
                    'name' => 'custom_select_size',
                    'type' => 'select',
                    'options' => [
                        'custom' => true,
                        'empty_option' => 'Open this select menu',
                        'value_options' => [
                            1 => 'One',
                            2 => 'Two',
                            3 => 'Three',
                        ],
                    ],
                    'attributes' => ['size' => 3],
                ])->setValue(''));
            },
            'expected' => '<select name="custom_select" class="custom-select">' . PHP_EOL .
                '    <option value="" selected="selected">Open this select menu</option>' . PHP_EOL .
                '    <option value="1">One</option>' . PHP_EOL .
                '    <option value="2">Two</option>' . PHP_EOL .
                '    <option value="3">Three</option>' . PHP_EOL .
                '</select>' . PHP_EOL .
                '<br><br>' . PHP_EOL .
                '<select name="custom_select_lg" ' .
                'class="custom-select&#x20;custom-select-lg&#x20;mb-3">' . PHP_EOL .
                '    <option value="" selected="selected">Open this select menu</option>' . PHP_EOL .
                '    <option value="1">One</option>' . PHP_EOL .
                '    <option value="2">Two</option>' . PHP_EOL .
                '    <option value="3">Three</option>' . PHP_EOL .
                '</select>' . PHP_EOL .
                '<br><br>' . PHP_EOL .
                '<select name="custom_select_sm" class="custom-select&#x20;custom-select-sm">' . PHP_EOL .
                '    <option value="" selected="selected">Open this select menu</option>' . PHP_EOL .
                '    <option value="1">One</option>' . PHP_EOL .
                '    <option value="2">Two</option>' . PHP_EOL .
                '    <option value="3">Three</option>' . PHP_EOL .
                '</select>' . PHP_EOL .
                '<br><br>' . PHP_EOL .
                '<select name="custom_select_multiple&#x5B;&#x5D;" multiple="multiple" ' .
                'class="custom-select">' . PHP_EOL .
                '    <option value="" selected="selected">Open this select menu</option>' . PHP_EOL .
                '    <option value="1">One</option>' . PHP_EOL .
                '    <option value="2">Two</option>' . PHP_EOL .
                '    <option value="3">Three</option>' . PHP_EOL .
                '</select>' . PHP_EOL .
                '<br><br>' . PHP_EOL .
                '<select name="custom_select_size" size="3" class="custom-select">' . PHP_EOL .
                '    <option value="" selected="selected">Open this select menu</option>' . PHP_EOL .
                '    <option value="1">One</option>' . PHP_EOL .
                '    <option value="2">Two</option>' . PHP_EOL .
                '    <option value="3">Three</option>' . PHP_EOL .
                '</select>',
        ],
        [
            'title' => 'Range',
            'url' => '%bootstrap-url%/components/forms/#range',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_range',
                    'type' => 'range',
                    'options' => [
                        'custom' => true,
                        'label' => 'Example range',
                        'form_group' => false,
                    ],
                    'attributes' => ['id' => 'customRange1'],
                ]));
            },
            'expected' => '<label for="customRange1">Example range</label>' . PHP_EOL .
                '<input type="range" name="custom_range" id="customRange1" class="custom-range" value="">',
        ],
        [
            'title' => 'File browser',
            'url' => '%bootstrap-url%/components/forms/#file-browser',
            'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                $oFactory = new \Laminas\Form\Factory();

                echo $oView->formRow($oFactory->create([
                    'name' => 'custom_file',
                    'type' => 'file',
                    'options' => [
                        'custom' => true,
                        'custom_label' => 'Choose file',
                        'form_group' => false,
                    ],
                    'attributes' => ['id' => 'customFile'],
                ]));
            },
            'expected' => '<div class="custom-file">' . PHP_EOL .
                '    <input type="file" name="custom_file" id="customFile" class="custom-file-input" value="">'
                . PHP_EOL .
                '    <label class="custom-file-label" for="customFile">Choose file</label>' . PHP_EOL .
                '</div>',
            'tests' => [
                [
                    'title' => 'Translating or customizing the strings with HTML',
                    'url' => '%bootstrap-url%/components/forms/#translating-or-customizing-the-strings-with-html',
                    'rendering' => function (\Laminas\View\Renderer\PhpRenderer $oView) {
                        $oFactory = new \Laminas\Form\Factory();

                        echo $oView->formRow($oFactory->create([
                            'name' => 'custom_file',
                            'type' => 'file',
                            'options' => [
                                'custom' => true,
                                'custom_label' => 'Voeg je document toe',
                                'form_group' => false,
                                'label_attributes' => [
                                    'data-browse' => 'Bestand kiezen',
                                ],
                            ],
                            'attributes' => ['id' => 'customFileLangHTML'],
                        ]));
                    },
                    'expected' => '<div class="custom-file">' . PHP_EOL .
                        '    <input type="file" name="custom_file" id="customFileLangHTML" ' .
                        'class="custom-file-input" value="">'
                        . PHP_EOL .
                        '    <label data-browse="Bestand&#x20;kiezen" class="custom-file-label" ' .
                        'for="customFileLangHTML">Voeg je document toe</label>' . PHP_EOL .
                        '</div>',
                ],
            ],
        ],
    ],
];
