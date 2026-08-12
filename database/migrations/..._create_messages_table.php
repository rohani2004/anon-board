public function up(): void 
{ 
    Schema::create('messages', function (Blueprint $table) { 
        $table->id(); 
        $table->text('content'); 
        $table->timestamps(); 
    }); 
}