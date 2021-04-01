<?php
namespace App\Controllers;
 class TodoController{

     public function list()
     {
         $tasks=[
             'Task 1',
             'Task 2',
             'Task 3',
             'Task 4',
             'Task 5',
         ];

         $data=[
             'tasks'=>$tasks
         ];
         view('todo.todoList', $data);
     }

     public function add()
     {
         view('todo.todoAdd');
     }

     public function remove()
     {
         view('todo.todoRemove');
     }
 }