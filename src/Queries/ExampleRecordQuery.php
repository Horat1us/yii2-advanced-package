<?php


namespace Horat1us\Package\Queries;


use Horat1us\Package\Records\ExampleRecord;
use yii\db\ActiveQuery;

/**
 * Class ExampleRecordQuery
 * @package Horat1us\Package\Queries
 *
 * @see ExampleRecord
 */
class ExampleRecordQuery extends ActiveQuery
{
    public function whereTextLike(string $text): ExampleRecordQuery
    {
        return $this->andWhere(['like', 'text', $text]);
    }
}