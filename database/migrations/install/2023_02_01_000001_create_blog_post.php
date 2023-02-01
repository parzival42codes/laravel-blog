<?php

use App\Models\Address;
use App\Models\BlogItem;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * Add the User
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(BlogItem::DBNAME, function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->text('post_title');
            $table->longText('post_content');
            $table->text('post_status');
            $table->text('post_password');
            $table->boolean('comment_status');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists(BlogItem::DBNAME);
        Schema::enableForeignKeyConstraints();
    }
};
