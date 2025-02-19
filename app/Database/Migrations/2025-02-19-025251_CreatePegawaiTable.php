<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePegawaiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jabatan_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,  
            ],
            'nama_pegawai' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',   
            ],
            'alamat_pegawai' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',   
            ],
            'nomor_telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',   
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('jabatan_id', 'jabatan', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
