<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Cria uma coluna "id" com tipo de dado BIGINT auto-incrementado e chave primária.
            $table->string('name'); // Cria uma coluna "name" do tipo VARCHAR (255) para armazenar o nome do produto.
            $table->text('description'); // Cria uma coluna "description" do tipo TEXT para armazenar a descrição do produto.
            $table->double('price', 10, 2); // Cria uma coluna "price" do tipo DOUBLE com 10 dígitos no total e 2 casas decimais para armazenar o preço do produto.
            $table->string('slug'); // Cria uma coluna "slug" do tipo VARCHAR (255) para armazenar o slug (URL amigável) do produto.
            $table->string('image'); // Cria uma coluna "image" do tipo VARCHAR (255) para armazenar o caminho ou nome da imagem do produto.
            $table->unsignedBigInteger('id_user'); // Cria uma coluna "id_user" do tipo UNSIGNED BIGINT para armazenar a chave estrangeira relacionada ao usuário.
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); // Define "id_user" como uma chave estrangeira que referencia a coluna "id" da tabela "users". Se o usuário for deletado, todos os produtos associados a ele serão deletados em cascata. Se o "id" do usuário for atualizado, o "id_user" será atualizado em cascata.

            $table->unsignedBigInteger('id_category'); // Cria uma coluna "id_category" do tipo UNSIGNED BIGINT para armazenar a chave estrangeira relacionada ao usuário.
            $table->foreign('id_category')->references('id')->on('categoryes')->onDelete('cascade')->onUpdate('cascade'); // Define "id_category" como uma chave estrangeira que referencia a coluna "id" da tabela "categorys". Se o usuário for deletado, todos os produtos associados a ele serão deletados em cascata. Se o "id" do usuário for atualizado, o "id_user" será atualizado em cascata.

            $table->timestamps(); // Cria as colunas "created_at" e "updated_at" do tipo TIMESTAMP para armazenar as datas de criação e atualização do registro.
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
