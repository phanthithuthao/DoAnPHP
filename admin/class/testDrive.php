<?php
if (!defined('HOST')) exit;
class testDrive extends db
{
    function getAll()
    {
        return $this->selectQuery('select * from test_drives');
    }
    function delete($id)
    {
        return $this->updateQuery('delete from test_drives where id=?', [$id]);
    }
}
