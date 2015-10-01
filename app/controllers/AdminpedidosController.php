<?php

class AdminpedidosController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'ver'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }

    public function ver()
    {    
        $usuario=null;
        $pedidos = DB::table('datosventas')->orderBy('id', 'DESC')->get();
        $this->layout->content = View::make('admin.lospedidos', array('pedidos'=>$pedidos) ); 
         
    }

}