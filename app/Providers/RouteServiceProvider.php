<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
  /**
   * The path to your application's "home" route.
   *
   * Typically, users are redirected here after authentication.
   *
   * @var string
   */
  public const HOME = '/home';

  /**
   * Define your route model bindings, pattern filters, and other route configuration.
   */
  public function boot(): void
  {
    RateLimiter::for('api', function (Request $request) {
      return Limit::perMinute(120)->by($request->user()?->id ?: $request->ip());
    });

    $this->routes(function () {
      Route::middleware('api')
        ->prefix('api')
        ->group(function() {
          // SYSTEM
          require base_path('routes/API/V1/System/app.php');
          require base_path('routes/API/V1/System/auth.php');
          require base_path('routes/API/V1/System/user.php');
          // PESSOA
          require base_path('routes/API/V1/Pessoa/cliente.php');
          require base_path('routes/API/V1/Pessoa/ie.php');
          require base_path('routes/API/V1/Pessoa/endereco.php');
          require base_path('routes/API/V1/Pessoa/contato.php');
          require base_path('routes/API/V1/Pessoa/certificado.php');
          // COMERCIAL
          require base_path('routes/API/V1/Comercial/estoque_movimento.php');
          require base_path('routes/API/V1/Comercial/estoque_produto.php');
          require base_path('routes/API/V1/Comercial/estoque.php');
          require base_path('routes/API/V1/Comercial/marca.php');
          require base_path('routes/API/V1/Comercial/produto_tipo.php');
          require base_path('routes/API/V1/Comercial/produto.php');
          // MANUTENCAO
          require base_path('routes/API/V1/Manutencao/ordem.php');
          require base_path('routes/API/V1/Manutencao/ordem_tipo.php');
        });

      /*Route::middleware('web')
        ->group(base_path('routes/web.php'));*/
    });
  }
}
