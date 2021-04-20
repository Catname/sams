# 学生成绩管理系统


## 使用方法

clone 到本地后
```
cd sams/
cp .env.example .env # 配置一下

composer install
# 建表并填充测试数据
php artisan migrate
php artisan db:seed
# 或者你也可以
php artisan migrate:fresh --seed

```

## 有以下几个功能
### 根据总分排名的顺序查看学生信息

### 新增学生信息

### 删除学生信息


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
