<?php

use App\Models\Address;
use App\Models\BlogPost;
use App\Models\Company;
use App\Models\User;
use App\Models\Widget;
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
        Schema::create(Widget::DBNAME, function (Blueprint $table) {
            $table->id();
            $table->text('ident')
                ->unique();
            $table->text('content');
            $table->integer('sort_id');
            $table->boolean('preload')->index();
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
        Schema::dropIfExists(Widget::DBNAME);
        Schema::enableForeignKeyConstraints();
    }
};
