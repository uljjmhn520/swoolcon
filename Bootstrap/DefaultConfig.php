<?php
/**
 * @brief
 * Created by PhpStorm.
 * User: zy&cs
 * Date: 17-3-29
 * Time: 下午8:18
 */


//开发时加上这一段
//check config files
if (!file_exists(config_path('Config.php'))) {
    copy(content_path('Example/Config/Config.php'), config_path('Config.php'));
}

if (!file_exists(config_path('Router.php'))) {
    copy(content_path('Example/Config/Router.php'), config_path('Router.php'));
}