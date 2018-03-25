<?php
class Controlador extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Modelo');
        $this->load->helper('url_helper');
    }
    public function verReportes(){
        $data['query'] = $this->Modelo->get_reportes();
        $data['label'] = array(
                                'id',
                                'fecha',
                                'titulo',
                                'mensaje',
                                'destinatario',
                                'remitente'
        );
        $data['title'] = 'resgistro de reportes';

        $this->load->view('sortedTable', $data);
    }
    public function verVelocidades(){
        $data['query'] = $this->Modelo->get_velocidades();
        $data['label'] = array(
                                'id',
                                'velocidad'
        );
        $data['title'] = 'registro de velocidades';
        $this->load->view('sortedTable', $data);
    }
    public function verAdministradores(){
        $data['query'] = $this->Modelo->get_administradores();
        $data['label'] = array(
                                'id',
                                'nombre',
                                'apellido',
                                'contraseña',
                                'correo'
        );
        $data['title'] = 'registro de administradores';
        $this->load->view('sortedTable', $data);
    }
    public function verTemperaturas(){
        $data['query'] = $this->Modelo->get_temperaturas();
        $data['label'] = array(
                                'id',
                                'tempertura'
        );
        $data['title'] = 'registro de temperaturas';
        $this->load->view('sortedTable', $data);
    }
    public function verPresiones(){
        $data['query'] = $this->Modelo->get_presiones();
        $data['label'] = array(
                                'id',
                                'presion'
        );
        $data['title'] = 'registro de presiones';
        $this->load->view('sortedTable', $data);
    }
    public function verHumedades(){
        $data['query'] = $this->Modelo->get_Humedades();
        $data['label'] = array(
                                'id',
                                'humedad'
        );
        $data['title'] = 'registro de humedades';
        $this->load->view('sortedTable', $data);
    }
    public function verDirecciones(){
        $data['query'] = $this->Modelo->get_direcciones();
        $data['label'] = array(
                                'id',
                                'direcciones'
        );
        $data['title'] = 'registro de direcciones';
        $this->load->view('sortedTable', $data);
    }
}
?>
