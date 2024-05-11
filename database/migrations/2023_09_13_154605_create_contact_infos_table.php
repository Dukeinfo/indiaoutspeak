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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('top_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('admin_panel_logo')->nullable();

            $table->string('admin_copyright')->nullable();
            $table->string('admin_website_name')->nullable();

            $table->string('Mobile_ios')->nullable();
            $table->string('Mobile_ios_link')->nullable();

            $table->string('Mobile_android')->nullable();
            $table->string('Mobile_android_link')->nullable();
            $table->string('favicon')->nullable()->comment('Site favicon icon');
            $table->string('apple_touch_icon')->nullable()->comment('Apple touch icon');
            
            $table->longText('disclaimer')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternate_phone')->nullable();
            $table->text('address')->nullable();
            $table->text('address2')->nullable();
            $table->string('copyright')->nullable();
            $table->string('designed_by')->nullable();
            
            $table->string('zip_code')->nullable(); 
            $table->integer('sort_id')->nullable(); 
            $table->enum('status', ['Active', 'Inactive', 'Deleted'])->default('Active');
            $table->ipAddress('ip_address')->nullable();
            $table->string('login')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('contact_infos');
    }
};
