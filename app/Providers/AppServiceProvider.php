<?php

namespace App\Providers;

use Carbon\CarbonInterval;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
//       необходим если забудем добавить игрлоад,
        Model::preventLazyLoading(!app()->isProduction());
        //вызывает эксепшн если будем сохранять поле, которое отсутствует в fillable
        Model::preventSilentlyDiscardingAttributes();
        // когда запрос к бд > чем количество мс оповещает
        DB::whenQueryingForLongerThan(500, function (Connection $connection) {
            logger()
                ->channel('telegram')
                ->debug('whenQueryLongerThan: ' . $connection->query()->toSql());
        });

        $kernel = app(Kernel::class);

        $kernel->whenRequestLifecycleIsLongerThan(
            CarbonInterval::seconds(4),
            function () {
                logger()
                    ->channel('telegram')
                    ->debug('Долгий запрос: ' . request()->url());
            }
        );
    }
}
