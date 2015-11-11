<?php
defined('BASEPATH') OR exit('No direct script access allowed');


if ( ! function_exists('secure'))
{
	/**
	 *
	 * Trim data agar tidak ada spasi
	 * Gunakan html_entities
	 * Mysql real escape string
	 *
	 */
	function secure($input)
	{

		$input = trim($input);
		$input = mysql_real_escape_string($input);
		$input = htmlentities($input);
		return $input;
	}
}

if ( ! function_exists('multisecure'))
{
	/**
	 *
	 * Untuk keamanan data, trim inputan agar tidak ada spasi, Htmlentities
	 *
	 */
	function multisecure($array)
	{
		foreach ($array as $key => $value) {
			$array[$key] = secure($value);
		}
		return $array;
	}
}

if ( ! function_exists('captcha'))
{
	/**
	 *
	 * Untuk keamanan data, trim inputan agar tidak ada spasi, Htmlentities
	 *
	 */
	function captcha($width=330,$height=40)
	{
		$CI =& get_instance();
		$prevCap = $CI->session->userdata('captcha');
        
        if(!empty($prevCap))
        {
            if(file_exists('Assets/captcha/'.$prevCap['filename']))
            {
               unlink('Assets/captcha/'.$prevCap['filename']);
            }
            
            $CI->session->unset_userdata('captcha');
        }
            
		$CI->load->helper('captcha');
		$vals = array(
		    'word'	       => rand(1001,9999),
		    'img_path'	   => './Assets/captcha/',
		    'img_url'	   => base_url().'Assets/captcha/',
		    'img_width'	   => $width,
		    'img_height'   => $height,
		    'expiration'   => 7200,
		    'font_size'	   => 50,
		    'colors'       => array(
            'background' => array(255, 255, 255),
            'border'     => array(255, 255, 255),
            'text'       => array(0, 0, 0),
            'grid'       => array(255, 140, 40))
		    );

		$cap = create_captcha($vals);
        
        $CI->session->set_userdata('captcha', array('word'=>$cap['word'], 'filename'=>$cap['filename']));

		return $cap;
	}
}

if (! function_exists('pesan')) 
{
	
}

if (! function_exists('pesan_full')) 
{
	function pesan_full($data=array())
	{
		$CI =& get_instance();

		if (empty($data) || $data['judul']===NULL || $data['pesan'] === NULL || $data['nama_tombol'] === NULL || $data['link'] === NULL) 
		{
			$data['judul']			= "opps, maaf :'(";
			$data['pesan'] 			= "Halaman yang anda cari tidak ditemukan";
			$data['nama_tombol']	= "Home";
			$data['link']			= base_url();
		}

		$CI->load->view('home/vpesan', $data);
	}
}

