<?php 

    use Springy\Kernel;
    use Springy\URI;
    use Springy\Controller;

    class Test_Controller extends Controller
    {
        public function _default()
        {
            
            $Test = new Test([]);

            $this->_template('test/list')->assign('list', $Test->all());
            $this->template->display();

        }

        public function form()
        {
            
            list($action, $ID) = array_pad(explode('|',$this->action), 10, null);
            
            $Test = new Test();

            if($ID){
                $Test->load(["id"=>$ID]);
            }

            $this->_template('test/form')->assign('Test', isset($Test->all()[0])?$Test->all()[0]:[]);
            $this->template->display();

        }

        public function update()
        {
            
            $data = $_POST;

            $Test = new Test();

            if(!isset($data['id']) || $data['id']==''){
                $Test->nome = $data['nome'];
                $Test->save(true);
            }else{
                $Test->update($data,["id"=>$data['id']]);
            }

            header("location: /test");

        }

        public function del()
        {
            
            list($action, $ID) = array_pad(explode('|',$this->action), 10, null);

            $Test = new Test();
            $Test->delete(["id"=>$ID]);

            header("location: /test");

        }

    }

?>