<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model {
    protected $table = 'jftarog_myguests';
    protected $allowedFields = ['name','email','website','comment','gender'];
    
    public function getGuests() {
       return $this->findAll();
    }
}

?>