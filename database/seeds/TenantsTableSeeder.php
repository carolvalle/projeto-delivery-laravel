<?php

use App\Models\{
    Plan,
    Tenant
};
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'cnpj' => '000000000000000',
            'name' => 'Carol Valle Ltda',
            'url' => 'carolvalle.com',
            'email' => 'carolvalle.arq@gmail.com',
        ]);
    }
}
