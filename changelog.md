17.10.2016
Fork it.
Changed dependencies for external repositories. Look it in composer.json
Add it to packagist by zabachok/yii2-adminlte for installing by composer.
Rewrite all namespaces to @vendor\zabachok from @vendor/almasaeed2010. Sorry :)
Removed rmrevin/yii2-fontawesome component. Added sersid/yii2-font-awesome-asset.
Removed all calls like `new \rmrevin\yii\fontawesome\component\Icon('home')` to `<i class="fa fa-home" aria-hidden="true"></i>`
