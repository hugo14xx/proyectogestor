<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Persona3 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'usuario_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'usuario'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'clave'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'type'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('usuario_id', true);
        $this->forge->createTable('persona3');
    }

    public function down()
    {
        $this->forge->dropTable('persona3');
    }
}
