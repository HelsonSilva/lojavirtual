<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigView extends Model
{
    use HasFactory;
    
    private $View;
    private $Data;

    public function __construct($view, array $data = null)
    {
        $this->View = (string) $view;
        $this->Data = $data;
    }

    public function render()
    {
        include_once 'App/resource/views/includes/header.php';
        if (file_exists("App/{$this->View}.php")) {
            include_once "App/{$this->View}.php";
        } else {
            echo "Erro ao carregar a Página: {$this->Nome}";
        }
        include_once 'App/resource/views/includes/footer.php';
    }

}
