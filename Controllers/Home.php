<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Pagina Principal';
        $this->views->getView('home', "index", $data);
    }

    //vista about 

    public function about()
    {
        $data['title'] = 'Nuestro equipo';
        $this->views->getView('principal', "about", $data);
    }
//vista tienda
    public function shop()
    {
        $data['title'] = 'Nuestro productos';
        $this->views->getView('principal', "shop", $data);
    }

    //vista details
    public function detail($id_producto)
    {
        $data['title'] = '-----';
        $this->views->getView('principal', "detail", $data);
    }

    
    //vista details
    public function contactos($id_producto)
    {
        $data['title'] = 'Contactos';
        $this->views->getView('principal', "contact", $data);
    }

}