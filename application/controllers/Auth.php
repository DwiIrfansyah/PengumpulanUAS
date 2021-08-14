<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends CI_Controller 
    {
        public function __construct()
     {
        parent::__construct();
        $this->load->library('form_validation');
     }

        public function index()
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if($this->form_validation->run() == false)
            {
                $data['judul'] = 'Login';
                $this->load->view('templates/auth_header', $data);
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            }else {
                $this->_login();
            }
        }
         private function _login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->db->get_where('user', ['username' => $username])->row_array();

            if($user) {
                if(($password) == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'password' => $user['password']
                    ];
                    $this->session->set_userdata($data);
                    redirect('dashboard');       
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Paswsword yang di masukan salah
                  </div>');
                    redirect('auth'); 
                }
            }else{
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Username Salah
              </div>');
                redirect('auth');
            }
        } 
        
        public function logout()
        {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Anda Telah Logout
          </div>');
            redirect('auth');
        }

    }?>
    <script>
    (function(global) {

        if (typeof(global) === "undefined") {
            throw new Error("window is undefined");
        }

        var _hash = "";
        var noBackPlease = function() {
            global.location.href += "#";

            // making sure we have the fruit available for juice (^__^)
            global.setTimeout(function() {
                global.location.href += "!";
            }, 50);
        };

        global.onhashchange = function() {
            if (global.location.hash !== _hash) {
                global.location.hash = _hash;
            }
        };

        global.onload = function() {
            noBackPlease();

            // disables backspace on page except on input fields and textarea..
            document.body.onkeydown = function(e) {
                var elm = e.target.nodeName.toLowerCase();
                if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                    e.preventDefault();
                }
                // stopping event bubbling up the DOM tree..
                e.stopPropagation();
            };
        }

    })(window);
</script>