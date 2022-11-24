<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /** Sedding secara manual */
        // User::create([
        //     'name' => 'Nuevalen Refitra',
        //     'email' => 'nuevalenra05@gamil.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Alfin Hilmawan',
        //     'email' => 'alfin05@gamil.com',
        //     'password' => bcrypt('12345')
        // ]);

        /* Make aoutomattical user */
        User::factory(3)->create();


        /* Make automaticall Category  */
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desaign',
            'slug' => 'web-desaign'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error , accusantium voluptas enim corrupti.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti. Quam neque vero aut nisi illo tenetur mollitia voluptatem reiciendis a placeat. Quod suscipit asperiores exercitationem. Suscipit dolor, ratione corporis ut aperiam doloribus repudiandae. Quos harum aliquid cupiditate aperiam! Sapiente minima saepe fuga voluptatem quisquam incidunt dolorum, similique magnam aperiam et architecto magni! Eum, a. Ex recusandae dicta ratione similique? Nisi corrupti cupiditate hic natus, distinctio accusamus similique minus quos est at eveniet provident facilis culpa suscipit aspernatur rem consectetur temporibus, voluptatem exercitationem architecto nulla qui. Animi, nesciunt, voluptate eos ut aliquid beatae distinctio assumenda soluta expedita, ea fugit reprehenderit aspernatur. Nihil, laborum ab error doloremque quae neque esse ut soluta quis, magnam nemo sed odit suscipit molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptate neque eum dignissimos eaque deleniti ipsa porro, officia numquam libero rerum, eveniet, magnam dicta corporis quod tempora illo facere? Expedita exercitationem ex officiis alias officia cum corrupti, reiciendis nemo ea quos impedit nam minus sed consectetur at facilis blanditiis saepe! Quo, architecto quos! Hic quasi iste ipsam commodi, cumque atque distinctio nisi assumenda, similique, ipsa quas unde eligendi aut voluptates minus nostrum? Ad ab dolorum quaerat voluptate velit recusandae odio in, facilis dicta exercitationem cupiditate quos doloremque temporibus rem quisquam minus. At, unde laborum repudiandae sequi, excepturi magnam ut eaque eum mollitia quibusdam quo quae! Recusandae molestias nemo, dolore ad nobis autem ipsa.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti. Quam neque vero aut nisi illo tenetur mollitia voluptatem reiciendis a placeat. Quod suscipit asperiores exercitationem. Suscipit dolor, ratione corporis ut aperiam doloribus repudiandae. Quos harum aliquid cupiditate aperiam! Sapiente minima saepe fuga voluptatem quisquam incidunt dolorum, similique magnam aperiam et architecto magni! Eum, a. Ex recusandae dicta ratione similique? Nisi corrupti cupiditate hic natus, distinctio accusamus similique minus quos est at eveniet provident facilis culpa suscipit aspernatur rem consectetur temporibus, voluptatem exercitationem architecto nulla qui. Animi, nesciunt, voluptate eos ut aliquid beatae distinctio assumenda soluta expedita, ea fugit reprehenderit aspernatur. Nihil, laborum ab error doloremque quae neque esse ut soluta quis, magnam nemo sed odit suscipit molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptate neque eum dignissimos eaque deleniti ipsa porro, officia numquam libero rerum, eveniet, magnam dicta corporis quod tempora illo facere? Expedita exercitationem ex officiis alias officia cum corrupti, reiciendis nemo ea quos impedit nam minus sed consectetur at facilis blanditiis saepe! Quo, architecto quos! Hic quasi iste ipsam commodi, cumque atque distinctio nisi assumenda, similique, ipsa quas unde eligendi aut voluptates minus nostrum? Ad ab dolorum quaerat voluptate velit recusandae odio in, facilis dicta exercitationem cupiditate quos doloremque temporibus rem quisquam minus. At, unde laborum repudiandae sequi, excepturi magnam ut eaque eum mollitia quibusdam quo quae! Recusandae molestias nemo, dolore ad nobis autem ipsa.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti. Quam neque vero aut nisi illo tenetur mollitia voluptatem reiciendis a placeat. Quod suscipit asperiores exercitationem. Suscipit dolor, ratione corporis ut aperiam doloribus repudiandae. Quos harum aliquid cupiditate aperiam! Sapiente minima saepe fuga voluptatem quisquam incidunt dolorum, similique magnam aperiam et architecto magni! Eum, a. Ex recusandae dicta ratione similique? Nisi corrupti cupiditate hic natus, distinctio accusamus similique minus quos est at eveniet provident facilis culpa suscipit aspernatur rem consectetur temporibus, voluptatem exercitationem architecto nulla qui. Animi, nesciunt, voluptate eos ut aliquid beatae distinctio assumenda soluta expedita, ea fugit reprehenderit aspernatur. Nihil, laborum ab error doloremque quae neque esse ut soluta quis, magnam nemo sed odit suscipit molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptate neque eum dignissimos eaque deleniti ipsa porro, officia numquam libero rerum, eveniet, magnam dicta corporis quod tempora illo facere? Expedita exercitationem ex officiis alias officia cum corrupti, reiciendis nemo ea quos impedit nam minus sed consectetur at facilis blanditiis saepe! Quo, architecto quos! Hic quasi iste ipsam commodi, cumque atque distinctio nisi assumenda, similique, ipsa quas unde eligendi aut voluptates minus nostrum? Ad ab dolorum quaerat voluptate velit recusandae odio in, facilis dicta exercitationem cupiditate quos doloremque temporibus rem quisquam minus. At, unde laborum repudiandae sequi, excepturi magnam ut eaque eum mollitia quibusdam quo quae! Recusandae molestias nemo, dolore ad nobis autem ipsa.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi eius eaque sunt placeat optio consequatur voluptates laborum illo quos, voluptatem ex, vitae possimus inventore? Fugit debitis itaque quod magnam ipsam corporis a, et assumenda, nemo repudiandae error, accusantium voluptas enim corrupti. Quam neque vero aut nisi illo tenetur mollitia voluptatem reiciendis a placeat. Quod suscipit asperiores exercitationem. Suscipit dolor, ratione corporis ut aperiam doloribus repudiandae. Quos harum aliquid cupiditate aperiam! Sapiente minima saepe fuga voluptatem quisquam incidunt dolorum, similique magnam aperiam et architecto magni! Eum, a. Ex recusandae dicta ratione similique? Nisi corrupti cupiditate hic natus, distinctio accusamus similique minus quos est at eveniet provident facilis culpa suscipit aspernatur rem consectetur temporibus, voluptatem exercitationem architecto nulla qui. Animi, nesciunt, voluptate eos ut aliquid beatae distinctio assumenda soluta expedita, ea fugit reprehenderit aspernatur. Nihil, laborum ab error doloremque quae neque esse ut soluta quis, magnam nemo sed odit suscipit molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptate neque eum dignissimos eaque deleniti ipsa porro, officia numquam libero rerum, eveniet, magnam dicta corporis quod tempora illo facere? Expedita exercitationem ex officiis alias officia cum corrupti, reiciendis nemo ea quos impedit nam minus sed consectetur at facilis blanditiis saepe! Quo, architecto quos! Hic quasi iste ipsam commodi, cumque atque distinctio nisi assumenda, similique, ipsa quas unde eligendi aut voluptates minus nostrum? Ad ab dolorum quaerat voluptate velit recusandae odio in, facilis dicta exercitationem cupiditate quos doloremque temporibus rem quisquam minus. At, unde laborum repudiandae sequi, excepturi magnam ut eaque eum mollitia quibusdam quo quae! Recusandae molestias nemo, dolore ad nobis autem ipsa.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
