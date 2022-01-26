<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Postモデルクラスのuse宣言追加
use App\Post;

class PostController extends Controller
{
	/**
	*  *  * Post一覧を表示する
	*   *   * 
	*    *    * @param Post Postモデル
	*     *     * @return array Postモデルリスト
	*      *      */
	public function index(Post $post)
	{
		            // return $post->get();
		            //withメソッドでviewに変数を渡すことができる。
		            //with(['変数名' => 変数に渡す内容]);とすることでviewの指定したbladeファイル側で変数$postsが使用できるようになる。
		            //return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
		            print_r($post);
	}
	/**
	 * 特定IDのpostを表示する
	 *
	 * @params Object Post // 引数の$postはid=1のPostインスタンス
	 * @return Reposnse post view
	 */
	public function show(Post $post)
	{
	    //return view('posts/show')->with(['post' => $post]);
	    dd($post);
	}
}
