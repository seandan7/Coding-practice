<?php

	class UserController extends Controller {
	
		public function home(){
			
			$user = Auth::user();
			$books = $user->book;
			
			// passing a variable to a view
			return View::make('home',compact('books'));
		}
		
		public function getLogin() {
			return View::make('login');
		}
		
		public function postLogin() {
			// validate user input
			$rules = array(
				'username' => 'required',
				'password' => 'required|min:4'
			);
			$validator = Validator::make(Input::all(),$rules);
			
			if ($validator->fails()){
				// form invalid
				return Redirect::route('home');
				->withErrors($validator);
				->withInput(Input::except('password'));
			}

			
			// attempt to login user
			else {
				$userdata = array(
					'username'=>Input::get('username');
					'password'=>Input::get('password');
				);
				
				$remember = Input::has('remember') ? true:false;
				
				if(Auth::attempt($userdata, $remember)){
					//authentication successfull
					 return Redirect::route('home');
				}
				else {
					//authentication fails
					return Redirect::to('login');
				}
			}
		}

		public function getRegister() {
			return View::make('register');
		}
		
		public function postRegister() {
			// validate user input
			
			// attemp to register the user
		}
		
		public function logout(){
			Auth::logout();
			return Redirect::route('login');
		}
	}