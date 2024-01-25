<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalProduct extends BaseWidget
{
    protected function getStats(): array
    {
        $reserve = Product::all()->count();
        $user = User::all()->count();
        $tagging = Tag::all()->count();
        $cat = Category::all()->count();
        return [
            Stat::make(' ', $reserve)
                ->description('Total Product')
                ->descriptionIcon('heroicon-o-building-storefront')
                ->color('success'),

            Stat::make(' ', $user)
                ->description('Jumlah User')
                ->descriptionIcon('heroicon-o-users')
                ->color('success'),
            Stat::make(' ', $tagging)
                ->description('Jumlah Tag')
                ->descriptionIcon('heroicon-o-tag')
                ->color('success'),
            Stat::make(' ', $cat)
                ->description('Jumlah category')
                ->descriptionIcon('heroicon-o-bookmark')
                ->color('success'),
        ];
    }
}
