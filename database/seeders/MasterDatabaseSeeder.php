<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class MasterDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 유저 가져오기 또는 새 유저 생성
        $zombie = User::firstOrNew(['email' => 'jin03192@naver.com']);
        
        // 유저가 존재하지 않는 경우에만 이름과 패스워드 설정
        // if (!$zombie->exists) {
        //     $zombie->name = 'test';
        //     $zombie->password = bcrypt('password');
        //     $zombie->save();
        // }

        // 롤 생성 또는 기존 롤 가져오기
        $juniorMember = Role::firstOrCreate(['name' => 'juniorMember']);
        $regularMember = Role::firstOrCreate(['name' => 'regularMember']);
        $staff = Role::firstOrCreate(['name' => 'admin']);
        $serverAdmin = Role::firstOrCreate(['name' => 'root']);

        // 권한 생성 또는 기존 권한 가져오기
        $notice = Permission::firstOrCreate(['name' => 'notice']);
        // $createPosts = Permission::firstOrCreate(['name' => 'create posts']);
        // $editPosts = Permission::firstOrCreate(['name' => 'edit posts']);
        // $deletePosts = Permission::firstOrCreate(['name' => 'delete posts']);
        // $manageUsers = Permission::firstOrCreate(['name' => 'manage users']);
        // $manageServer = Permission::firstOrCreate(['name' => 'manage server']);

        // 역할에 권한 부여
        // $juniorMember->givePermissionTo($viewPosts);
        // $regularMember->givePermissionTo([$viewPosts, $createPosts]);
        $staff->givePermissionTo($notice);
        $serverAdmin->givePermissionTo($notice);

        // 유저에게 역할 할당
        $zombie->assignRole($regularMember);
    }
}
