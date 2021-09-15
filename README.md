# modelFilter

习惯了laravel的[tucker-eric/eloquentfilter](https://github.com/Tucker-Eric/EloquentFilter)查询条件写法，
转到hyperf发现没有相关的包,所以这个包出现了。


# 如何使用

```
 安装最新版

 composer require rabbit-dog/filter -vvv

 创建目录
 app/ModelFilters
 
 在模型中使用trait
 
 use Rabbit\Filter\Filterable;
 class User extends Model
 {
    use Filterable;
 }
 
 创建filter类
 
 在app/ModelFilters中创建模型名+filter的文件
 
namespace App\ModelFilters;


use Rabbit\Filter\ModelFilter;

class ActiveFilter extends ModelFilter
{
    public function id($val){
        return $this->where('id',$val);
    }
}
```

## 注意

1. 参数需要为下划线分割的名称 如 product_id 那么ModelFilter中对应的方法就为productId

有问题随时提问，目前只能实现搜索

