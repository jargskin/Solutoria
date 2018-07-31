<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Peliculas_model extends CI_Model {
        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }
        function crearPelicula($data){
            $this->db->insert('peliculas', array(
                'nombrePelicula' => $data['nombre'],
                'disponible' => $data['disponible'],
                'codigo' => $data['codigo']
            ));
             redirect('/success/success', 'refresh');
        }


        function obtenerPeliculas(){
            $query = $this->db->get('peliculas');
            if($query->num_rows() > 0 ) return $query;
            else return false;
        }

        function obtenerPelicula($id){
            $this->db->where('idPelicula', $id);
            $query = $this->db->get('peliculas');
            if($query->num_rows() > 0 )  return $query;
            else return false;
        }

        function actualizarPelicula($id, $data){
            $datos = array(
                'nombrePelicula' => $data['nombre'],
                'disponible' => $data['disponible'],
                'codigo' => $data['codigo']
            );
            $this->db->where('idPelicula', $id);
            $query = $this->db->update('peliculas', $datos);
        }

        function eliminarPelicula($id){
            //$query = "DELETE FROM cursos WHERE idcurso = $id";
            //$this->db->query($query);
            $this->db->delete('peliculas',array('idPelicula' => $id));
            $data['from'] = 'Pelicula eliminada con éxito';
             return $data;
        }
    }
?>