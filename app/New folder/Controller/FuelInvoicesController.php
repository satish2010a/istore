<?php
App::uses('AppController', 'Controller');
/**
 * FuelInvoices Controller
 *
 * @property FuelInvoice $FuelInvoice
 */
class FuelInvoicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FuelInvoice->recursive = 0;
		$this->set('fuelInvoices', $this->paginate());
		
		$this->loadModel('Station');
        $stations = $this->Station->find('list', array('fields' => array('id', 'name')));
        $this->set(compact('stations', 'station_id'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		$this->set('fuelInvoice', $this->FuelInvoice->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$items = array();
			foreach($this->request->data['FuelInvoiceItem'] as $key => $fItem) {
				if($fItem['amount'] && $fItem['tank'] && $fItem['cost per gallon']) {
					$items['FuelInvoiceItem'][] = $fItem;
				}
			}
			$this->request->data['FuelInvoiceItem'] = $items['FuelInvoiceItem'];
			
			
			$this->FuelInvoice->create();
			if ($this->FuelInvoice->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		}
		$fuelSuppliers = $this->FuelInvoice->FuelSupplier->find('list');
		$stations = $this->FuelInvoice->Station->find('list');
		
		$fuelTypes = $this->FuelInvoice->FuelInvoiceItem->FuelType->find('list');
		
		$this->set(compact('fuelSuppliers', 'stations', 'fuelTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInvoice->read(null, $id);
		}
		$fuelSuppliers = $this->FuelInvoice->FuelSupplier->find('list');
		$stations = $this->FuelInvoice->Station->find('list');
		
		$fuelTypes = $this->FuelInvoice->FuelInvoiceItem->FuelType->find('list');
		
		$this->set(compact('fuelSuppliers', 'stations', 'fuelTypes'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->FuelInvoice->delete()) {
			$this->Session->setFlash(__('Fuel invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FuelInvoice->recursive = 0;
		$this->set('fuelInvoices', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		$this->set('fuelInvoice', $this->FuelInvoice->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FuelInvoice->create();
			if ($this->FuelInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		}
		$suppliers = $this->FuelInvoice->Supplier->find('list');
		$stations = $this->FuelInvoice->Station->find('list');
		$this->set(compact('suppliers', 'stations'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FuelInvoice->save($this->request->data)) {
				$this->Session->setFlash(__('The fuel invoice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fuel invoice could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FuelInvoice->read(null, $id);
		}
		$suppliers = $this->FuelInvoice->Supplier->find('list');
		$stations = $this->FuelInvoice->Station->find('list');
		$this->set(compact('suppliers', 'stations'));
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->FuelInvoice->id = $id;
		if (!$this->FuelInvoice->exists()) {
			throw new NotFoundException(__('Invalid fuel invoice'));
		}
		if ($this->FuelInvoice->delete()) {
			$this->Session->setFlash(__('Fuel invoice deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Fuel invoice was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
