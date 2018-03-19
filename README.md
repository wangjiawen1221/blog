

## 链接
- 博客：[http://wjiawen.cn](http://wjiawen.cn)   

## 简介
laravel 


下图中的[王加文博客](https://wjiawen.cn)即是使用 laravel-bjyblog 开发的个人博客
![laravel-bjyblog](https://wjiawen.cn/uploads/article/20171210/5a2d533982e36.jpg)  

## 安装使用
可以通过以下两种命令安装；  
```bash
composer create-project baijunyao/laravel-bjyblog  blog && cd blog && php artisan bjyblog:install && php artisan bjyblog:migrate
```
或者：  
```bash
git clone git@gitee.com:shuaibai123/laravel-bjyblog.git blog && cd blog && cp .env.example .env && composer install -vvv && php artisan bjyblog:install && php artisan bjyblog:migrate
```
更加详细的安装文档请参考文章：[开源项目系列之thinkphp](https://wjiawen.cn/article/129)  

## 项目介绍
1. 纯手工前台响应式页面布局适配PC、平板、手机；
2. 带表情的ajax无限级评论系统；
3. 队列邮件通知；
4. QQ、微博、github第三方登录；
5. markdown 编辑器；

## 版权
项目使用 MIT 协议；免费开源可随意使用；

## 使用本项目搭建的博客
- [王加文博客](https://wjiawen.cn)   
欢迎提交PR或者告诉我来收录你的网站；  
