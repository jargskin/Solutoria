<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller {
    function __construct(){
        parent::__construct();
       $this->load->helper('form');
       $this->load->model('peliculas_model');

    }

    function index(){
        $this->load->view('headers/headers');

        $data['peliculas'] = $this->peliculas_model->obtenerPeliculas();
        $this->load->view('peliculas/peliculas', $data);

    }
    function recibirdatos(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'disponible' => $this->input->post('disponible'),
            'codigo' => $this->input->post('codigo')

        );
        $this->peliculas_model->crearPelicula($data);
    }
    function agregar(){
        
        $this->load->view('headers/headers');
        $this->load->view('peliculas/agregar');

    }
    function modificar(){
        $data['id'] = $this->uri->segment(3);
        $data['pelicula'] = $this->peliculas_model->obtenerPelicula( $data['id']);
        $this->load->view('headers/headers');
        $this->load->view('peliculas/modificar', $data);
    }

    function actualizar(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'disponible' => $this->input->post('disponible'),
            'codigo' => $this->input->post('codigo')
        );
        $this->peliculas_model->actualizarPelicula($this->uri->segment(3), $data);
        redirect(base_url());

    }
   
    function eliminar($id){
        $id = $this->uri->segment(3);
        $data['from'] = $this->peliculas_model->eliminarPelicula($id);
        redirect('/success/success', $data);

    }
    function obtenerPeliculas(){

    }

}
?>