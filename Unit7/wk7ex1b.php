<?php
    use Phinx\Migration\AbstractMigration;

    class MyNewMigration extends AbstractMigration
    {
        public function change()
        {
            $monster = $this->table('monster');
            $monster->addColumn('id', 'integer')
                ->addColumn('Name', 'string', ['limit' => 20])
                ->addColumn('Image', 'string')
                ->addColumn('Audio', 'string')
                ->addIndex(['id'], ['unique' => true])
                ->create();
        }
    }
?>