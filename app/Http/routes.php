<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/dashboard' , function(){

  return view ('auth.dashboard');

});


/*  These are the routes for a Tutor

# Login
#Register
#List Service or Subject


*/

Route::post('/tutor/stepOne', [
  'uses' => 'TutorController@stepOne',
  'as' => 'tutor.stepone',
  'middleware'=>'guest'
  ]);

  Route::get('/tutor/stepOne', [
    'uses' => 'TutorController@stepOne',
    'as' => 'tutor.stepone',
    'middleware'=>'guest'
    ]);

  Route::post('/tutor/stepTwo', [
      'uses' => 'TutorController@stepTwo',
      'as' => 'tutor.steptwo',
      'middleware'=>'guest'
      ]);

Route::get('/tutor/stepTwo', [
        'uses' => 'TutorController@stepTwo',
        'as' => 'tutor.steptwo',
        'middleware'=>'guest'
        ]);

Route::post('/tutor/stepThree', [
          'uses' => 'TutorController@stepThree',
          'as' => 'tutor.stepthree',
          'middleware'=>'guest'
          ]);

Route::get('/tutor/stepThree', [
            'uses' => 'TutorController@stepThree',
            'as' => 'tutor.stethree',
            'middleware'=>'guest'
            ]);
Route::post('/tutor/stepFour', [
              'uses' => 'TutorController@stepFour',
              'as' => 'tutor.stepfour',
              'middleware'=>'guest'
              ]);

Route::get('/tutor/stepFour', [
                'uses' => 'TutorController@stepFour',
                'as' => 'tutor.stepfour',
                'middleware'=>'guest'
                ]);


Route::post('/tutor/stepFive', [
                  'uses' => 'TutorController@stepFive',
                  'as' => 'tutor.stepfive',
                  'middleware'=>'guest'
                  ]);

Route::get('/tutor/stepFive', [
                    'uses' => 'TutorController@stepFive',
                    'as' => 'tutor.stepfive',
                    'middleware'=>'guest'
                    ]);


Route::post('/signup', [
  'uses' => 'UserController@postSignUp',
  'as' => 'user.signup',
  'middleware'=>'guest'
  ]);

  Route::get('/newlisting/one' , function(){

    return view ('newlisting.step1');

  });

  Route::get('/help' , function(){

    return view ('help');

  });
