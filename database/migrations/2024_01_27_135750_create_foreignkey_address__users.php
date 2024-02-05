<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('addresses', function (Blueprint $table) {


            // O campo 'address_id' da tabela 'users' faz referenecia ao campo 'id' da tabela 'address'
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                /*

                onDelete('SET NULL'); -> Quando deletar um endereço e o mesmo estiver fazendo referencia a algum registro
                da tabela usuario, após o endereço ser deletado o campo address_id ficara NULO

                onDelete('CASCADE'); -> Apos apagar o endereço o usuario que esta relacionado será deletado
                 */
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
            //
            $table->$table->dropForeign('user_id');
        });
    }
};
