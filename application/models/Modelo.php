<?php
class Modelo extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();

    }

    public function get_reportes(){
        $this->db->select('idReporte, Fecha, Titulo, Mensaje, Destinatario, Remitente');
        $query =  $this->db->get('Reporte');
        return $query->result_array();
    }

    public function get_temperaturas(){
        $this->db->select('idTemperatura, ValorTemperatura');
        $query =  $this->db->get('Temperatura');
        return $query->result_array();
    }

    public function get_presiones(){
      $this->db->select('idPresion, ValorPresion');
      $query =  $this->db->get('Presion');
      return $query->result_array();
    }
    public function get_velocidades(){
        $this->db->select('idVelocidad,ValorVelocidad');
        $query =  $this->db->get('Velocidad');
        return $query->result_array();
    }
    public function get_humedades(){
      $this->db->select('idHumedad, ValorHumedad');
      $query =  $this->db->get('Humedad');
      return $query->result_array();
    }

    public function get_administradores(){
        $this->db->select('idAdministrador, Nombre, Apellido, Contraseña, Correo');
        $query =  $this->db->get('Administrador');
        return $query->result_array();
    }

    public function get_direcciones(){
        $this->db->select('idDireccion, DireccionViento');
        $query =  $this->db->get('DireccionViento');
        return $query->result_array();
    }
}
