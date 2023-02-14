<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Group;
use App\Models\User;
use App\Models\DrivingLesson;
use App\Models\TheoreticalLesson;
use App\Models\Usluga;
use App\Models\Application;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $names = ['KIA Ceed', 'Hyundai Elantra', 'Hyundai Accent'];
        $numbers = ['н698го', 'в791ен', 'в567нр'];

        for($i = 0; $i < count($names); $i++){
            Car::create(['name' => $names[$i], 'number' => $numbers[$i]]);
        }

        $groups_name = ['Группа обучения 1А', 'Группа обучения 8Б', 'Группа обучения 2А'];
        $groups_time = ['Дневное обучение', 'Дневное обучение', 'Вечернее обучение'];
        for($i = 0; $i < count($groups_name); $i++){
            Group::create(['name' => $groups_name[$i], 'time' => $groups_time[$i]]);
        }

        $user_names = ['Иванов Иван Иванович', 'Батуев Геннадий Васильевич', 'Калашникова Марианна Климентьевна', 'Алексеенко Снежана Николаевна'];
        $user_emails = ['ivanov@mail.ru', 'venyabatuev@mail.ru', 'kalash@mail.ru', 'snezhan123@mail.ru'];
        $password = Hash::make('user');
        $user_numbers = ['+7 (918) 345-78-13', '+7 (964) 190-87-13', '+7 (918) 156-01-15', '+7 (918) 156-01-15'];
        $user_statuses = ['Admin', 'Новый пользователь', 'Инструктор', 'Преподаватель'];
        for($i = 0; $i < count($user_names); $i++){
            User::create(['name' => $user_names[$i], 'email' => $user_emails[$i], 'password' => $password, 'number' => $user_numbers[$i], 'status' => $user_statuses[$i]]);
        }

        User::create(['name' => 'Петров Петр Петрович', 'email' => 'petrowpetya@mail.ru', 'password' => $password, 'number' => '+7 (964) 922-38-71', 'status' => 'Новый пользователь', 'group_id' => '1']);

        $names = ['Учебное вождение в городе', 'Учебное вождение в городе'];
        $students = ['1', '5'];
        $instructor = '3';
        $dates = ['Пн, Вт, Ср, Чт, Пт', 'Пн, Вт, Ср, Чт, Пт'];
        $times = ['13:00:00', '11:00:00'];
        $cars = ['1', '2'];
        for($i = 0; $i < count($names); $i++){
            DrivingLesson::create(['name' => $names[$i], 'student_id' => $students[$i], 'instructor_id' => $instructor, 'date' => $dates[$i], 'time' => $times[$i], 'car_id' => $cars[$i]]);
        }

        $names = ['Проезд перекрестков', 'Обязанности водителя', 'Общие положения'];
        $teacher = '4';
        $dates = ['2022-12-07', '2022-12-07', '2022-12-07'];
        $times = ['10:30:00', '12:00:00', '13:30:00'];
        $groups = ['1', '2', '3'];
        for($i = 0; $i < count($names); $i++){
            TheoreticalLesson::create(['name' => $names[$i], 'teacher_id' => $teacher, 'date' => $dates[$i], 'time' => $times[$i], 'group_id' => $groups[$i]]);
        }

        $names = ['Обучение категории A', 'Обучение категории B', 'Обучение категории C', 'Обучение категории D', 'Восстановление навыков'];
        $descriptions = 'К вождению Вы приступаете уже на следующий день после заключения договора, то есть не ждёте месяц-полтора, а начинаете практиковаться на автодроме сразу, параллельно теоретическим занятиям!';
        $prices = ['21000', '37000', '43000', '42000', '12000'];
        $files = ['moto.jpg', 'avto.jpg', 'truck.jpg', 'bus.jpg', 'treaning.jpg'];
        for($i = 0; $i < count($names); $i++){
            Usluga::create(['name' => $names[$i], 'description' => $descriptions, 'price' => $prices[$i], 'image' => $files[$i]]);
        }

        $users_id = ['1', '2'];
        $uslugi_id = ['1', '2'];
        $usl_times = ['Дневное обучение', 'Вечернее обучение'];
        $usl_dates = ['2022.01.01', '2023.01.02'];
        for($i = 0; $i < count($users_id); $i++){
            Application::create(['user_id' => $users_id[$i], 'usluga_id' => $uslugi_id[$i], 'time' => $usl_times[$i], 'date' => $usl_dates[$i]]);
        }
    }
}
