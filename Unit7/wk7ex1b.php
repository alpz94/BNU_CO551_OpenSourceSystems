<!-- Author: Ana Lucia Petinga Zorro
CO551 Open Source Systems -->
<?php
    use Phinx\Migration\AbstractMigration;

    class MyNewMigration extends AbstractMigration
    {
        public function change()
        {
            $monster = $this->table('monster');
            $monster->addColumn('id', 'integer')
                ->addColumn('Name', 'string', ['limit' => 20])
                ->addColumn('Image', 'binary')
                ->addColumn('Audio', 'binary')
                ->addIndex(['id'], ['unique' => true])
                ->create();
        }
    }
?>