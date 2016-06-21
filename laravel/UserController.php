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
					return Redirect::to('login')
										->with('message','Invalid Username/password comination')
										->with('alert-class','alert-danger');
				}
			}
		}

		public function getRegister() {
			return View::make('register');
		}
		
		public function postRegister() {
			// validate user input
			$validator = User::validate(Input::all());
			if ($validator->passes()) {
				// attempt to register the user
				User::create(array(
					'username'=>Input::get('username'),
					'email'=>Input::get('email'),
					'email'=>Input::get('password')
				));

				return Redirect::route('login')->withMessage('You have successfully registered');
			}
			
			return Redirect::route('register')->withErrors($validator);
		
		}
		
		public function logout(){
			Auth::logout();
			return Redirect::route('login')
							->with('message','You have successfully logged out!')
		}
	}