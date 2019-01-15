<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_pdf extends CI_Controller
{
    /**
     * Example: DOMPDF
     *
     * Documentation:
     * http://code.google.com/p/dompdf/wiki/Usage
     *
     */

    public function __construct()
    {
        parent::__construct();        
        $this->load->library('dompdf_gen');
    }

    public function index()
    {
        // load view yang akan digenerate atau diconvert
        // contoh kita akan membuat pdf dari halaman welcome codeigniter
        $this->load->view('welcome_message');

        // dapatkan output html
        $html = $this->output->get_output();
        
        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        
        //utk menampilkan preview pdf
        $this->dompdf->stream("welcome.pdf", array('Attachment' => 0));
        //atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
        //$this->dompdf->stream("welcome.pdf");
    }

    public function coba()
    {
        $user_data = $this->db->get('user')->result();
                
        $data = array('users' => $user_data);

        $this->load->view('welcome_message',$data);

        $html = $this->output->get_output();

        $this->dompdf->load_html($html);
        $this->dompdf->set_paper('A4', 'Portrait');
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }
}
/* End of file welcome_pdf.php */
/* Location: ./application/controllers/welcome_pdf.php */