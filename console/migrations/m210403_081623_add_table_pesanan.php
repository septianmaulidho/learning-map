<?php

use yii\db\Migration;

/**
 * Class m210403_081623_add_table_pesanan
 */
class m210403_081623_add_table_pesanan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pesanan}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'tanggal' => $this->date(),
            'alamat' => $this->string(),
            'jarak' => $this->float(),
            'harga' => $this->float()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210403_081623_add_table_pesanan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210403_081623_add_table_pesanan cannot be reverted.\n";

        return false;
    }
    */
}
