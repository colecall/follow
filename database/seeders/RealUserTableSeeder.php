<?php

namespace Database\Seeders;

use App\Models\RealAccount;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = User::all();
        $categories = [
            'Follow Instagram Account',
            'Subscribe Youtube Channel',
            'Follow Tiktok Account',
            'Likes Youtube Video',
            'Comment Instagram Post',
            'Comment Youtube Video',
            'Comment Tiktok Video',
            'Like Tiktok Video',
            'Like Instagram Post',
        ];
        foreach ($users as $user) {
            $categoryCounts = [
                'Follow Instagram Account' => 1,
                'Subscribe Youtube Channel' => 1,
                'Follow Tiktok Account' => 1,
                'Likes Youtube Video' => 0,
                'Comment Instagram Post' => 0,
                'Comment Youtube Video' => 0,
                'Comment Tiktok Video' => 0,
                'Like Tiktok Video' => 0,
                'Like Instagram Post' => 0,
            ];
            for ($i = 0; $i < 50; $i++) {
                $category = $categories[array_rand($categories)];
                if (in_array($category, ['Follow Instagram Account', 'Subscribe Youtube Channel', 'Follow Tiktok Account'])) {
                    if ($categoryCounts[$category] > 0) {
                        continue;
                    }
                    $categoryCounts[$category]++;
                }
                $username = "{$user->name} {$categoryCounts[$category]}";
                $status = 'active';
                RealAccount::create([
                    'user_id' => $user->id,
                    'category' => $category,
                    'username' => $username,
                    'status' => $status,
                    'counter' => 0
                ]);
            }
        }
    }
}
