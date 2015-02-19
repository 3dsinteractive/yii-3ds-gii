<?php
/**
 * Created by Sublime Text2.
 * User: untinosz
 * Date: 19.02.15
 * Time: 11:30
 */

namespace yii3ds\gii\base;


use yii\base\Object;

class Provider extends Object
{
    /**
     * @var \yii3ds\gii\crud\Generator
     */
    public $generator;
    public $columnNames = [''];
} 