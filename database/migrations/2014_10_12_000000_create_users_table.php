<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('pan_no')->unique()->nullable();
            $table->string('aadhar_no')->unique()->nullable();
            $table->string('phone_no')->unique()->nullable();
            $table->string('landline_no')->nullable();
            $table->string('user_type')->nullable();
            $table->string('company_name')->nullable();
            $table->string('gst_no')->unique()->nullable();
            $table->string('pf_number')->unique()->nullable();
            $table->string('father_name')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('type_of_customer')->nullable();
            $table->string('type_of_business')->nullable();
            $table->string('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->boolean('is_active')->nullable()->default(true);
            $table->boolean('tearms_and_service')->nullable()->default(false);
            $table->boolean('subcription_payment_recevied_boolean')->nullable()->default(false);
            $table->string('subcription_payment_received_date')->nullable();
            $table->string('subcription_end_date')->nullable();
            $table->string('subcription_price')->nullable();
            $table->string('last_login_time')->nullable();
            $table->string('user_created_date')->nullable();
            $table->string('logo')->nullable();
            $table->string('invoice_prefix')->nullable();
            $table->string('last_invoice_series_no')->nullable();


            $table->string('role')->default('userc');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
