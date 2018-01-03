<?php


namespace Horat1us\Package\Behaviors;


use yii\base\BaseObject;
use yii\base\Behavior;
use yii\base\Event;

/**
 * Class PackageBehavior
 * @package Horat1us\Package\Behaviors
 */
class PackageBehavior extends Behavior
{
    const EVENT_WAIT = 'wait';

    public function events()
    {
        return [
            /** @see wait() */
            static::EVENT_WAIT => 'wait',
        ];
    }

    public function wait(Event $event)
    {
        $sender = $event->sender;
        if ($sender instanceof BaseObject && $sender->canSetProperty('waited')) {
            $sender->waited = true;
        }
    }
}
