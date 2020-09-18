发送邮件类
========
[![Version](https://poser.pugx.org/happy/send-email/version)](//packagist.org/packages/happy/send-email) [![Total Downloads](https://poser.pugx.org/happy/send-email/downloads)](//packagist.org/packages/happy/send-email) [![License](https://poser.pugx.org/happy/send-email/license)](//packagist.org/packages/happy/send-email) 

**NOTE**

这是一个简单的邮件发送类，可满足在PHP日常邮件发送功能。

开源项目：https://github.com/xw921211/sendEmail.git

Installing
==========

将依赖项添加到项目

```bash
composer require happy/send-email
```

Usage
=====

```php
<?php

use happy\Email;

$smtper = new Email();

/**
 * setServer有五个参数
 * 第一个 $server 代理服务器的ip或者域名
 * 第二个 $username 认证账号
 * 第三个 $password 认证密码
 * 第四个 $port 代理服务器的端口，smtp默认25号端口
 * 第五个 $isSecurity 到服务器的连接是否为安全连接，默认false
 */
$smtper->setServer('smtp.qq.com', 'xxx', 'xxx');

/*setFrom参数为发件人地址*/
$smtper->setFrom('xxx@xxx.com');

/*setReceiver参数为收件人地址,多个收件人，调用多次*/
$smtper->setReceiver('xxx@xxx.com');

/*addAttachment参数为附件地址,没有附件可以不进行调用*/
$smtper->addAttachment("XXXX.png"); 

/**setMail有两个参数
 * 第一个 $body 邮件主题
 * 第二个 $subject 邮件主体内容，可以是纯文本，也可是是HTML文本
 */
$smtper->setMail('xxx','xxx');

/*发送邮件*/
$smtper->send();
```