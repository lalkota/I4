<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        
        dd("here");
        //$this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
/*
        $this->call(EmployeeTableSeeder::class);

        $this->call(ClientTableSeeder::class);

        //$this->call(MenuTableSeeder::class);

        $this->call(AllowenceAppliedTableSeeder::class);
        $this->call(AllowenceTableSeeder::class);

        $this->call(AttachmentTableSeeder::class);
        $this->call(AttendanceTableSeeder::class);

        $this->call(CommentTableSeeder::class);
        $this->call(LeaveAppliedTableSeeder::class);
        $this->call(LeaveTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(NotificationToTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectTeamTableSeeder::class);
        $this->call(TicketTableSeeder::class);*/
    }
}
