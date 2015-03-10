The generator code for 3DS Interactive Co., Ltd.
================================================
Code Generator

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
        {
            "type": "package",
            "package": {
                "name": "yii3ds/yii2-3ds-gii",
                "version": "0.0.1",
                "type": "yii2-extension",
                "require": {
                    "yiisoft/yii2": "*"
                },
                "autoload": {
                    "psr-4": {
                        "yii3ds\\gii\\": ""
                    }
                },
                "source": {
                    "url": "https://ton3ds:gvkgsvlyf@bitbucket.org/3dsinteractive/yii2-3ds-gii.git",
                    "type": "git",
                    "reference": "origin/master"
                },
                
                "extra": {
                    "bootstrap": "yii3ds\\gii\\Bootstrap"
                }
            }
        }

```

and add

```
"yii3ds/yii2-3ds-gii": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php