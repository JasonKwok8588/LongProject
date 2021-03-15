<?php

/*
作业:页面模板引擎话

->安装
路由: 路由组：命名空间,路由前缀 、 中间件、post和get方法
 -》闭包写法 ：Rouete::get('/',function(){return 'hellow word'})
    中间件——》空间名
控制器: 生成 php artisan make:controller PhotoController --resource
            php artisan :laravel 里面的工具
            web 前端
            admin 后端

           
生命周期 public ->index.php入口文件 开始 加载 ->vendor(第三方包，可通过 composer install 安装回来)->

bootstrap -> app.php


中间件 : 一般用于身份识别
-> 生成中间件 php artsian make:middleware CheckAge


作业:页面压缩包-》全封成模板引擎 所有的路由都以控制器去写，登录页面可以单独起页面
要求主页不抄过一百行，头、侧边栏


 */