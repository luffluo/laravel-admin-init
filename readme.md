# Project Name

### 说明
```
master 分支 开发分支，最上游分支
pre-production 预生产分支，测试分支，master 的下游分支
production 生产环境分支 pre-production 下游分支

其它分支都是 功能分支或 Bug 修复分支，可以删除
```

### 安装
```
git clone git@github.com:luffluo/laravel-admin-init.git.git
cd laravel-admin-init

composer install --prefer-dist

// 线上环境
composer install --no-dev --prefer-dist

cp .env.example .env

vim .env // 编辑 .env，填写数据库，域名等信息

php artisan key:generate
php artisan migrate --seed
php storage:link
```

### 更改项目所有者为www用户/组
```
chown -R www:www laravel-admin-init
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
* * * * * /usr/local/php/bin/php /data/www/laravel-admin-init/artisan schedule:run > /dev/null
```

## 更新后台菜单
```
// 生成菜单
php artisan admin:menu-iseed

// 更新菜单
php artisan admin:menu-update
```

## 在网页上查看数据库表结构
```
// 执行下面的命令
php artisan vendor:publish --provider=Jormin\\DDoc\\DDocServiceProvider --force

// 访问下面的地址
xxx.com/ddoc
```
