<?php
/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2014 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yii3ds\gii;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 * @package yii3ds\gii
 * @author Noppparid Mokpradab <nopparid@3dsinteractive.com>
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {

            if (!isset($app->getModule('gii')->generators['yii3ds-gii-model'])) {
                $app->getModule('gii')->generators['yii3ds-gii-model'] = 'yii3ds\gii\model\Generator';
            }
            if (!isset($app->getModule('gii')->generators['yii3ds-gii-crud'])) {
                $app->getModule('gii')->generators['yii3ds-gii-crud'] = 'yii3ds\gii\crud\Generator';
            }
            if ($app instanceof \yii\console\Application) {
                $app->controllerMap['yii3ds-gii-batch'] = 'yii3ds\gii\commands\BatchController';
            }
        }
    }
}