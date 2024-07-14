    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\Str;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        // In your orders migration file
        public function up(): void
        {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $orderId = Str::uuid();
                $table->string('id_o')->default($orderId);
                $table->timestamps();
                $table->string('nama');
                $table->string('alamat');
                $table->string('nohp');
                $table->integer('quantity')->default(1); // Assuming each order is for 1 unit by default
                $table->unsignedBigInteger('coffe_id'); // Change the data type to uuid
                $table->foreign('coffe_id')->references('id')->on('coffes');
                $table->integer('total_harga')->default(0);
            });
        }


        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('orders');
        }
    };