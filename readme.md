# 名师直播课

### 说明
```
master 分支 开发分支，最上游分支
pre-production 预生产分支，测试分支，master 的下游分支
production 生产环境分支 pre-production 下游分支

其它分支都是 功能分支或 Bug 修复分支，可以删除
```

### 安装
```
git clone git@git.yokitalk.com:luojingying/datitong-live.git
cd datitong-live
composer install --prefer-dist
cp .env.example .env

vim .env // 编辑 .env，填写数据库，域名等信息

php artisan key:generate
php artisan migrate --seed
php storage:link
```

### 更改项目所有者为www用户/组
```
chown -R www:www datitong-live
```

### 后台管理员账号
```
账号: admin
密码: 123456
```

### 定时任务配置(线上环境)
```
crontab -e // 编辑服务器定时任务
// 添加下面命令 保存退出
* * * * * /usr/local/php/bin/php /data/www/datitong-live/artisan schedule:run > /dev/null
```
