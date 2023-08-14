<?php 
namespace Dev\MakeItEasy;
use Illuminate\Support\ServiceProvider;

class MakeItEasyServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'make_it_easy');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

    }
    public function register(){
        
    }

}