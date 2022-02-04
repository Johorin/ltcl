<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//論理削除用関数SoftDeletesのインポート
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、paginateでページネーションの制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title',
        'body',
    ];
    
    //Categoryに対するリレーション
    //categoryテーブルのレコードに対してただ一つのリレーションを持つ
    
    //「1対多」の関係なのでと単数形に
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
