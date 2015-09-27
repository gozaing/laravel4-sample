<?php
/**
 * Created by IntelliJ IDEA.
 * User: baru
 * Date: 2015/09/27
 * Time: 21:39
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Todo extends Model {

    // ソフトデリートをクラスに追加
    use SoftDeletingTrait;

    const STATUS_INCOMPLETE = 1; // 未完了
    const STATUS_COMPLETED = 2;  // 完了

//    protected $table = 'todos';

    protected $guarded = ['id'];

    public $timestamps  = true;

    protected $dates = ['completed_at', 'deleted_at'];

    

}