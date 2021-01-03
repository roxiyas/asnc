<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fuentefinanc extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tablas_model');
	}
	public function index()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('tablas/fuentefinanc.php');
		$this->load->view('templates/footer.php');
	}

	public function save()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('desc_fuente_financiamiento', 'desc_fuente_financiamiento', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();

				if ($this->Tablas_model->saves($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Record added Successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			if ($posts = $this->Tablas_model->get_entries()) {
				$data = array('responce' => 'success', 'posts' => $posts);
			} else {
				$data = array('responce' => 'error', 'menssage' => 'falied to fetch data');
			}
			echo json_encode($data);
		} else {
			echo "'No direct script access allowed'";
		}
	}

	public function delete()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->Tablas_model->delete_entry($del_id)) {
				$data = array('response' => "success",);
			} else {
				$data = array('response' => "error");
			}

			echo json_encode($data);
		}
	}
	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->Tablas_model->single_entry($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'error al guardar');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_desc_fuente_financiamiento', 'desc_fuente_financiamiento', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id_fuente_financiamiento'] = $this->input->post('edit_record_id');
				$data['desc_fuente_financiamiento'] = $this->input->post('edit_desc_fuente_financiamiento');

				if ($this->Tablas_model->update_entry($data)) {
					$data = array('responce' => 'success', 'message' => 'Registro Modificado Con Exito');
				} else {
					$data = array('responce' => 'error', 'message' => 'Error al Modificar Registor');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	//_________________________________________________________________________________________________________________________________	
	public function alicuotaiva()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('tablas/alicuota.php');
		$this->load->view('templates/footer.php');
	}
	public function savealicuota()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('desc_alicuota_iva', 'desc_alicuota_iva', 'required');
			$this->form_validation->set_rules('desc_porcentaj', 'desc_porcentaj', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->Tablas_model->savesalicuota($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Datos Guardado');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function fetchalicuota()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->Tablas_model->get_alicuota();
			$data = array('responce' => 'success', 'posts' => $posts);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function deletealicuota()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->Tablas_model->delete_alicuota($del_id)) {
				$data = array('response' => "success",);
			} else {
				$data = array('response' => "error");
			}

			echo json_encode($data);
		}
	}
	public function editalicuota()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->Tablas_model->single_alicuota($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'error al guardar');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function updatealicuota()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_desc_alicuota_iva', 'desc_alicuota_iva', 'required');
			$this->form_validation->set_rules('edit_desc_porcentaj', 'desc_porcentaj', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id_alicuota_iva'] = $this->input->post('edit_record_id');
				$data['desc_alicuota_iva'] = $this->input->post('edit_desc_alicuota_iva');
				$data['desc_porcentaj'] = $this->input->post('edit_desc_porcentaj');

				if ($this->Tablas_model->update_alicuota($data)) {
					$data = array('responce' => 'success', 'message' => 'Record update Successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to update record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	//_________________________________________________________________________________________________________________________________	
	public function partidap()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('tablas/partidap.php');
		$this->load->view('templates/footer.php');
	}
	public function savepartidap()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('codigopartida_presupuestaria', 'codigopartida_presupuestaria', 'required');
			$this->form_validation->set_rules('desc_partida_presupuestaria', 'desc_partida_presupuestaria', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->Tablas_model->savepartidap($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Datos Guardado');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function fetchpartidap()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->Tablas_model->get_partidap();
			$data = array('responce' => 'success', 'posts' => $posts);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function deletepartidap()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->Tablas_model->delete_alicuota($del_id)) {
				$data = array('response' => "success",);
			} else {
				$data = array('response' => "error");
			}

			echo json_encode($data);
		}
	}
	public function editpartidap()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->Tablas_model->single_partidap($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'error al guardar');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function updatepartidap()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_codigopartida_presupuestaria', 'codigopartida_presupuestaria', 'required');
			$this->form_validation->set_rules('edit_desc_partida_presupuestaria', 'desc_partida_presupuestaria', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id_partida_presupuestaria'] = $this->input->post('edit_record_id');
				$data['codigopartida_presupuestaria'] = $this->input->post('edit_codigopartida_presupuestaria');
				$data['desc_partida_presupuestaria'] = $this->input->post('edit_desc_partida_presupuestaria');

				if ($this->Tablas_model->update_partidap($data)) {
					$data = array('responce' => 'success', 'message' => 'Dato Actualizado con Exito');
				} else {
					$data = array('responce' => 'error', 'message' => 'ocurrio algun error, por favor vuelva a intentarlo');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	//_________________________________________________________________________________________________________________________________	
	public function centra()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('tablas/centralizada.php');
		$this->load->view('templates/footer.php');
	}

	public function savecentra()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('desc_accion_centralizada', 'desc_accion_centralizada', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->Tablas_model->savecentra($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Datos Guardado');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function fetchcentra()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->Tablas_model->get_centra();
			$data = array('responce' => 'success', 'posts' => $posts);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function deletecentra()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->Tablas_model->delete_alicuota($del_id)) {
				$data = array('response' => "success",);
			} else {
				$data = array('response' => "error");
			}

			echo json_encode($data);
		}
	}
	public function editcentra()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->Tablas_model->single_centra($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'error al guardar');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function updatecentra()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_desc_accion_centralizada', 'edit_desc_accion_centralizada', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id_accion_centralizada'] = $this->input->post('edit_record_id');
				$data['desc_accion_centralizada'] = $this->input->post('edit_desc_accion_centralizada');

				if ($this->Tablas_model->update_centra($data)) {
					$data = array('responce' => 'success', 'message' => 'Dato Actualizado con Exito');
				} else {
					$data = array('responce' => 'error', 'message' => 'ocurrio algun error, por favor vuelva a intentarlo');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}


	//_________________________________________________________________________________________________________________________________	
	public function und()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('tablas/und.php');
		$this->load->view('templates/footer.php');
	}
	public function saveund()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('desc_unidad_medida', 'desc_unidad_medida', 'required');

			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->Tablas_model->save_und($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Datos Guardado');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function fetchund()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->Tablas_model->get_und();
			$data = array('responce' => 'success', 'posts' => $posts);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function deleteund()
	{
		if ($this->input->is_ajax_request()) {

			$del_id = $this->input->post('del_id');

			if ($this->Tablas_model->save_und($del_id)) {
				$data = array('response' => "success",);
			} else {
				$data = array('response' => "error");
			}

			echo json_encode($data);
		}
	}
	public function editund()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->Tablas_model->single_und($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'error al guardar');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
	public function updateund()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_desc_unidad_medida', 'edit_desc_unidad_medida', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id_unidad_medida'] = $this->input->post('edit_record_id');
				$data['desc_unidad_medida'] = $this->input->post('edit_desc_unidad_medida');

				if ($this->Tablas_model->update_und($data)) {
					$data = array('responce' => 'success', 'message' => 'Dato Actualizado con Exito');
				} else {
					$data = array('responce' => 'error', 'message' => 'ocurrio algun error, por favor vuelva a intentarlo');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}


	//_________________________________________________________________________________________________________________________________	
	public function ccnu()
	{
		$this->load->view('templates/header.php');
		$this->load->view('templates/navigator.php');
		$this->load->view('tablas/ccnu.php');
		$this->load->view('templates/footer.php');
	}
}
