<?php

namespace Tutorial\Controller;
session_start();
use Pop\Application;
use Pop\Controller\AbstractController;
use Pop\Form\Filter;
use Pop\Http\Request;
use Pop\Http\Response;
use Tutorial\Table;
use Pop\View\View;
use Tutorial\Form;
use Tutorial\Model;


class IndexController extends AbstractController
{

    protected $application;
    protected $request;
    protected $response;
    protected $viewPath;

    public function __construct(Application $application, Request $request, Response $response)
    {
        $this->application = $application;
        $this->request     = $request;
        $this->response    = $response;
        $this->viewPath    = __DIR__ . '/../../view';
    }

    public function index()
    {
        $link = new Model\Admin();
        $baseUrl= $this->request->getBasePath();

        $view = new View($this->viewPath . '/index.phtml');
        $view->title = 'Welcome';
        $view->baseUrl= $baseUrl;
        $view->links = $link->getAll();

        $this->response->setBody($view->render());
        $this->response->send();
    }

    public function post()
    {
        $view = new View($this->viewPath . '/post.phtml');
        $view->title = 'Post Comment';
        $view->form  = new Form\Post();

        if ($this->request->isPost()) {
            $view->form
            // ->addFilter(new Filter\Filter('strip_tags'))
            //      ->addFilter(new Filter\Filter('htmlentities', [ENT_QUOTES, 'UTF-8']))
                 ->setFieldValues($this->request->getPost());

            if ($view->form->isValid()) {
                // $view->form->clearFilters()
                //      ->addFilter(new Filter\Filter('html_entity_decode', [ENT_QUOTES, 'UTF-8']));

                $post = new Model\Post();
                $post->save($view->form);
                Response::redirect('/');
                exit();
            }
        }

        $this->response->setBody($view->render());
        $this->response->send();
    }

    public function admin()
    {
        $baseUrl= $this->request->getBasePath();
        $view = new View($this->viewPath . '/admin.phtml');
        $view->title = 'Admin Panel';
        $view->baseUrl= $baseUrl;
        $view->form  = new Form\Admin();

        if ($this->request->isPost()) {
            $view->form
            // ->addFilter(new Filter\Filter('strip_tags'))
            //      ->addFilter(new Filter\Filter('htmlentities', [ENT_QUOTES, 'UTF-8']))
                 ->setFieldValues($this->request->getPost());

            if ($view->form->isValid()) {
                // $view->form->clearFilters()
                //      ->addFilter(new Filter\Filter('html_entity_decode', [ENT_QUOTES, 'UTF-8']));

                $patient = new Model\Admin();
                $patient->save($view->form);
                $baseUrl= $this->request->getBasePath();
                Response::redirect($baseUrl);
                exit();
            }
        }

        $this->response->setBody($view->render());
        $this->response->send();
    }

    public function register()
    {
        $baseUrl= $this->request->getBasePath();
        $link = new Model\Admin();

        $view = new View($this->viewPath . '/register.phtml');
        $view->title = 'Please fill your details';
        $view->baseUrl= $baseUrl;
        $view->form  = new Form\Register();
        $view->links = $link->getAll();
           
        $email = $this->request->getQuery('email');
        $token = $this->request->getQuery('token');
        $view->email = $email;
        $user = Table\Admins::findOne(['email' => $email]);
        $view->type = $user->type;
        // echo "<pre>".print_r($user)."</pre>";
        // die;
        if( isset($email) || isset($token) ){

            if($user->email == $email || $user->token == $token ){
               
                if ($this->request->isPost()) {
                    
                $view->form->setFieldValues($this->request->getPost());
    
                if ($view->form->isValid()) {
                    
                    $patient = new Model\Register();
                    $patient->save($view->form);
                    $baseUrl= $this->request->getBasePath();
                    Response::redirect($baseUrl);
                    exit();
                  }
              }
            
                $this->response->setBody($view->render());
                $this->response->send();   
            }
        }
           
        else{
            $baseUrl= $this->request->getBasePath();
            Response::redirect($baseUrl.'/error');
        }

    }
    public function error()
    {
        $baseUrl= $this->request->getBasePath();
        $view = new View($this->viewPath . '/error.phtml');
        $view->title = 'Check your link';
        $view->baseUrl= $baseUrl;
        $this->response->setBody($view->render());
        $this->response->send(404);
    }

}
