// Uncomment this line

$app->withFacades();

$app->withEloquent();

$app->routeMiddleware([
    'auth' => App\Http\Middleware\Authenticate::class,
]);

$app->register(App\Providers\AuthServiceProvider::class);

$app->register(Tymon\JWTAuth\Providers\LumenServiceProvider::class);