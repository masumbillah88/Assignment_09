<h1>Personal Portfolio Project</h1>
<p>
===========================<br><br>
1. At first I have created the project with composer creat-project md9p1.<br>
2. Then, under the view foloder of laravel, a master layout has been created in the layout folder and named app.blade.php.<br>
3. Created another folder named pages under views and made four views manually named aboutMe.blade.php, contact.blade.php,home.blade.php and projects.blade.php.<br>
4. Created a components folder to keep the different componets like as navbar, header and footer.<br>
5. Under the app section of laravel, I have created the following controllers to run the views created in pages folder.<br>
    -> AboutController<br>
    ->ContactController<br>
    ->HomeController<br>
    ->ProjectsController<br>
6. Then, I have configured routes for the above mentioned views as such:
    Rout::get('/',[HomeController::class,'home']);<br>
7. Created links among the different views with the master layout with @include('layouts.app') method and created section in the views with @section('content') and then sent data with this section to master layout using @yield directive.<br>
8. Used bootstrap framework to develope the frontend interface.<br>
9. Created links among different views.</p>