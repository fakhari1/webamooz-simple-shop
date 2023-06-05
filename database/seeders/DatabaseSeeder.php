<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $digitalProduct = Category::create([
            'title_fa' => 'کالای دیجیتال',
            'title_en' => 'digital goods'
        ]);

        Category::create([
            'title_fa' => 'لپتاپ و کامپیوتر',
            'title_en' => 'laptop and computer',
            'parent_id' => $digitalProduct->id,
        ]);
        Category::create([
            'title_fa' => 'لوازم خانگی',
            'title_en' => 'home appliances',
            'parent_id' => $digitalProduct->id,
        ]);
        Category::create([
            'title_fa' => 'ویجت و گجت',
            'title_en' => 'widget and gadget',
            'parent_id' => $digitalProduct->id,
        ]);


        $mobile = Category::create([
            'title_fa' => 'موبایل',
            'title_en' => 'mobile',
        ]);

        Category::create([
            'title_fa' => 'گوشی اپل',
            'title_en' => 'apple phone',
            'parent_id' => $mobile->id
        ]);

        Category::create([
            'title_fa' => 'گوشی سامسونگ',
            'title_en' => 'samsung phone',
            'parent_id' => $mobile->id
        ]);

        Category::create([
            'title_fa' => 'گوشی شیائومی',
            'title_en' => 'xiaomi phone',
            'parent_id' => $mobile->id
        ]);

        $home = Category::create([
            'title_fa' => 'خانه و آشپزخانه',
            'title_en' => 'home and kitchen',
        ]);

        Category::create([
            'title_fa' => 'تلویزیون',
            'title_en' => 'television',
            'parent_id' => $home->id
        ]);

        Category::create([
            'title_fa' => 'یخچال',
            'title_en' => 'refrigerator',
            'parent_id' => $home->id
        ]);

        $modeAndWearing = Category::create([
            'title_fa' => 'مد و پوشاک',
            'title_en' => 'fashion and clothing',
        ]);

        Category::create([
            'title_fa' => 'مردانه',
            'title_en' => 'male',
            'parent_id' => $modeAndWearing->id
        ]);

        Category::create([
            'title_fa' => 'زنانه',
            'title_en' => 'female',
            'parent_id' => $modeAndWearing->id
        ]);


        Brand::create([
            'title_fa' => 'سامسونگ',
            'title_en' => 'samsung',
            'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/1200px-Samsung_Logo.svg.png?20221128191222',
        ]);

        Brand::create([
            'title_fa' => 'ال جی',
            'title_en' => 'lg',
            'image_url' => 'https://static.vecteezy.com/system/resources/previews/019/017/463/original/lg-transparent-logo-free-png.png',
        ]);

        Brand::create([
            'title_fa' => 'اپل',
            'title_en' => 'apple',
            'image_url' => 'https://w7.pngwing.com/pngs/566/77/png-transparent-apple-logo-apple-watch-logo-apple-logo-heart-logo-computer-wallpaper.png',
        ]);

        Brand::create([
            'title_fa' => 'لنُوو',
            'title_en' => 'lenovo',
            'image_url' => 'https://w7.pngwing.com/pngs/650/1002/png-transparent-dell-laptop-lenovo-logo-lg-electronics-text-trademark.png'
        ]);


    }
}
