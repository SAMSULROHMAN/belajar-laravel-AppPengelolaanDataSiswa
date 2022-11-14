<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;

class SiswakuAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';
        if (Request::segment(1) == 'siswa') {
            $halaman = 'siswa';
        }

        if (Request::segment(1) == 'about') {
            $halaman = 'about';
        }

        if (request()->segment(1) == 'kelas') {
            $halaman = 'kelas';
        }

        if (Request::segment(1) == 'hobi') {
            $halaman = 'hobi';
        }

        if (request()->segment(1) == 'user') {
            $halaman = 'user';
        }

        view()->share('halaman',$halaman);

    }
}
