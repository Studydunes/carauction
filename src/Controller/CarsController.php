<?php
namespace App\Controller;
use App\Controller\AppContoller;
use Cake\Datasource\ConnectionManager;
class CarsController extends AppController{
  	public function initialize(){
		parent::initialize();
		$this->viewBuilder()->layout('Carlayout');
		$this->loadModel("Users");
	    $this->loadModel("Cars");
         $this->loadComponent('Flash');
	}
	public function home(){

	}

public function sell(){
     $this->layout = false;
        $car = $this->Cars->newEntity();
        //Entity is a set of one record of table and their relational table, on that you can perform operation without touch of database and encapsulate property of entity (fields of table) as you want.
        if ($this->request->is('post')){
            $imageName = $this->request->data['image']['name'];
        $filepath = getcwd() . '/img/uploads/' . $imageName;

            $car = $this->Cars->patchEntity($car, $this->request->data);  
            $car->image =  $imageName ;
            $car->minbid =  $this->request->data['minbid'];
            if ($this->Cars->save($car)) {
                print_r($this->request->data['image']['tmp_name']);
                chmod($filepath, 0777);
            
                move_uploaded_file($this->request->data['image']['tmp_name'], $filepath);
                
            // chmod($filepath, 0777);


                $this->Flash->success(__('Your details has been saved'));
                return $this->redirect(['action' => 'buy']);
            }else{
             $this->Flash->error(__('Unable to add your details.'));    
            }
            
        }
        $this->set('car', $car);
        
    }  

 
   
public function buy(){
    
       $cars=$this->Cars->find("all",["order"=>["id"=>"desc"]
    ]);

        $this->set("cars",$cars);

    }
    public function description($id){
        $cars = $this->Cars->get($id);
         // print_r($cars);
         // exit;
        $this->set('cars', $cars);
        // exit;
    }

                   
     public function biddingprocess($id){
        
        // print_r($id);

         // $this->layout = false;
        
        $this->loadModel('Bids');
        $this->loadModel('Cars');
          // $this->set('cars', $cars);
        $bid = $this->Bids->newEntity();
        //Entity is a set of one record of table and their relational table, on that you can perform operation without touch of database and encapsulate property of entity (fields of table) as you want.
        if ($this->request->is('post')) {
            $bid = $this->Bids->patchEntity($bid, $this->request->data);

              // $cars = $this->Cars->get($id);
            $bid->car_id = $id;
            if ($this->Bids->save($bid)) {
                $this->Flash->success(__('Your details has been saved'));
                
                return $this->redirect(['action' => 'details',$id]);

            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('bid', $bid);
        // $this->set('cars', $cars);
    }
    public function details($id){

     $this->loadModel('Bids');
    $this->loadModel('cars');
    // $this->loadModel('Users');
    // $this->loadModel('Buyers');
    $cars = $this->Cars->get($id);
     // print_r($cars);
     // exit;
     $cars->car_id = $id;
    // print_r($id);
    // exit;
    // $this->loadModel('Cars');
    // $this->loadModel('Users');
     // $this->loadModel('Cars');
    // $cars = $this->Cars->get($id);
    // print_r($cars);
    // exit;
    $bids=$this->Bids->find("all", ["order"=>["Bids.id"=>"desc"],'contain'=>['cars','Buyers']])
    ->where(['car_id' => $id])
    ->toArray();
    // ;  
    // $this->set('cars',$cars);
    $this->set("bids",$bids);
// $data = $bids

    }






    public function winner($id){
        $this->loadModel("Bids");
      $cars = $this->Cars->get($id);
      // print_r($cars);
      $cars->id=$id;
        print_r($id);


}




}
























	
   
