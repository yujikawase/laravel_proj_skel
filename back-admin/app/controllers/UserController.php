<?php

class UserController extends BaseController {

	public function getIndex()
	{
		return View::make('users.index');
	}


	public function getCreate()
	{
		return View::make('users.create');
	}

	public function postCreate()
	{
	//トークンチェック
	if (Session::getToken() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}else{
		$inputs=Input::all();
		//バリデーションルールの指定
		$rules = array (
		'username' => array ( 'required', 'min:4', 'max:50', 'unique:users' ),
		'password' => array ( 'required', 'min:4', 'max:50' ),
		);
		$val = Validator::make( $inputs, $rules );
		//バリデーションNGなら 
		if ( $val->fails() )
		{
		return Redirect::back()->withErrors( $val )->withInput();
		}
		//ユーザーの新規作成
		$user=new User;
		$user->username=Input::get('username');
		$user->service_id=Input::get('service_id');
		$user->group_id=Input::get('group_id');
		$user->password=Hash::make(Input::get('password'));
		$user->save();
		//トップページへリダイレクト
		return Redirect::to('users');
		}
	}

	public function getLogin()
	{
		return View::make('users.login');
	}

	public function postLogin()
	{
		//入力データの取得
		$inputs = Input::only(array('username', 'password'));
		//バリデーションルールの作成
		$rules = array (
		'username' => array ('required'),
		'password' => array ('required'),
		);
		//バリデーション処理
		$val = Validator::make( $inputs, $rules ); 
		//バリデーションNGなら
		if($val->fails())
		{
		//エラー値と一緒にバック
		return Redirect::back()
		->withErrors( $val )
		->withInput();
		}
		//認証NGなら
		if(!Auth::attempt($inputs))
		{
		return Redirect::back()
		->withErrors(array('warning'=>'ユーザー名かパスワードが違います。'))
		->withInput();
		}
		//TOPページへ
		return Redirect::to('/top');
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/users/login');
	}



}
