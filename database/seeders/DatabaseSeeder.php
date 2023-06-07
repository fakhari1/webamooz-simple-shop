<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'image_url' => 'images\brands\samsung.png',
        ]);

        Brand::create([
            'title_fa' => 'ال جی',
            'title_en' => 'lg',
            'image_url' => 'images\brands\lg.PNG',
        ]);

        Brand::create([
            'title_fa' => 'اپل',
            'title_en' => 'apple',
            'image_url' => 'images\brands\apple.png',
        ]);

        Brand::create([
            'title_fa' => 'لنُوو',
            'title_en' => 'lenovo',
            'image_url' => 'images\brands\lenovo.png'
        ]);

        /*
            table->foreignId('category_id')->constrained('categories');
            $table->foreignId('brand_id')->nullable()->constrained('brands');
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedInteger('price');
            $table->text('images');
            $table->text('description');
        */

        Product::create([
            'category_id' => Category::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'parent_id' => $digitalProduct->id
            ])->id,
            'brand_id' => Brand::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'image_url' => 'images\brands\apple.png',
            ])->id,
            'name' => $productName = 'محصول شماره 1',
            'slug' => $productSlug = Str::slug($productName),
            'price' => '1230000',
            'image_url' => 'images\products\php-backend-developer.jpg',
            'description' => 'لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. '
        ]);

        Product::create([
            'category_id' => Category::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'parent_id' => $digitalProduct->id
            ])->id,
            'brand_id' => Brand::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'image_url' => 'images\brands\apple.png',
            ])->id,
            'name' => $productName = 'محصول شماره 2',
            'slug' => $productSlug = Str::slug($productName),
            'price' => '1230000',
            'image_url' => 'images\products\php-backend-developer.jpg',
            'description' => 'لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. '
        ]);

        Product::create([
            'category_id' => Category::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'parent_id' => $digitalProduct->id
            ])->id,
            'brand_id' => Brand::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'image_url' => 'images\brands\apple.png',
            ])->id,
            'name' => $productName = 'محصول شماره 3',
            'slug' => $productSlug = Str::slug($productName),
            'price' => '1230000',
            'image_url' => 'images\products\php-backend-developer.jpg',
            'description' => 'لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. '
        ]);

        Product::create([
            'category_id' => Category::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'parent_id' => $digitalProduct->id
            ])->id,
            'brand_id' => Brand::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'image_url' => 'images\brands\apple.png',
            ])->id,
            'name' => $productName = 'محصول شماره 4',
            'slug' => $productSlug = Str::slug($productName),
            'price' => '1230000',
            'image_url' => 'images\products\php-backend-developer.jpg',
            'description' => 'لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. '
        ]);

        Product::create([
            'category_id' => Category::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'parent_id' => $digitalProduct->id
            ])->id,
            'brand_id' => Brand::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'image_url' => 'images\brands\apple.png',
            ])->id,
            'name' => $productName = 'محصول شماره 5',
            'slug' => $productSlug = Str::slug($productName),
            'price' => '1230000',
            'image_url' => 'images\products\php-backend-developer.jpg',
            'description' => 'لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. '
        ]);

        Product::create([
            'category_id' => Category::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'parent_id' => $digitalProduct->id
            ])->id,
            'brand_id' => Brand::query()->firstOrCreate([
                'title_fa' => 'تست',
                'title_en' => 'test',
                'image_url' => 'images\brands\apple.png',
            ])->id,
            'name' => $productName = 'محصول شماره 6',
            'slug' => $productSlug = Str::slug($productName),
            'price' => '1230000',
            'image_url' => 'images\products\php-backend-developer.jpg',
            'description' => 'لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. لورم ایپسوم یک متن تستی برای محصولات این فروشگاه است. '
        ]);
    }
}
