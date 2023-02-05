<?php

use App\Enum\Model\BlogPost\StatusEnum;
use App\Models\Address;
use App\Models\BlogPost;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
        Schema::create(BlogPost::DBNAME, function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->text('post_title');
            $table->longText('post_content');
            $table->enum('post_status',[
                StatusEnum::DRAFT,
                StatusEnum::PUBLISHED,
                StatusEnum::HIDDEN,
            ])
                ->index();
            $table->text('post_password')
                ->nullable();
            $table->boolean('comment_status')
                ->nullable();
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
        Schema::dropIfExists(BlogPost::DBNAME);
        Schema::enableForeignKeyConstraints();
    }
};
