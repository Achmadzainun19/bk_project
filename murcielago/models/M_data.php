<?php

defined('BASEPATH') OR exit('No direct script access allowed');



	class M_data extends CI_Model{

		function input_data($data,$table){

            $this->db->insert($table,$data);

        }

        function hapus_data($where,$table){

            $this->db->where($where);

            $this->db->delete($table);

        }

        function update_data($where,$data,$table){

            $this->db->where($where);

            $this->db->update($table,$data);

        }

        function semua($table){

            return $this->db->get($table);

        }

        function where($table,$where){

            return $this->db->get_where($table,$where);

        }

        function ordernya($name,$or,$table){

            $this->db->order_by($name, $or);

            $query = $this->db->get($table);

            return $query;

        }



				function siswa_kelas($id){

					$this->db->join('kelas','siswa.kelas=kelas.id_kelas','left');

					$this->db->where('siswa.id_siswa',$id);

					$query = $this->db->get('siswa');

					return $query;

				}



				function count_akum_poin($id){

					$this->db->select('SUM(poin) as total');

					$this->db->where('id_siswa',$id);

					$query = $this->db->get('pelanggaran_siswa');

					return $query;

				}



				function list_guru(){

					$this->db->join('users','guru.id_user=users.id','left');

					$query = $this->db->get('guru');

					return $query;

				}



				function list_siswa(){

					$this->db->join('users','siswa.id_user=users.id','left');

					$this->db->join('kelas','siswa.kelas=kelas.id_kelas','left');

					$query = $this->db->get('siswa');

					return $query;

				}



				function list_pelanggaran_siswa($id){

					$this->db->join('pelanggaran_siswa','pelanggaran_siswa.id_pelanggaran=pelanggaran.id_pelanggaran','left');

					$this->db->join('kategori_pelanggaran','pelanggaran.id_kategori_pelanggaran=kategori_pelanggaran.id_kategori','left');

					$this->db->where('pelanggaran_siswa.id_siswa',$id);

					$query = $this->db->get('pelanggaran');

					return $query;

				}



        function cek_akhir($name,$or,$table){

            $this->db->order_by($name, $or);

            $this->db->limit('1');

            $query = $this->db->get($table);

            return $query;

		}
		
		// tambahan achmad zainun
		function list_konseling_siswa($id_siswa){
			if($id_siswa==''){
			}else{
				$this->db->where('konseling_siswa.data_siswa_id_siswa',$id_siswa);
			}
			$this->db->join('siswa','siswa.id_siswa=konseling_siswa.data_siswa_id_siswa','left');
			$this->db->join('kelas','siswa.kelas=kelas.id_kelas','left');
			$query = $this->db->get('konseling_siswa');
			return $query;
			
		}



    }

