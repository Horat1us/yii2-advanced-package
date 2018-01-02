<?php


namespace Horat1us\Package\Records;


use Horat1us\Package\Queries\ExampleRecordQuery;
use yii\db\ActiveRecord;

/**
 * Class ExampleRecord
 * @package Horat1us\Package\Records
 *
 * @property-read int $id
 * @property string $text
 */
class ExampleRecord extends ActiveRecord
{
    public function rules()
    {
        return [
            ['text', 'required',],
            ['text', 'string', 'min' => 1,],
        ];
    }

    public static function find()
    {
        return new ExampleRecordQuery(get_called_class());
    }
}