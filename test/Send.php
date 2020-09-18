<?php
/**
 * @Description: 发送邮件示例
 * @Author: xuewei
 * @Date: 2020/9/18 14:00
 */

namespace happy;

class Send{

    public function sendEmail(){
        $smtper = new Email();
        /**
         * setServer有五个参数
         * 第一个 $server 代理服务器的ip或者域名
         * 第二个 $username 认证账号
         * 第三个 $password 认证密码
         * 第四个 $port 代理服务器的端口，smtp默认25号端口
         * 第五个 $isSecurity 到服务器的连接是否为安全连接，默认false
         */
        $smtper->setServer('smtp.qq.COM', 'xxx', 'xxx');

        /*setFrom参数为发件人地址*/
        $smtper->setFrom('xw921211@qq.com');

        /*setReceiver参数为收件人地址,多个收件人，调用多次*/
        $smtper->setReceiver('xuewei@xiniaogongkao.com');

        /**setMail有两个参数
         * 第一个 $body 邮件主题
         * 第二个 $subject 邮件主体内容，可以是纯文本，也可是是HTML文本
         */
        $smtper->setMail('hello','welcome');

        /*发送邮件*/
        $smtper->send();
    }

}
