<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Crudify\Traits\FillsColumns;

class ApManagement extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->timestamps();
        $table->string('ap_name');
        $table->string('ap_ip_address');
        $table->string('ap_username')->nullable();
        $table->string('ap_password')->nullable();
        $table->string('ap_marka_model')->nullable();
        $table->string('mikrotik_api_version')->nullable();
        $table->string('ap_ssh_port')->nullable();
        $table->string('ap_api_port')->nullable();
        $table->boolean('ap_permission_yonet')->default(0)->nullable();
        $table->string('ap_status')->nullable();
        $table->boolean('ap_monitor')->default(0)->nullable();
        $table->float('ap_avarage_1_day', 7, 3)->nullable();
        $table->float('ap_last_ping', 7, 3)->nullable();
        $table->string('ap_port_speed')->nullable();
        $table->integer('last_frequency')->nullable();
        $table->string('auto_backup')->nullable();
        $table->string('ap_vlan')->nullable();
        $table->string('ap_max_wlan_register')->nullable();
        $table->string('ap_max_pppoe')->nullable();
        $table->string('ap_switch_port_number')->nullable();
        $table->date('ap_installation_date')->nullable();
    }

    public static function definition(Generator $faker)
    {
        return [
            'name' => $faker->name,
        ];
    }

    public static function rules(ApManagement $apManagement = null)
    {
        return [
            'name' => ['required', Rule::unique('ap_managements')->ignore($apManagement->id ?? null)],
        ];
    }
}
