<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','TaskController@index' );
Route::get('/{task}','TaskController@show' );




// Route::get('/', function () {
//     // $tasks = DB::table('tasks')->get();
//     // $tasks = App\Task::all();
//     $tasks=App\Task::incomplete();

//     return view('welcome',compact('tasks'));
// });


// Route::get('/{task}', function ($id) {
//     // $task = DB::table('tasks')->find($id);
//     $task = App\Task::find($id);

//     // dd($task);
//     return view('show',compact('task'));
// });

// Route::get('hello', function () {
//     //способы передачи во вью
//     // в массиве вызов в коде {{$name}} или <?=$name 7>
//     // return view('hello',[
//     //     'name'=>'Alex'
//     // ]);
//     // второй вариант
//     // return view('hello')->with('name','alexey');
//     //третий вариант
//     // $name="Vladislav";
//     // return view('hello',['name'=>$name]);
//     //четвертый вариант compact обрпатная операция extract
//     // $name="Vsevolod";
//     // return view('hello',compact('name'));
//     // передаем массивы
//     $name=['add task','find task','remove task'];
//     return view('hello',compact('name'));
//     /* вызов в блэйде
//         <ul>
//             <?php foreach ($name as $n):7>
//             <li><?=$n 7></li>
//             <?php endforeach; 7>
//         </ul>
//     или в нотации хелпера
//     @foreach ($name as $n)
//       <li>{{$n}}</li>
//     @endforeach
//     */
// });
