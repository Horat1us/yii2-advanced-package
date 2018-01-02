<?php

namespace Horat1us\Package\Components;

use yii\base\Component;

/**
 * Class SampleComponent
 * @package Horat1us\Package\Components
 */
class SampleComponent extends Component
{
    const EVENT_SOMETHING_DONE = 'something-done';

    public function doSomething()
    {
        $this->trigger(static::EVENT_SOMETHING_DONE);
    }
}
