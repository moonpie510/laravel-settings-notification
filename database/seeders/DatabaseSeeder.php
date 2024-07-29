<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
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

        $dataToCourseDB = [
            [
                'title' => 'РАЗРАБОТКА САЙТОВ ДЛЯ ДЕТЕЙ 13–17 ЛЕТ',
                'content' => 'Cоздание веб-сайта или веб-приложения. Основными этапами процесса являются веб-дизайн, вёрстка страниц, программирование на стороне клиента и сервера, а также конфигурирование веб-сервера.',
            ],
            [
                'title' => 'ВЕБ-ДИЗАЙН ДЛЯ ДЕТЕЙ 7-17 ЛЕТ',
                'content' => 'Веб-дизайнер - одна из самых востребованных профессий сегодня. По окончании курса ваш ребенок сможет создавать персонажей для мультфильмов, дизайн для веб-сайтов, изучит правила грамотной композиции сайта и пользовательские пути.',
            ],
            [
                'title' => 'ПРОГРАММИРОВАНИЕ НА PYTHON ДЛЯ ДЕТЕЙ 11–16 ЛЕТ',
                'content' => 'За время курса ребята создадут несколько собственных проектов и попробуют себя в роли наиболее востребованных IT-специалистов — от разработчиков игр до специалистов по машинному обучению.',
            ],
        ];

        foreach ($dataToCourseDB as $data) {
            Course::create($data);
        }
    }
}
